@extends('layouts.app')

@section('content')

<div class="m-auto" style="width: 350px" autocomplete="off">
    <form action="{{ route('produtos.update', $produtos->id ) }}" method="POST">
        @method('PUT')
        @csrf
        <h5 class="text-center text-secondary mt-5"> Editar </h5>
        <div class="form-group">
            <label class="d-block text-secondary"> Id </label>
            <input type="text" disabled required class="form-control" value="{{$produtos->id}}">
        </div>
    
        <div class="form-group">
            <label class="d-block text-secondary"> Descrição </label>
            <input type="text" name="descricao" onkeyup="mascaraNome(event)" required minlength="5" class="form-control" value="{{$produtos->descricao}}">
        </div>

        <div class="form-group">
            <label class="d-block text-secondary"> Quantidade </label>
            <input type="text" name="quantidade" required onkeyup="soNumero(event)" minlength="1" class="form-control" value="{{$produtos->quantidade}}">
        </div>

        <div class="form-group">
            <label class="d-block text-secondary"> Valor </label>
            <input type="text" name="valor" required minlength="1" onkeyup="soQuebrado(event)" class="form-control" value="{{$produtos->preco}}">
        </div>
    
        <div class="form-group text-right">
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary"> Cancelar  </a>
            <a href="{{ route('produtos.destroy', ['produto' => $produtos->id]) }}" class="btn btn-danger"> Deletar </a> 
            <button type="submit" class="btn btn-primary"> Alterar  </button>
        </div>
    
        
    </form>
</div>

@endsection