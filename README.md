# Meu PJe

<p>Aplicação para consumir webservice MNI PJe do CNJ com PHP.</p>

## Projeto
* Repositório: https://github.com/jeffersonvidal/meupje.git
* Documentação oficial: https://www.pje.jus.br/wiki/index.php/Tutorial_MNI

## Requisitos
* Laravel 11 ou superior
* PHP 8.2 ou superior
* Composer
* NodeJS

## Como rodar o projeto baixado

Duplicar o arquivo ".env.example" e renomear para ".env".<br>

Instalar as dependências do PHP
```
composer install
```
Instalar as dependências do NodeJS
```
npm install
```
Gerar chave artisan do projeto
```
php artisan key:generate
```
Inciar o projeto criado com Laravel
```
php artisan serve
```
Acessar conteúdo padrão do Laravel
```
http://localhost:8000
```

## Estrutura e criação de arquivos

Para cada módulo do projeto é necessário criar os mesmos aquivos abaixo, mudando apenas os nomes, colocando o referente a cada módulo.

* Migration
* Controller
* Model
* Request
* Seed
* Adicionar a seed criada no arquivo DatabaseSeeder.php
* Route
* Views (para o CRUD)

## Criando arquivos

Criar Migration
```
php artisan make:migration create_users_table
```

Criar Controller
```
php artisan make:controller UserController
```

Criar Model
```
php artisan make:model User -m
```

Criar Request (para validação de form - em public function authorize() deixe como true)
```
php artisan make:request UserRequest
```

Criar Seed
```
php artisan make:seeder UserSeeder
```

Criar View
```
php artisan make:view users/index
```

Adicionar a seed criada no arquivo DatabaseSeeder.php

Executar as migrations para criar tabelas no banco de dados
```
php artisan migrate
```
Executar as seeds para popular o bando de daods
```
php artisan db:seed
```
## Criar componentes

Criar componente de mensagens (alert = nome do component)
```
php artisan make:component alert --view
```

## Instalar dependências para fazer auditoria do sistema

instale o pacote guzzlehttp/guzzle para fazer requisições HTTP e laravel-ide-helper para ajudar no desenvolvimento
```
composer require guzzlehttp/guzzle
composer require --dev barryvdh/laravel-ide-helper
```

## Bibliotecas dependentes

JQuery
```
npm install jquery
```

InputMask (para criar máscaras personalizadas em campos de formulários)
```
npm install inputmask
```

Instalar tradução do sistema (mensagens de erro e retorno) para Português Brasil
Fonte: https://github.com/lucascudo/laravel-pt-BR-localization

```
php artisan lang:publish
```
```
composer require lucascudo/laravel-pt-br-localization --dev
```
```
php artisan vendor:publish --tag=laravel-pt-br-localization
```
```
// Versões antigas do Laravel - Altere Linha 85 do arquivo config/app.php para:
'locale' => 'pt_BR'

// Para versões 11.x altere a linha 8 do arquivo .env
APP_LOCALE=pt_BR
```



## Recursos a serem implementados

[]-  Consulta a manifestações de processo
  []- Manifestações (atualizações, movimentações);
  []- Arquivos anexos (pdf);
[]- Verificação de atualizações automáticas
  []-  


## APIs Externas

[] - 