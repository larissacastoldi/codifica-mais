{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')
    <h2>Cadastrar Nova Joia</h2>
    {{-- o atributo action aponta para a rota que está direcionada ao método store do controlador --}}
    <form class="form" method="POST" action="{{ route('joias.store') }}">
        {{-- CSRF é um token de segurança para validar o formulário --}}
        @csrf
        <label for="Nome">Nome:</label>
        <input type="text" name="nome" id="nome" required>
        <label for="Nome">Descricao:</label>
        <input type="text" name="descricao" id="descrição" required>
        <label for="Nome">Preço:</label>
        <input type="number" name="preco" id="preco" step="0.01" required>
        <label for="Nome">Quantidade:</label>
        <input type="number" name="quantidade" id="quantidade" required>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
@endsection

