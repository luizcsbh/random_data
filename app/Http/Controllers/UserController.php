<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //Método para consumir a API e salavar os dados em um arquivo JSON
    public function fetchUsers()
    {
        //Realiza a requisição HTTP para a API
        $reponse = Http::get('https://random-data-api.com/api/v2/users?size=100');

        if($reponse->successful()) {
            //Armazena os dados recebidos em um arquivo JSON
            $users = $reponse->json();
            Storage::put('users.json', json_encode($users, JSON_PRETTY_PRINT));

            return redirect()->route('users.index');    
        } else {
            return redirect()->back()->withErrors('Flaha ao buscar dados da API');
        }
    }

    //Método para exibir os usuários armazenados no arquivo JSON
    public function index()
    {
        // Verifica se o arquivo JSON existe e lê o conteúdo
        if (Storage::exists('users.json')) {
            $users = json_decode(Storage::get('users.json'), true);
        } else {
            $users = [];
        }

        // Número de itens por página
        $perPage = 10;

        // Cria uma instância do LengthAwarePaginator
        $currentPage = Paginator::resolveCurrentPage();
        $currentItems = array_slice($users, ($currentPage - 1) * $perPage, $perPage);
        $paginatedUsers = new LengthAwarePaginator(
            $currentItems,
            count($users),
            $perPage,
            $currentPage,
            ['path' => Paginator::resolveCurrentPath()]
        );

        return view('users.index', ['paginatedUsers' => $paginatedUsers]);
    }
    //Método para exibir detalhes de um usuário específico
    public function show($id)
    {
        // Verifica se o arquivo JSON existe e lê o conteúdo
        if (Storage::exists('users.json')) {
            $users = json_decode(Storage::get('users.json'), true);
            
            // Encontra o usuário com o ID fornecido
            $user = collect($users)->firstWhere('id', $id);
            
            if (!$user) {
                abort(404, 'Usuário não encontrado');
            }
        } else {
            abort(404, 'Arquivo JSON não encontrado');
        }
    
        return view('users.show', ['user' => $user]);
    }
    
}
