@extends('products.layout')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="pull-left">
            Laravel 6 From scratch
        </div>
        <div class="pull-right">
        <a href="{{ route('products.index') }}" class="btn btn-success">Back To Index</a>
        </div>
    </div>
</div>

<form action="{{ route('products.store') }}" method="POST" >
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>

        <div class="col-lg-12">
            <div class="form-group">
                <strong>Detail:</strong>
                <textarea name="detail" class="form-control" placeholder="Detail"></textarea>
            </div>
        </div>

        <div class="col-lg-12">
          <button type="submit" class="btn btn-success">Submit </button>
        </div>
    </div>

    </form>

@endsection