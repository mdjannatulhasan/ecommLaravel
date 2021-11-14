@extends('layouts.app')
@section('content')
    <div class="container">
        <h4>Edit Category</h4>
        <a href="{{ route('category.index') }}" class="btn
btn-primary">Back</a>
        {!! Form::model($category,[
        'route' => ['category.update',$category->id],
        'method' => 'PUT',
        ]) !!}
        <div class="form-group row">
            {!! Form::label('title','Title :' ,['class' => 'col-sm-2 col-form-label']) !!}
            <div class="col-sm-10">
                {!! Form::text('title',null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
            {!! Form::submit('submit', ['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
