@extends('layouts/app')

{{-- título --}}
@section('titulo')
	{{'Este é o título definido'}}
@stop

{{-- navegação --}}
@section('navegacao')
	@parent
	<p>Navegação dos usuários</p>
@stop