{{-- herda a view 'base' --}}
@extends('base')
{{-- cria a seção content, definida na base, para injetar o código --}}
@section('content')
    <h2>Joias Cadastradas</h2>
    {{-- se a variável $joias não existir, mostra um h3 com uma mensagem --}}
    @if (!isset($joias))
        <h3 style="color: red">Nenhum Registro Encontrado!</h3>
        {{-- senão, monta a tabela com o dados --}}
    @else
        <table class="data-table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th colspan="2">Opções</th>
                </tr>
            </thead>
            <tbody>
                {{-- itera sobre a coleção de joias --}}
                @foreach ($joias as $j)
                    <tr>
                        <td>{{ $j->nome }} </td>
                        <td> {{ $j->descricao }} </td>
                        <td> {{ $j->preco }} </td>
                        <td> {{ $j->quantidade }} </td>
                        {{-- vai para a rota show, passando o id como parâmetro --}}
                        <td> <a href="{{ route('joias.show', $j->id) }}">Exibir</a> </td>
                        <td> <a href="{{ route('joias.edit', $j->id) }}">Editar</a> </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    {{-- mostra a qtde de joias cadastrados. --}}
                    <td colspan="5">Joias Cadastradas: {{ $joias->count() }}</td>
                </tr>
            </tfoot>
        </table>
    @endif
    @if(isset($msg))
        <script>
            alert("{{$msg}}");
        </script>
    @endif
@endsection