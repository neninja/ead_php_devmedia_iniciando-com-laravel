```sh
php artisan make:model Usuario
php artisan make:controller UsuarioController

php artisan make:migration cria_livros_tabela
php artisan make:migration cria_produtos_tabela --create=produtos
php artisan make:migration renomeia_produtos_artigos --table=produtos

php artisan make:seeder LivrosTableSeeder
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
