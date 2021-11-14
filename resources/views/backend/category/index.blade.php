@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Category List</h3>
        <a href="{{ route('category.create') }}" class="btn btn-success">Create
            Category</a>
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Created</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categories as $category)
                <tr>
                    <th scope="row">{{ ++$serials }}</th>
                    <td>{{$category->title}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn
btn-warning">Edit</a>
                        <form action="{{ route('category.destroy',$category->id) }}"
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
