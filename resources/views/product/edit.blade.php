@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card-header">Product ID: {{$product->id}}</div>
                <div class="card-body">
                    <form action="/product/update/{{ $product->id }}"method="PUT">
                        @csrf
                        <div class="col-12 pb-2">
                            <label for="inputName" class="form-label">Product Name:</label>
                            <textarea type="name" class="form-control" id="inputName"  rows="1" required>{{$product->name}}</textarea>
                            @if ($errors->has('name'))
                            <span class="text-danger font-bold">{{ $errors->first('name') }}</span>
                          @endif
                        </div>
                        <div class="col-12 pb-2">
                            <label for="inputDescription" class="form-label">Description:</label>
                            <textarea type="description" class="form-control" id="inputDescription"  rows="5" required>{{$product->description}}</textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger font-bold">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="col-12 pb-2">
                            <label for="inputCategory" class="form-label">Category:</label>
                            <textarea type="category" class="form-control" id="inputCategory"  rows="5" required>{{$product->category}}</textarea>
                            @if ($errors->has('category'))
                            <span class="text-danger font-bold">{{ $errors->first('category') }}</span>
                            @endif
                        </div>
                        <div class="col-12 pb-2">
                            <label for="inputBranch" class="form-label">Branch:</label>
                            <input type="branch" class="form-control" id="inputBranch" value={{$product->branch}} >
                            @if ($errors->has('branch'))
                            <span class="text-danger font-bold">{{ $errors->first('branch') }}</span>
                            @endif
                        </div>
                        <div class="col-6 pb-2">
                            <label for="inputPrice" class="form-label">Price:(PHP)</label>
                            <input type="price" class="form-control" id="inputPrice" value="Php {{$product->price}}" >
                            @if ($errors->has('price'))
                            <span class="text-danger font-bold">{{ $errors->first('price') }}</span>
                            @endif
                        </div>
                        <div class="col-6 pb-4">
                            <label for="inputUnit" class="form-label">Unit:</label>
                            <input type="unit" class="form-control" id="inputUnit" value={{$product->unit}} >
                            @if ($errors->has('unit'))
                            <span class="text-danger font-bold">{{ $errors->first('unit') }}</span>
                            @endif
                        </div>
                        {{-- <div class="col-12">
                            <button class="btn btn-primary">Save</button>
                        </div>
                        @if ($errors->has('name'))
                        <span class="text-danger font-bold">{{ $errors->first('name') }}</span>
                        @endif
                        <input name="_method" type="hidden" value="PUT">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection