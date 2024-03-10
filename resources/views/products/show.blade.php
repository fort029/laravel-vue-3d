@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2> Show Product                    
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
                </h2>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Category:</strong>
                {{ $product->category }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Type:</strong>
                {{ $product->type }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $product->description }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Price netto:</strong>
                {{ $product->price }}
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <strong>Options:</strong>
               
                @foreach (json_decode($product->options, true) as $name=>$option)
                    {{$name}} : {{implode(', ',$option)}}
                @endforeach
            </div>
        </div>
        <div class="col-xs-12 mb-3">
            <div class="form-group">
                <div><strong>Img:</strong></div>
                <img style="max-width:300px" src="{{ $product->img }}" alt="">
            </div>
        </div>
    </div>
@endsection