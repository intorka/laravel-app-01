@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $product->name }}</div>
                <div class="card-body">

                    <table>
                        <tr>
                            <th>Id</th>
                            <td>{{ $product->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $product->name}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $product->description}}</td>
                        </tr>
                        <tr>
                            <th>Categories</th>
                            <td>
                                @foreach($product->categories as $category)
                                    {{ $category->name }}, 
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>Created by</th>
                            <td>{{ $product->user->name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection