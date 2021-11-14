@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Product List</h3>
        <a href="{{ route('product.create') }}" class="btn btn-success">Create
            Product</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ ++$serials }}</th>
                    <td>{{$product->title}}</td>
                    <td>{{ $product->category->title }}</td>
                    <td>{{ $product->description}}</td>
                    <td>{{ $product->prize}}</td>
                    <td>
                        <a href="{{ route('product.show', $product->id) }}" class="btn
btn-primary">Show</a>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn
btn-success">Edit</a>
                        <form action="{{ route('product.destroy',$product->id) }}"
                              method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn
btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
