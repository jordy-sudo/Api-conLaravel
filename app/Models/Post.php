<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getExcerptAttribute(){
        return substr($this->content, 0, 120);
    }
    //creo los metodos que estos llamando en el post del index
    //lo que esta en el medio de GET y Attribute es el nombre del metodo
    //esta en mayusculas pero en le index es todo minusculas
    public function getPublishedAtAttribute(){
        return $this->created_at->format('d/m/Y');
    }

    //creo la funcionde  usuario
    //un post pertenece a un usuario
    public function user(){
        return $this -> belongsTo(User::class);
    }
}
