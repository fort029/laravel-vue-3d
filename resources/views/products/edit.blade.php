@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb mb-4">
            <div class="pull-left">
                <h2>Edit Product

                    <div class="float-end">
                        <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                    </div>
                </h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
                 <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Category:</strong>
                    <input type="text" name="category" class="form-control" placeholder="Category" value="{{$product->category}}">
                </div>
            </div>
             <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Type:</strong>
                    <input type="text" name="type" class="form-control" placeholder="Type" value="{{$product->type}}">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{$product->name}}">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="Description" value="{{$product->description}}"></textarea>
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Img src:</strong>
                    <input type="text"class="form-control" name="img" placeholder="https:://" value="{{$product->img}}">
                </div>
            </div>
            <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Options JSON:</strong>
                    <input type="text"class="form-control" name="options" placeholder='{"size":["S","M","L","XL"]}' value="{{$product->options}}" >
                </div>
            </div>
             <div class="col-xs-12 mb-3">
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="number" step="0.01" name="price" class="form-control" placeholder="0.00" value="{{$product->price}}">
                </div>
            </div>
            <div class="col-xs-12 mb-3 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection