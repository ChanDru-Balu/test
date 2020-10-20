@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                Add New Product
            </div>
            <div class="pull-right">
            <a href="{{ route('products.create') }}" class="btn btn-success">Create New Product</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
        <p>{{ $message }}</p>    
        </div>        
    @endif
@endsection