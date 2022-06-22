@extends('layout')

@section('cabecalho')
<div class=" pb-5 pt-5">
    Listagem de Serviços Radnet Telecom
</div>

@endsection

@section('conteudo')


@if(!empty($mensagem))
<div class="alert alert-success">
    {{ $mensagem }}
</div>
@endif
<div class=" d-flex flex-row-reverse">
    <a href="{{ route('form-criar-servico') }}" class="btn btn-dark mb-3">Adicionar</a>
</div>

<ul class="list-group">
    @foreach($servicos as $servico)

    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a href="{{$servico->conteudo}}" target="_blank"> {{ $servico->nome }} </a>{{$servico->conteudo}}
        <form method="post" action="/listagem/{{ $servico->id }}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($servico->nome) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
    </li>

    @endforeach
</ul>
@endsection
