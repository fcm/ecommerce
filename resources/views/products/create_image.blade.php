@extends('layouts.store')

@section('content')

    <div class="container">
        <h1>Upload Image</h1>

        @include('errors.list')

        {!! Form::open(['route'=>['products.images.store', $product->id],
                        'method'=>'post' ,
                        'files'=>'true']) !!}

        <div class="form-group">
            {!! Form::label('image', 'Image:') !!}
            {!! Form::file('image', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Upload Image', ['class'=>'btn btn-primary']) !!}
            <a href="{{ route('products.images', ['id'=>$product->id]) }}" class="btn btn-default">Voltar</a>
        </div>
        {!! Form::close() !!}

@endsection