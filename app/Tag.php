<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nome'];

    public function livros(){
        return $this->belongsToMany(
            'App\Livro',    // outra model
            'livros_tags',  // tabela de união
            'tags_id',      // id dessa model
            'livros_id'     // id da outra model
        );
    }
}
