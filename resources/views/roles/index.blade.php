@extends('layouts.app')
@section('title', '| Roles')
@section('content')

<div class="col-lg-10 col-lg-offset-1">
    <h1>
        <i class="fa fa-key"></i> Roles
        <div class="btn-group float-right" role="group" aria-label="Users & Permissions">
            <a href="{{ route('users.index') }}" class="btn btn-primary">Users</a>
            <a href="{{ route('permissions.index') }}" class="btn btn-success">Permissions</a>
        </div>
    </h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th class="text-center">Operation</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($roles as $role)
                <tr>

                    <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>
                    {{-- Retrieve array of permissions associated to a role and convert to string --}}
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="Actions">
                            <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info">Edit</a>
                            <!-- <a href="{{ URL::to('roles/'.$role->id.'/delete') }}" class="btn btn-danger">Delete</a> -->
                            {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>

    <a href="{{ URL::to('roles/create') }}" class="btn btn-success">Add Role</a>

</div>

@endsection
