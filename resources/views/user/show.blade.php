@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $user->name}}</div>

                <div class="card-body">
                    <table>
                        <tr>
                            <th>Id</th>
                            <td>{{ $user->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $user->name}}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection