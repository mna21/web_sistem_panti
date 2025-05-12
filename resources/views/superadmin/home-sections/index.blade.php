@extends('layouts.master')

@section('title', 'Heroes')

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active">Heroes</li>
@endsection

@section('content')

    <div class="row">
        @foreach ($homeSections as $homeSection)
            <div class="col-md-12">
                <div class="card mb-4 p-3 shadow-sm">
                    <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-0">{{ $homeSection->title }}</h2>
                            <small>{{ $homeSection->subtitle }}</small>
                        </div>
                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                            data-target="#editHomeSectionModal{{ $homeSection->id }}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <p>{{ $homeSection->description }}</p>
                                <a href="{{ $homeSection->button_link }}" class="btn btn-primary btn-sm">
                                    {{ $homeSection->button_text }}
                                </a>
                            </div>
                            <div class="col-md-4 text-center">
                                @if ($homeSection->image)
                                    <img src="{{ asset('storage/' . $homeSection->image) }}" alt="{{ $homeSection->title }}"
                                        class="img-fluid rounded shadow">
                                @endif
                            </div>
                        </div>

                        <h4 class="mt-4">Items:</h4>
                        <div class="row">
                            @foreach ($homeSection->items as $item)
                                <div class="col-md-6 mb-3">
                                    <div class="card p-2 shadow-sm position-relative">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <strong>{{ $item->title }}</strong>
                                            <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                                data-target="#editItemModal{{ $item->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </div>
                                        <p class="mb-1">{{ $item->description }}</p>
                                        @if ($item->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}"
                                                class="img-fluid rounded mt-2">
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Modal Edit Home Section -->
    @foreach ($homeSections as $homeSection)
        <div class="modal fade" id="editHomeSectionModal{{ $homeSection->id }}" tabindex="-1"
            aria-labelledby="editHomeSectionLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="#" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h4 class="modal-title">Edit {{ $homeSection->title }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title">Judul</label>
                                <input type="text" id="title" name="title" class="form-control"
                                    value="{{ $homeSection->title }}" required>
                            </div>
                            <div class="form-group">
                                <label for="subtitle">Subjudul</label>
                                <input type="text" id="subtitle" name="subtitle" class="form-control"
                                    value="{{ $homeSection->subtitle }}">
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea id="description" name="description" class="form-control" rows="3" required>{{ $homeSection->description }}</textarea>
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
    @endforeach
@endsection
