@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit User</h1>
    <a href="{{ route('user.index') }}" class="btn btn-secondary btn-sm shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i>
      Kembali
    </a>
  </div>

  @include('includes.alert')

  <div class="card">
    <div class="card-body">
      <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group mb-3">
            <input type="password" class="form-control" name="password" id="password">
            <div class="input-group-append">
              <span class="input-group-text" id="password-toggle">
                <i class="fas fa-eye fa-sm"></i>
              </span>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
@endsection

@push('append-script')
  <script>
    $('#password-toggle').click(function() {
      const type = $('#password').attr('type');
      $('#password').attr('type', type == 'password' ? 'text' : 'password');
      $(this).find('i').attr('class', type == 'password' ? 'fas fa-eye fa-sm' : 'fas fa-eye-slash fa-sm');
    });
  </script>
@endpush