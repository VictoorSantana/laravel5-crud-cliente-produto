@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center">
    <h4> Lista de produtos </h4>
    <a href="{{ route('produtos.create') }}" class="btn btn-primary">Adicionar produto</a>
</div>
<hr class="mb-5">
<div class="d-flex justify-content-start flex-wrap">
    @foreach($produtos as $produto)  
    <div class="shadow border rounded d-inline-block p-3 d-flex justify-content-start position-relative m-3"  style="width:320px">
        <div>
            <img src="{{ asset('img/produtoicone.png') }}" style="width: 60px; height: 60px;opacity:.1;" alt="produto icone">                    
            <a href="{{ route('produtos.edit', ['produto' => $produto->id]) }}" class="btn btn-info position-absolute" style="top: -19px; right: -19px">Editar</a>
        </div>
        <div class="ml-3">
            <table>
                <tbody>
                    <tr>
                        <td> Descrição: </td>
                        <td> <b>{{$produto->descricao}}</b> </td>
                    </tr>
                    <tr>
                        <td> Quantidade: </td>
                        <td> <b>{{$produto->quantidade}}</b> </td>
                    </tr>
                    <tr>
                        <td> Preço: </td>
                        <td> <b>{{$produto->preco}}</b> R$ </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
</div>

@endsection