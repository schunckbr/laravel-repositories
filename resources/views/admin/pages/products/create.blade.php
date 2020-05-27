@extends('admin.layouts.app')

@section('title', 'Cadastrar novo produto')

@section('content')
    <h3>CADASTRAR NOVO PRODUTO</h3>

      <form action="{{route('products.store')}}" method="post" enctype="multipart/form-data" class="form-group">
       @include('admin.pages.products._partials.form')
    </form>
@endsection
