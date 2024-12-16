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
                    <h3>Berita</h3>
                    <!-- CREATE BERITA BUTTON TRIGGER MODAL -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#berita-create">
                        Tambah
                    </button>
                </div>
                <!-- CREATE BERITA MODAL -->
                <form action="{{ route('admin.berita.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal fade" id="berita-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Berita</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi">
                                    </div>
                                    <div class="mb-3">
                                        <label for="date">Tanggal</label>
                                        <input type="date" id="date" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beritas as $berita)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ Storage::url($berita->image) }}" alt="Berita Image" width="50">
                                        </td>
                                        <td>{{ $berita->description }}</td>
                                        <td>{{ $berita->formatted_date }}</td>
                                        <td>
                                            <!-- EDIT BERITA BUTTON TRIGGER MODAL -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#berita-edit-{{ $berita->id }}">
                                                Ubah
                                            </button>
                                            <!-- EDIT BERITA MODAL -->
                                            <form action="{{ route('admin.berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                                <div class="modal fade" id="berita-edit-{{ $berita->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Berita</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">Gambar</label>
                                                                    <input type="file" class="form-control" id="image" name="image">
                                                                    @if($berita->image)
                                                                        <div class="mt-2">
                                                                            <label for="current-image-path" class="form-label">Path Gambar Saat Ini:</label>
                                                                            <input type="text" class="form-control" id="current-image-path" value="{{ Storage::url($berita->image) }}" readonly>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="description" class="form-label">Deskripsi</label>
                                                                    <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi" value="{{ old('description', $berita->description) }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="date">Tanggal</label>
                                                                    <input type="date" id="date" name="date" class="form-control"  value="{{ old('date', $berita->date) }}">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
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
