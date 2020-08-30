## Comandos do artisan utilizados
```sh
php artisan make:controller UsuarioController
php artisan make:model Usuario
php artisan make:model Cliente -m # cria model e a migration de Cliente

php artisan make:migration cria_livros_tabela
php artisan make:migration cria_produtos_tabela --create=produtos
php artisan make:migration renomeia_produtos_artigos --table=produtos

php artisan make:seeder LivrosTableSeeder

php artisan make:request ClienteRequest
```

```sh
# roda migrations
php artisan migrate
# roda migrations com seed
php artisan migrate --seed
# retorna 1 migration
php artisan migrate:rollback
# reseta todas migrations
php artisan migrate:reset

php artisan migrate:status
```

```sh
php artisan db:seed
```

```sh
# Não existe mais
php artisan make:auth

# Deve instalar novo pacote para o novo comando
composer require laravel/ui
php artisan ui bootstrap --auth
npm i
npm run dev
```

## Nomes

| Model   | Tabela   | Controller | Rota     |
|---------|----------|------------|----------|
| Cliente | Clientes | Cliente    | clientes |

## Configurações para o servidor Linux

> Com base [nesse](https://www.devmedia.com.br/framework-php-laravel-trabalhando-com-rotas/33363) artigo da devmedia

```sh
# extensões necessárias:
php -r "var_dump([
    extension_loaded('bcmath'),
    extension_loaded('ctype'),
    extension_loaded('json'),
    extension_loaded('xml'),
    extension_loaded('openssl'),
    extension_loaded('pdo'),
]);"
# caso precise habilitar alguma, edite seu php.ini
# php --ini

curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer
# composer

cd /var/www/
composer create-project --prefer-dist laravel/laravel nome-do-projeto
sudo chmod -R 777 /var/www/nome-do-projeto/storage

```

### Possíveis problemas com rotas no servidor

- Edite `/etc/apache2/httpd.conf` no trecho respectivo ao diretório `var/www/html` permitindo reescrita `AllowOverride All`
```xml
<Directory "/var/www/html">
    ...
    AllowOverride All
    ...
</Directory>
```

> Não esqueça de reiniciar o apache `/etc/init.d/apache2 restart`

- Caso não funcione, deixe o `/etc/apache2/httpd.conf` semelhante como abaixo:
```xml
<VirtualHost 127.0.0.1:80>
    DocumentRoot "/var/www/html/nome-do-projeto/public"

    <Directory "/var/www/html/nome-do-projeto/public">
        AllowOverride All
    </Directory>
</VirtualHost>
```
