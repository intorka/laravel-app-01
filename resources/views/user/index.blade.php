@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('user') }}</div>
                
                <div class="card-body">
                    <table>
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Department Roles</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            {{-- @dd($users, $user->departments, $user->roles) --}}
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if ($user->user_roles->count() > 0)
                                        
                                        @for ($i = 0; $i < $user->user_roles->count(); $i++)
                                            {{$user->user_departments[$i]->name}}
                                            {{$user->user_roles[$i]->name}} <br>
                                        @endfor
                                        
                                    @endif

                                </td>

                                <td><a href="{{ route('user.show', $user->id) }}">View</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection