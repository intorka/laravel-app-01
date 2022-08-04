@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $role->name}}</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <th>Id</th>
                            <td>{{ $role->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $role->name}}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $role->description}}</td>
                        </tr>
                        <tr>
                            <th>Created By</th>
                            <td>{{ $role->user->name}}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection