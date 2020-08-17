# PostgreSql

O curso originalmente foi feito com mysql, porém quis tentar com psql

## psql

```sh
# Entrar
psql -U postgresql -d devmedia_iniciando-laravel -W 123456

# criar db
createdb -U postgres devmedia_iniciando-laravel 
```

- `\?`exibe ajuda
- `\q` sai
- `\l` lista databases
- `\c <databasename>` conecta uma database
- `\dt` lista tables da database
- `\d <tablename>` descreve uma tabela
