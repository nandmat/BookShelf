@extends('layout.app')

@section('title', 'Home')

@section('content')

    <div class="title">
        <h1>Livros</h1>
    </div>
    @foreach ($livros as $livros)
        <ul>
            <li>ID: {{ $livros->id }}</li>
            <li>Nome: {{ $livros->nome }}</li>
            <li>Autor: {{ $livros->autor }}</li>
            <li>ISBN: {{ $livros->isbn }}</li>
            <li>ISBN: {{ $livros->isbn }}</li>
            <li>Data de Lançamento: {{ $livros->data_lancamento }}</li>
            <li>Capa: {{ $livros->capa }}</li>
        </ul>
    @endforeach

@endsection
