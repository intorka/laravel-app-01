@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $category->name}}</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <th>Id</th>
                            <td>{{ $category->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $category->name}}</td>
                        </tr>
                        <tr>
                            <th>Created by</th>
                            <td>{{ $category->user->name}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection