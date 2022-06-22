@extends('layout')

@section('cabecalho')
<div class=" pb-5 pt-5">
    Adicionar Serviço
</div>
@endsection

@section('conteudo')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post">
    @csrf
    <div class="form-group mb-3">
        <label for="nome" class="">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">
        <br>
        <label for="nome" class="">Conteudo</label>
        <input type="text" class="form-control" name="conteudo" id="conteudo">
        <br>
    </div>

    <button class="btn btn-primary">Adicionar</button>

    <a href="{{ route('listar-servicos') }}" class="btn btn-dark ">Voltar</a>
</form>
@endsection
