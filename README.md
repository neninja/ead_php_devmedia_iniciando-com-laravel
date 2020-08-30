# ead_php_devmedia_iniciando-com-laravel

CRUD com laravel, usando login com cadastros de novos usuários e formulários com bootstrap.

> Projeto referente a [este](https://www.devmedia.com.br/curso/curso-de-laravel/451) curso.

## Setup

1. Habilite as extensões necessárias do laravel e do seu banco
```
# extensões necessárias:
# php -m
php -r "var_dump([
    extension_loaded('bcmath'),
    extension_loaded('ctype'),
    extension_loaded('json'),
    extension_loaded('xml'),
    extension_loaded('openssl'),
    extension_loaded('pdo'),
]);"

# caso precise habilitar alguma, edite seu php.ini
# local do php.ini
# php --ini
```
2. Instale as dependências do php: ``composer i``
3. Crie `.env` com base ao `.env.example`
4. Crie o banco de dados
```
# postgresql
createdb -U postgres devmedia_iniciando-laravel2
```
5. Crie as tabelas com as migrations: ``php artisan migrate --seed``

## Run

```sh
php artisan serve
# localhost:8000
# Caso precise, registre um novo usuário
```
