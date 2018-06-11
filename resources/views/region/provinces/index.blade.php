@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h1>Provinsi</h1>
                Halaman {{ $provinces->currentPage() }} dari {{ $provinces->lastPage() }}
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <th>Provinsi</th>
                    </thead>
                    <tbody>
                        @foreach ($provinces as $province)
                        <tr>
                            <td><a href="{{ route('provinces.regencies.index', $province->id) }}">{{ $province->name }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $provinces->links() }}
                <!-- <a href="#" class="btn btn-success float-right">Create New</a> -->
            </div>
        </div>
    </div>
</div>
@endsection
