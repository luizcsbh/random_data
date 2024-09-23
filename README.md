![GitHub commits since tagged version (branch)](https://img.shields.io/github/commits-since/luizcsbh/random_data/main)
[![issues](https://img.shields.io/github/issues/luizcsbh/random_data)](https://github.com/luizcsbh/random_data/issues)
![forks](https://img.shields.io/github/forks/luizcsbh/random_data)
![stars](https://img.shields.io/github/stars/luizcsbh/random_data)
[![lincença](https://img.shields.io/github/license/luizcsbh/random_data)](https://github.com/luizcsbh/random_data/blob/master/LICENSE)
![code-size](https://img.shields.io/github/languages/code-size/luizcsbh/random_data)
[![commit activity](https://img.shields.io/github/commit-activity/m/luizcsbh/random_data)](https://github.com/luizcsbh/random_data/commits)
[![last commit](https://img.shields.io/github/last-commit/luizcsbh/random_data)](https://github.com/luizcsbh/random_data/commits)
[![CodeFactor](https://www.codefactor.io/repository/github/luizcsbh/random_data/badge)](https://www.codefactor.io/repository/github/luizcsbh/random_data)
[![version](https://img.shields.io/github/package-json/v/luizcsbh/random_data)](https://github.com/luizcsbh/random_data/blob/main/package.json)


# Projeto Laravel - Exibição de Usuários com Google Maps

Este projeto é uma aplicação web construída em Laravel que consome dados de usuários de uma API externa e exibe informações detalhadas, incluindo localização no Google Maps, em uma interface de usuário.

## Funcionalidades

- Busca de usuários de uma API externa.
- Armazenamento dos dados de usuários em um arquivo JSON.
- Exibição de uma lista paginada de usuários.
- Visualização de detalhes de cada usuário, incluindo:
  - Nome, email, gênero, emprego, data de nascimento, etc.
  - Localização exibida em um mapa do Google.
- Ação para buscar novos usuários da API externa.

## Tecnologias Utilizadas

- **Laravel**: Framework PHP para desenvolvimento web.
- **Bootstrap 5**: Biblioteca para design responsivo.
- **Google Maps**: Integração para exibição de mapas (sem API key).

## Instalação

### Pré-requisitos

- PHP >= 8.0
- Composer

### Passo a Passo

1. Clone este repositório:

   ```bash
   git clone https://github.com/luizcsbh/random_data.git
   cd seu-repositorio
   ```
2. Instale as dependências do PHP e JavaScript:
   ```bash
   composer install
   ```
3. Gere a chave da aplicação:
  ```bash
   php artisan key:generate
  ```
Uso

	•	Inicie o servidor de desenvolvimento do Laravel:
   ```bash
   php artisan serve
   ```
	•	Acesse a aplicação em http://localhost:8000.

Funcionalidades da Interface

	•	Na página inicial, clique no botão “Buscar Novos Usuários” para buscar dados da API externa e armazenar localmente.
	•	Navegue pela lista de usuários e clique em “Visualizar” para ver os detalhes, incluindo um mapa da localização do usuário.

Personalização do Google Maps

Para personalizar o mapa do Google sem uma chave de API, foi utilizado um iframe simples que pode ser ajustado conforme necessário. Para funcionalidades avançadas, é recomendável usar a API do Google Maps.

Contribuindo

Se desejar contribuir para o projeto, sinta-se à vontade para abrir uma issue ou enviar um pull request.

Licença

Este projeto é licenciado sob a MIT License.