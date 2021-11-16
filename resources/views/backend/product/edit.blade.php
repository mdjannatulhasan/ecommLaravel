@extends('layouts.app')
@section('content')
    <div class="container">
        <h4>Edit Product</h4>
        <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>

        <form method="POST" action="{{ url('product/'.$product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="title" class="col-md-2 col-form-label">{{ __('Title:') }}</label>

                <div class="col-md-10">
                    <input id="title" type="text"
                           class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $product->title }}"
                           required>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="category_id" class="col-md-2 col-form-label">{{ __('Category:') }}</label>

                <div class="col-md-10">
                    <select id="category_id" class="custom-select" name="category_id">
                        @foreach ($categories as $key => $category)
                            <option {{ $product->category->id == $key ? 'selected' : '' }} value="{{ $key }}">{{ $category }}</option>
                        @endforeach
                    </select>

                </div>
            </div>

            <div class="form-group row">
                <label for="description" class="col-md-2 col-form-label">{{ __('Description:') }}</label>

                <div class="col-md-10">
                    <textarea id="description" rows="3" class="form-control" name="description">{{ $product->description }}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="prize" class="col-md-2 col-form-label">{{ __('Price:') }}</label>

                <div class="col-md-10">
                    <input id="prize" type="text"
                           class="form-control @error('prize') is-invalid @enderror" name="prize" value="{{ $product->prize }}"
                           required autocomplete="prize">
                    @error('prize')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="image" class="col-md-2 col-form-label">{{ __('Image:') }}</label>

                <div class="col-md-10">
                    <input id="image" name="image" type="file" class="form-control-file" value="{{ $product->image }}">
                    <img class="img-fluid mt-3" src="/storage/{{ $product->image }}" width="200px">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>
        </form>

    </div>


{{--    <div class="container">--}}
{{--        <h4>Edit Product</h4>--}}
{{--        <a href="{{ route('product.index') }}" class="btn btn-primary">Back</a>--}}
{{--        {!! Form::model($product,[--}}
{{--        'route' => ['product.update',$product->id],--}}
{{--        'method' => 'PUT',--}}
{{--        ]) !!}--}}
{{--        <div class="form-group row">--}}
{{--            {!! Form::label('title','Title :' ,['class' => 'col-sm-2 col-form-label']) !!}--}}
{{--            <div class="col-sm-10">--}}
{{--                {!! Form::text('title',null, ['class' => 'form-control']) !!}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group row">--}}
{{--            {!! Form::label('category_id','Category :' ,['class' => 'col-sm-2--}}
{{--            col-form-label']) !!}--}}
{{--            <div class="col-sm-10">--}}
{{--                <select class="custom-select" id="inputGroupSelect01"--}}
{{--                        name="category_id">--}}
{{--                                        <option selected value="{{ $product->category->id }}">{{$product->category->title}}</option>--}}
{{--                    @foreach ($categories as $key => $category)--}}
{{--                        <option {{ $product->category->id ? 'selected' : '' }} value="{{ $key }}">{{ $category }}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group row">--}}
{{--            {!! Form::label('description','Description :' ,['class' => 'col-sm-2--}}
{{--            col-form-label']) !!}--}}
{{--            <div class="col-sm-10">--}}
{{--                {!! Form::text('description',null, ['class' => 'form-control']) !!}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group row">--}}
{{--            {!! Form::label('prize','Price :' ,['class' => 'col-sm-2 col-form-label']) !!}--}}
{{--            <div class="col-sm-10">--}}
{{--                {!! Form::text('prize',null, ['class' => 'form-control']) !!}--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            {!! Form::submit('submit', ['class'=>'btn btn-success']) !!}--}}
{{--        </div>--}}
{{--        {!! Form::close() !!}--}}
{{--    </div>--}}

@endsection
