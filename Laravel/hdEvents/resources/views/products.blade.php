@extends('layouts.main')
@section('title','Produtos')
@section('content')
<h1>{{$id}}</h1>
@if($busca != null)
<p>O usuario está buscando por: {{ $busca }}</p>

@endif
@endsection
