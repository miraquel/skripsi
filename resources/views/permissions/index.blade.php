@extends('layouts.app')
@section('title', '| Permissions')
@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1>
        <i class="fas fa-key"></i>Available Permissions
        <div class="btn-group float-right" role="group" aria-label="Users & Roles">
            <a href="{{ route('users.index') }}" class="btn btn-primary">Users</a>
            <a href="{{ route('roles.index') }}" class="btn btn-success">Roles</a>
        </div>
    </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">

            <thead>
                <tr>
                    <th>Permissions</th>
                    <th class="text-center">Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                <tr>
                    <td>{{ $permission->name }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{ URL::to('permissions/'.$permission->id.'/edit') }}" class="btn btn-info">Edit</a>

                            {!! Form::open(['method' => 'DELETE', 'route' => ['permissions.destroy', $permission->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ URL::to('permissions/create') }}" class="btn btn-success">Add Permission</a>

</div>

@endsection
