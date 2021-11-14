@extends('welcome')
@section('content')
    <div class="container">
        <h3>Product List</h3>
        <a href="{{ route('product.index') }}" class="btn btn-success">Back To
            Product List</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">title</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Prize</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>{{$products->title}}</td>
                <td>{{ $products->category->title }}</td>
                <td>{{ $products->description}}</td>
                <td>{{ $products->prize}}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
