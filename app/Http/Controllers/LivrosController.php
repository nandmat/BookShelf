<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivrosController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', ['livros' => $livros]);
    }

    public function create()
    {
        return view('livros.create');
    }

    public function store(Request $dados)
    {
        (Livro::create($dados->all()));
        return redirect()->route('livros.index');
    }
}
