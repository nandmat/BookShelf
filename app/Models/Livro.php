<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome', 'autor', 'isbn', 'isbn-10', 'genero', 'data_lancamento', 'capa'
    ];
}
