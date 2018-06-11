@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h1>Desa</h1>
                Halaman {{ $villages->currentPage() }} dari {{ $villages->lastPage() }}
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <th>Desa</th>
                    </thead>
                    <tbody>
                        @foreach ($villages as $village)
                        <tr>
                            <td><a href="{{ route('provinces.regencies.districts.villages.index', [$province_id, $regency_id, $district_id, $village->id]) }}">{{ $village->name }}</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $villages->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
