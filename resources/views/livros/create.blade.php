@extends('layout.app')

@section('title', 'Cadastrar Livro')

@section('content')

<form action="{{ route('livros.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="box">
        <label for="">Nome:</label>
        <input type="text" name="nome" placeholder="Nome do livro">
    </div>
    <div class="box">
        <label for="">Autor:</label>
        <input type="text" name="autor" placeholder="Autor da obra">
    </div>
    <div class="box">
        <label for="">Gênero:</label>
        <input type="text" name="genero" placeholder="Gênero do livro">
    </div>

    <div class="box">
        <label for="">ISBN: </label>
        <input type="text" name="isbn">
    </div>
    <div class="box">
        <label for="">ISBN-10:</label>
        <input type="text" name="isbn-10">
    </div>

    <div class="box">
        <label for="">Data de Lançamento</label>
        <input type="date" name="data_lancamento">
    </div>
    <div>
        <input type="submit" value="Cadastrar" name="cadastrar">
    </div>
</form>

