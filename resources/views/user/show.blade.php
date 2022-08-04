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

                        <tr>
                            <th>Department Roles</th>
                            <td>
                                @if ($user->user_roles->count() > 0)
                                        
                                @for ($i = 0; $i < $user->user_roles->count(); $i++)
                                    {{$user->user_departments[$i]->name}}->
                                    {{$user->user_roles[$i]->name}} <br>
                                @endfor
                                
                            @endif    
                            </td>
                        </tr>

                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection