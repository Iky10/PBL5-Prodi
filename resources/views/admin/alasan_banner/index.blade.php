@extends('layouts.dashboard')
@section('content')

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('failed') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3>Banner Alasan</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($alasanBanner as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}" width="50">
                                        </td>
                                        <td>
                                            <!-- EDIT ALASAN IMG BUTTON TRIGGER MODAL -->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#alasan-banner-{{ $item->id }}">
                                                Ubah
                                            </button>
                                            <!-- EDIT ALASAN IMG MODAL -->
                                            <form action="{{ route('admin.alasan_banner.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="modal fade" id="alasan-banner-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Banner Alasan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="name" class="form-label">Nama</label>
                                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">Gambar</label>
                                                                    <input type="file" class="form-control" id="image" name="image" required>
                                                                    @if($item->image)
                                                                        <div class="mt-2">
                                                                            <label for="current-image-path" class="form-label">Path Gambar Saat Ini:</label>
                                                                            <input type="text" class="form-control" id="current-image-path" value="{{ Storage::url($item->image) }}" readonly>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </td>
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
