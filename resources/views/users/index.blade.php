@extends('layouts.app')
@section('title', '| Users')
@section('content')

<div class="col-lg-12">
    <h1>
        <i class="fa fa-users"></i>
        User Administration
        <div class="btn-group float-right" role="group" aria-label="Roles & Permissions">
            <a href="{{ route('roles.index') }}" class="btn btn-primary">Roles</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-success">Permissions</a>
        </div>
    </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date/Time Added</th>
                    <th>User Roles</th>
                    <th class="text-center">Operations</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                <tr>

                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ route('users.create') }}" class="btn btn-success">Add User</a>

</div>

@endsection
