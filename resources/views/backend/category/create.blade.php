@extends('layouts.app')
@section('content')
    <div class="container">
        <h4>Create Category</h4>
        <a href="{{ route('category.index') }}" class="btn
btn-primary">Back</a>
        {!! Form::open (['route' => 'category.store', 'method' => 'POST']) !!}
        <div class="form-group row">
        {!! Form::label('title','Title :' ,['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('title','', ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        {!! Form::submit('submit', ['class'=>'btn btn-success']) !!}
    </div>
    {!! Form::close() !!}
    </div>
@endsection

