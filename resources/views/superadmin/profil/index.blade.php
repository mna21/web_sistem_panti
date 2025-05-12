@extends('layouts.master')

@section('title', 'Heroes')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Heroes</li>
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Heroes</h3>
                <button type="button" class="btn btn-warning btn-sm float-right" data-toggle="modal" data-target="#editHeroesModal">
                    <i class="fas fa-edit"></i> Edit Heroes
                </button>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th style="width: 30%;">Judul</th>
                        <td>{{ $heroes->title ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Subjudul</th>
                        <td>{{ $heroes->subtitle ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Deskripsi</th>
                        <td>{{ $heroes->description ?? '-' }}</td>
                    </tr>
                    <tr>
                        <th>Gambar</th>
                        <td>
                            @if($heroes->image)
                                <img src="{{ asset('storage/' . $heroes->image) }}" width="150">
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

<!-- Modal Edit Heroes -->
<div class="modal fade" id="editHeroesModal" tabindex="-1" aria-labelledby="editHeroesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('superadmin.heroes.update', $heroes->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h4 class="modal-title">Edit Heroes</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ $heroes->title }}" required>
                    </div>
                    <div class="form-group">
                        <label for="subtitle">Subjudul</label>
                        <input type="text" id="subtitle" name="subtitle" class="form-control" value="{{ $heroes->subtitle }}">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi</label>
                        <textarea id="description" name="description" class="form-control" rows="3" required>{{ $heroes->description }}</textarea>
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
