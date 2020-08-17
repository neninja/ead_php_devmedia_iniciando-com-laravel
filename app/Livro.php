<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    protected $fillable = ['titulo', 'descricao'];

    public function listaLivros(){
        return $this->all();
    }

    public function tags(){
        return $this->belongsToMany(
            'App\Livro',    // outra model
            'livros_tags',  // tabela de união
            'livros_id',    // id dessa model
            'tags_id'       // id da outra model
        );
    }

    public function addTag(Tag $tag){
        return $this->tags()->save($tag);
    }

    /*
     * No tinker: php artisan tinker
     * App\Livro::all()
     *
     * App\Tag::create(['nome' => 'php'])
     * App\Tag::create(['nome' => 'programação'])
     * App\Tag:all()
     *
     * $livro = App\Livro::find(1)
     * $livro::addTag(App\Tag::find(1))
     * $livro::addTag(App\Tag::find(2))
     * $livro->tags
     *
     * $tag = App\Tag::find(1)
     * $tag->livros
     */
}
