@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes do Usuário</h2>
    <a href="{{ route('users.index') }}" class="btn btn-secondary mb-3">Voltar para a Lista</a>

    @if($user)
    <div class="card">
        <div class="card-header">
            Informações do Usuário
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <img src="{{ $user['avatar'] }}" alt="Avatar" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-8">
                    <h5>{{ $user['first_name'] }} {{ $user['last_name'] }}</h5>
                    <p><strong>ID:</strong> {{ $user['id'] }}</p>
                    <p><strong>Username:</strong> {{ $user['username'] }}</p>
                    <p><strong>Email:</strong> {{ $user['email'] }}</p>
                    <p><strong>Gênero:</strong> {{ $user['gender'] }}</p>
                    <p><strong>Data de Nascimento:</strong> {{ $user['date_of_birth'] }}</p>
                    <p><strong>Telefone:</strong> {{ $user['phone_number'] }}</p>
                    <p><strong>Segurança Social:</strong> {{ $user['social_insurance_number'] }}</p>
                    <p><strong>Emprego:</strong> {{ $user['employment']['title'] }}</p>
                    <p><strong>Habilidade Principal:</strong> {{ $user['employment']['key_skill'] }}</p>
                    <p><strong>Cidade:</strong> {{ $user['address']['city'] }}</p>
                    <p><strong>Endereço:</strong> {{ $user['address']['street_address'] }}, {{ $user['address']['street_name'] }}</p>
                    <p><strong>CEP:</strong> {{ $user['address']['zip_code'] }}</p>
                    <p><strong>Estado:</strong> {{ $user['address']['state'] }}</p>
                    <p><strong>País:</strong> {{ $user['address']['country'] }}</p>
                    <p><strong>Coordenadas:</strong> Latitude {{ $user['address']['coordinates']['lat'] }}, Longitude {{ $user['address']['coordinates']['lng'] }}</p>
                    
                    <!-- Mapa do Google Maps -->
                    <div class="mt-3">
                        <h6>Localização no Mapa</h6>
                        <iframe
                            width="100%"
                            height="400"
                            frameborder="0"
                            style="border:0"
                            src="https://www.google.com/maps?q={{ $user['address']['coordinates']['lat'] }},{{ $user['address']['coordinates']['lng'] }}&zoom=15&output=embed"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <p><strong>Número do Cartão de Crédito:</strong> {{ $user['credit_card']['cc_number'] }}</p>
                    <p><strong>Plano de Assinatura:</strong> {{ $user['subscription']['plan'] }}</p>
                    <p><strong>Status da Assinatura:</strong> {{ $user['subscription']['status'] }}</p>
                    <p><strong>Método de Pagamento:</strong> {{ $user['subscription']['payment_method'] }}</p>
                    <p><strong>Termos:</strong> {{ $user['subscription']['term'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @else
    <p>Usuário não encontrado.</p>
    @endif
</div>
@endsection