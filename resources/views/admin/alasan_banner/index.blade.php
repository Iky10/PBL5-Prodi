@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3>Banner</h3>
                </div>
                <div class="card-body">
                    <div class="card p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5>Banner Alasan</h5>
                            <hr class="flex-grow-1 mx-2 border-0" style="border-top: 1px solid #000;">
                        </div>
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
                                                <img src="{{ Storage::url($item->image) }}" alt="Alasan Banner" width="50">
                                            </td>
                                            <td>
                                                <!-- EDIT ALASAN IMG BUTTON TRIGGER MODAL -->
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alasan-banner-{{ $item->id }}">
                                                    Ubah
                                                </button>
                                                <!-- EDIT ALASAN IMG MODAL -->
                                                <form action="{{ route('admin.alasan_banner.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
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
                                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan Nama">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="image" class="form-label">Gambar</label>
                                                                        <input type="file" class="form-control" id="image" name="image">
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
    </div>
@endsection
