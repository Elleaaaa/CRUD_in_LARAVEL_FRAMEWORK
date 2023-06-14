@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-danger" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="card">
                <div class="card-header"><h3>Products</h3> <a href="/product/create" class="btn btn-success float-right">Create New</a></div>

                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col"> Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                        @if(isset($products) && count($products) > 0)
                            @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $product->id }}</th>
                                <td><a href="/product/show/{{$product->id}}">{{ $product->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>Php {{ $product->price }}</td>
                                <td>
                                    <form action="/product/delete/{{$product->id}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger float-right btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        {{ $products->links() }}
                        @else
                            No Results found.
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection