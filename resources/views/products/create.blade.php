@extends('app')

@section('content')
    <h1>Create Product</h1>

    @include('errors.list')

    {!! Form::open(['route'=>'products.store', 'method'=>'post']) !!}
        @include('products._form', ['submit_button_text' => trans('app.create_product')])
    {!! Form::close() !!}
@endsection