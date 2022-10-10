@extends('admin.partials.master')
@section('content')
    <div class="container-xl">
        <div class="card mb-grid">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="card-header-title">List Tickets</div>
            </div>
            <div class="table-responsive-md">
                <table class="table table-actions table-striped table-hover mb-0">
                    <thead>
                        <tr>
                            <th scope="col">
                                <label class="custom-control custom-checkbox m-0 p-0">
                                    <input type="checkbox" class="custom-control-input table-select-all">
                                    <span class="custom-control-indicator"></span>
                                </label>
                            </th>
                            <th scope="col">Ticket Kode</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Lokasi</th>
                            <th scope="col">Pelapor</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $tickets = \App\tickets::all();
                        @endphp
                        @foreach ($tickets as $t)
                            <tr>
                                <th scope="row">
                                    <label class="custom-control custom-checkbox m-0 p-0">
                                        <input type="checkbox" class="custom-control-input table-select-row">
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </th>
                                <td>{{ $t->kode }}</td>
                                <td>{{ $t->created_at }}</td>
                                <td>{{ $t->judul }}</td>
                                <td>{{ $t->desc }}</td>
                                <td>{{ $t->lokasi }}</td>
                                <td>{{ $t->pelapor }}</td>

                                <td>
                                    <span class="badge badge-pill badge-primary">{{ $t->status }}</span>
                                </td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
