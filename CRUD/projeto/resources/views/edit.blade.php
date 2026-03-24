@extends('base')

@section('content')
    <h2>Atualizar uma joia</h2>

    <form class="form" id="update-form" method="POST" action="{{ route('joias.update', $joia->id) }}">
        @csrf
        @method('PUT')

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $joia->nome }}" required>

        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $joia->descricao }}" required>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" id="preco" value="{{ $joia->preco }}" required>

        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" value="{{ $joia->quantidade }}" required>

        {{-- O BOTÃO DEVE FICAR AQUI DENTRO --}}
        <button type="submit">Salvar Alterações</button>
    </form>

    <hr>

    {{-- Form de exclusão separado --}}
    <form method="POST" action="{{ route('joias.destroy', $joia->id) }}" onsubmit="return confirm('Excluir mesmo?')">
        @csrf
        @method('DELETE')
        <button type="submit" style="color: red;">Excluir Joia</button>
    </form>
@endsection