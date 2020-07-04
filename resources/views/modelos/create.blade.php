
@extends('layouts.app')

@section('content')

<div class="m-auto" style="width: 350px">
    <form action="{{ route('clientes.store') }}" method="POST" autocomplete="off" >
        @csrf
    
        <h5 class="text-center text-secondary mt-5"> Registrar </h5>
        <div class="form-group">
            <label class="d-block text-secondary"> Nome </label>
            <input type="text" onkeyup="mascaraNome(event)" name="nome" required minlength="5" class="form-control" value="">
        </div>
    
    
        <div class="form-group">
            <label class="d-block text-secondary"> Registro </label>
            <input type="text" onkeyup="mascararCpf(event)" name="registro" required class="form-control" value="">
            <small class="form-text text-muted">*Digite somente CPF</small>
        </div>
        <div class="form-group text-right">
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary"> Cancelar  </a>
            <button type="submit" class="btn btn-primary"> Salvar  </button>
        </div>
    
        
    </form>
</div>
@endsection
