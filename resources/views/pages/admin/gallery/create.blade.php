@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Galeri</h1>
    <a href="{{ route('gallery.index') }}" class="btn btn-secondary btn-sm shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i>
      Kembali
    </a>
  </div>

  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <div class="card">
    <div class="card-body">
      <form action="{{ route('gallery.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="title">Title</label>
          <select class="form-control" name="travel_packages_id" id="travelPackagesId" required>
            <option value="" selected disabled>Pilih paket travel</option>
            @foreach ($travels as $travel)
            <option value="{{ $travel->id }}">{{ $travel->title }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="image">Gambar</label>
          <input type="file" class="form-control" name="image" id="image" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="card-body">
      
    </div>
  </div>
</div>
@endsection