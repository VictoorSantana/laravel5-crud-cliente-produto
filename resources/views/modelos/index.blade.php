

@inject('TreatValues', 'App\Helpers\TreatValues')
@extends('layouts.app')

@section('content')



<div class="d-flex justify-content-between align-items-center">
    <h4> Lista de clientes </h4>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary mb-1">Adicionar cliente</a>
</div>
<hr class="mb-5">
<div class="table-responsive">
    <table class="table table-striped">
        <thead class="thead-dark">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Registro</th>   
            <th scope="col">Ações</th>     
          </tr>
        </thead>
        <tbody>
            @foreach($clientes as $cliente)     
            <tr>
                <th scope="row">{{ $cliente->id }}</th>
                <td>{{ $cliente->nome }}</td>
                <td>{{ $TreatValues::mascarar('000.000.000/00', $cliente->registro) }}</td>  
                <td> 
                    <a href="{{ route('clientes.destroy', ['cliente' => $cliente->id]) }}" class="btn btn-danger"> Del. </a> 
                    <a href="{{ route('clientes.edit', ['cliente' => $cliente->id]) }}" class="btn btn-secondary"> Editar </a> 
                    <a href="{{ route('clientes.show', ['cliente' => $cliente->id]) }}" class="btn btn-info"> Ver </a> 
                </td>      
            </tr>
            @endforeach
        </tbody>
      </table>
</div>


@endsection