@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $department->name}}</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <th>Id</th>
                            <td>{{ $department->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $department->name}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $department->description}}</td>
                        </tr>
                        <tr>
                            <th>Created By</th>
                            <td>{{ $department->user->name}}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection