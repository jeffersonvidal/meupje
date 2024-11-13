# JurisControl - Sistema de Controle Jurídico

<p>Sistema ERP de Gestão e Controle Jurídico para Escritórios Advocatícios.</p>

## Projeto
* Repositório: https://github.com/jeffersonvidal/juriscontrol.git

## Fazer deploy do sistema na hospedagem Hostinger
https://medium.com/@anushujan/deploying-a-laravel-11-project-on-hostinger-using-web-hosting-eca710e024f0

### Sistemas que inspiram recursos
* EasyJur (dashboard, movimentações, jurisprudencias(wescrapping))
* AdvBox (taskscore, tarefas recorrentes)
* easyvog
* Astrea
* Promad
* MaisJuridico

## Paleta de cores Identidade Visual
* Marrom: #50301E
* Dourado: #C8A472

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
Instalar Boostrap com Vite
```
npm i --save bootstrap @popperjs/core
```
Executar Bibliotecas NodeJS
```
npm run dev
```
Instalar Ícones FontAwesome
```
npm i --save @fortawesome/fontawesome-free
```
Gerar chave artisan do projeto
```
php artisan key:generate
```
```
Gerar arquivo de configuração CORS
```
php artisan config:publish cors
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

Instalar dependência para fazer auditoria
```
composer require owen-it/laravel-auditing
```
Publicar a configuração e as migrations para auditoria
```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="config"
```
Criar tabela audits no BD atavés de migration
```
php artisan vendor:publish --provider "OwenIt\Auditing\AuditingServiceProvider" --tag="migrations"
```
Caso não funcione a implementação de auditoria, limpe o cache
```
php artisan config:clear
```
Acrescentar linha em todas as Models que serão auditadas
```
use \OwenIt\Auditing\Auditable as AuditingAuditable;
use OwenIt\Auditing\Contracts\Auditable;

Modelo:
class Client extends Model implements Auditable
{
    use HasFactory, AuditingAuditable;
```

## Mensagens de alertas em modal

SweetAlert2
```
npm install sweetalert2
```

## Campo select com busca

Select2
```
npm install select2
```

Tema do Bootstrap 5 para Select2
```
npm install select2-bootstrap-5-theme
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
    [x]-  Usuários
    [x]-  Escritórios Externos
    []-  Gamificação


## APIs Externas

[] - 