@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
    <a href="{{ route('travel-package.index') }}" class="btn btn-secondary btn-sm shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i>
      Kembali
    </a>
  </div>

  @include('includes.alert')

  <div class="card">
    <div class="card-body">
      <form action="{{ route('travel-package.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" value="{{ old('title', $item->title) }}">
        </div>
        <div class="form-group">
          <label for="location">Location</label>
          <input type="text" class="form-control" name="location" value="{{ old('location', $item->location) }}">
        </div>
        <div class="form-group">
          <label for="about">About</label>
          <textarea class="form-control d-block w-100" rows="10" name="about">{{ old('about', $item->about) }}</textarea>
        </div>
        <div class="form-group">
          <label for="featured_event">Featured Event</label>
          <input type="text" class="form-control" name="featured_event" value="{{ old('featured_event', $item->featured_event) }}">
        </div>
        <div class="form-group">
          <label for="language">Language</label>
          <input type="text" class="form-control" name="language" value="{{ old('language', $item->language) }}">
        </div>
        <div class="form-group">
          <label for="foods">Foods</label>
          <input type="text" class="form-control" name="foods" value="{{ old('foods', $item->foods) }}">
        </div>
        <div class="form-group">
          <label for="departure_date">Departure Date</label>
          <input type="date" class="form-control" name="departure_date" value="{{ old('departure_date', $item->departure_date) }}">
        </div>
        <div class="form-group">
          <label for="duration">Duration</label>
          <input type="text" class="form-control" name="duration" value="{{ old('duration', $item->duration) }}">
        </div>
        <div class="form-group">
          <label for="type">Type</label>
          <input type="text" class="form-control" name="type" value="{{ old('type', $item->type) }}">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" class="form-control" name="price" value="{{ old('price', $item->price) }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
@endsection