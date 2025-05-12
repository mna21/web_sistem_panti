@extends('layouts.master')

@section('title', 'Tentang Panti')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Tentang Panti</li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tentang Panti</h3>
                <button type="button" class="btn btn-warning btn-sm float-right" data-toggle="modal" data-target="#editTentangModal">
                    <i class="fas fa-edit"></i> Edit Tentang
                </button>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 30%;">Judul</th>
                        <td>{{ $tentangs->title ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Subjudul</th>
                        <td>{{ $tentangs->subtitle ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $tentangs->description ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td>
                            @if($tentangs->image)
                                <img src="{{ asset('storage/' . $tentangs->image) }}" width="150">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Tentang -->
<div class="modal fade" id="editTentangModal" tabindex="-1" aria-labelledby="editTentangModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('superadmin.tentang.update', $tentangs->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title">Edit Tentang</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ $tentangs->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Subjudul</label>
                        <input type="text" id="subtitle" name="subtitle" class="form-control" value="{{ $tentangs->subtitle }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea id="description" name="description" class="form-control" rows="3" required>{{ $tentangs->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" id="image" name="image" class="form-control">
                        <small class="text-muted">Kosongkan jika tidak ingin mengubah gambar.</small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
