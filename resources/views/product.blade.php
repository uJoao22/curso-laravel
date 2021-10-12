@extends('layouts.main')

@section('title', 'HDC Events - Produto')

@section('content')

    @if($id != null)
        <p>Exibindo produto {{ $id }}</p>
    @else
        <p>Id igual a null</p>
    @endif

@endsection