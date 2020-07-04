
@extends('layouts.app')

@section('content')


    <h4> Cliente, {{ $clientes->nome }} com o registro de {{ $clientes->registro }}. </h4>    

    <a href="{{ route('clientes.index') }}" class="btn btn-link mt-2">Voltar</a>
@endsection