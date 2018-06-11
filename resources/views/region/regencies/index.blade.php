@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h1>Kabupaten</h1>
                Halaman {{ $regencies->currentPage() }} dari {{ $regencies->lastPage() }}
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <th>Kabupaten</th>
                    </thead>
                    <tbody>
                        @foreach ($regencies as $regency)
                        <tr>
                            <td><a href="{{ route('provinces.regencies.districts.index', [$province_id, $regency->id]) }}">{{ $regency->name }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $regencies->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
