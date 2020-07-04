
@inject('TreatValues', 'App\Helpers\TreatValues')
@extends('layouts.app')

@section('content')

<div class="m-auto" style="width: 350px" autocomplete="off">
    <form action="{{ route('clientes.update', $clientes->id ) }}" method="POST">
        @method('PUT')
        @csrf
        <h5 class="text-center text-secondary mt-5"> Editar </h5>
        <div class="form-group">
            <label class="d-block text-secondary"> Id </label>
            <input type="text" disabled required class="form-control" value="{{$clientes->id}}">
        </div>
    
        <div class="form-group">
            <label class="d-block text-secondary"> Nome </label>
            <input type="text" name="nome" required minlength="5" class="form-control" value="{{$clientes->nome}}">
        </div>
    
    
        <div class="form-group">
            <label class="d-block text-secondary"> Registro </label>
            <input type="text" name="registro" required minlength="11" maxlength="14" class="form-control" value="{{ $TreatValues::mascarar('000.000.000/00', $clientes->registro) }}">
            <small class="form-text text-muted">*Digite somente CPF</small>
        </div>
        <div class="form-group  text-right">
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary"> Cancelar  </a>
            <button type="submit" class="btn btn-primary"> Alterar  </button>
        </div>
    
        
    </form>
</div>
@endsection
