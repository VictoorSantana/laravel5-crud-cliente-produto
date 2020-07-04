@extends('layouts.app')

@section('content')
<div class="m-auto" style="width: 350px">
    <form action="{{ route('produtos.store') }}" method="POST" autocomplete="off" >
        @csrf
    
        <h5 class="text-center text-secondary mt-5"> Registrar produto </h5>
        <div class="form-group">
            <label class="d-block text-secondary"> Descrição </label>
            <input type="text" name="descricao" required minlength="5" onkeyup="mascaraNome(event)" class="form-control" value="">
        </div>
        <div class="form-group">
            <label class="d-block text-secondary"> Quantidade </label>
            <input type="text" name="quantidade" required minlength="1" maxlength="3" onkeyup="soNumero(event)" class="form-control" value="0">
        </div>
    
        <div class="form-group">
            <label class="d-block text-secondary"> Preço </label>
            <input type="text" name="preco" required minlength="1" maxlength="5" onkeyup="soQuebrado(event)" class="form-control" value="0,00">
        </div>
    
    
        <div class="form-group text-right">
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary"> Cancelar  </a>
            <button type="submit" class="btn btn-primary"> Salvar  </button>
        </div>
    
        
    </form>
</div>


@endsection