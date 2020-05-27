@extends('admin.layouts.app')

@section('title', "Cadastrar novo produto {$product->name}")

@section('content')
    <h1>EDITANDO PRODUTO {{$product->name}}</h1>

    <form action="{{route('products.update', $product->id)}}" method="post"  enctype="multipart/form-data">
        @method('put')
        @include('admin.pages.products._partials.form')       
    </form>
@endsection