@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h1>Kecamatan</h1>
                Halaman {{ $districts->currentPage() }} dari {{ $districts->lastPage() }}
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <th>Kecamatan</th>
                    </thead>
                    <tbody>
                        @foreach ($districts as $district)
                        <tr>
                            <td><a href="{{ route('provinces.regencies.districts.villages.index', [$province_id, $regency_id, $district->id]) }}">{{ $district->name }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $districts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
