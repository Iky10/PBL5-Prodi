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
                    <h3>Output Lulusan</h3>
                    <!-- CREATE OUTPUT LULUSAN BUTTON TRIGGER MODAL -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#output-lulusan-create">
                        Tambah
                    </button>
                </div>
                <!-- CREATE OUTPUT LULUSAN MODAL -->
                <form action="{{ route('admin.output_lulusan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal fade" id="output-lulusan-create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Output Lulusan</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="image" class="form-label">Gambar</label>
                                        <input type="file" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Judul</label>
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul">
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Deskripsi</label>
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi">
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
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Deskripsi</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($outputLulusans as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{ Storage::url($item->image) }}" alt="Berita Image" width="50">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td class="d-flex gap-1">
                                            <!-- EDIT OUTPUT LULUSAN BUTTON TRIGGER MODAL -->
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#output-lulusan-edit-{{ $item->id }}">
                                                Ubah
                                            </button>
                                            <!-- EDIT OUTPUT LULUSAN MODAL -->
                                            <form action="{{ route('admin.output_lulusan.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="modal fade" id="output-lulusan-edit-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Ubah Output Lulusan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="image" class="form-label">Gambar</label>
                                                                    <input type="file" class="form-control" id="image" name="image">
                                                                    @if($item->image)
                                                                        <div class="mt-2">
                                                                            <label for="current-image-path" class="form-label">Path Gambar Saat Ini:</label>
                                                                            <input type="text" class="form-control" id="current-image-path" value="{{ Storage::url($item->image) }}" readonly>
                                                                        </div>
                                                                    @endif
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="title" class="form-label">Judul</label>
                                                                    <input type="text" class="form-control" id="title" name="title" placeholder="Masukkan Judul" value="{{ old('title', $item->title) }}">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="description" class="form-label">Deskripsi</label>
                                                                    <input type="text" class="form-control" id="description" name="description" placeholder="Masukkan Deskripsi" value="{{ old('description', $item->description) }}">
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
                                            <!-- DELETE OUTPUT LULUSAN BUTTON TRIGGER MODAL -->
                                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#output-lulusan-delete-{{ $item->id }}">
                                                Hapus
                                            </button>
                                            <!-- DELETE OUTPUT LULUSAN MODAL -->
                                            <form action="{{ route('admin.output_lulusan.delete', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('delete')
                                                <div class="modal fade" id="output-lulusan-delete-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus Output Lulusan</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Hapus Output Lulusan?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                                                <button type="submit" class="btn btn-danger">Hapus</button>
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
