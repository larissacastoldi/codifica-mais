{{-- herda a view base --}}
@extends('base')
{{-- define o conteúdo --}}
@section('content')
    {{-- caso exista a variável msg, exibe uma mensagem --}}
    @if (isset($msg))
        <h3 style="color: red">Joia não encontrada!</h3>
    @else
    {{-- senão, mostra os daddos --}}
        <h2>Mostrando dados da joia</h2>
        <p><strong>Nome:</strong> {{ $joia->nome }} </p>
        <p><strong>Descrição:</strong> {{ $joia->descricao }} </p>
        <p><strong>Preço:</strong> {{ $joia->preco }} </p>
        <p><strong>Quantidade:</strong> {{ $joia->quantidade }} </p>
        <a href="{{ route('joias.index') }}">Voltar</a>
    @endif
@endsection