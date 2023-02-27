@extends('layout.app')

@section('title', 'Home')

@section('content')

    <div class="title">
        <h1>Livros</h1>
    </div>
    <table class="table m-3">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Autor</th>
                <th scope="col">ISBN</th>
                <th scope="col">ISBN-10</th>
                <th scope="col">GÊNERO</th>
                <th scope="col">DATA DE LANÇAMENTO</th>
                <th scope="col">CAPA</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($livros as $livros)
                <tr>
                    <th>{{ $livros->id}}</th>
                    <th>{{ $livros->nome }}</th>
                    <th>{{ $livros->autor }}</th>
                    <th>{{ $livros->isbn }}</th>
                    <th>{{ $livros->data_lancamento }}</th>
                    <th>{{ $livros->capa }}</th>
                </tr>
            @endforeach

        </tbody>
    </table>

@endsection
