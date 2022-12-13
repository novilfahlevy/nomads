@extends('layouts.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  @include('includes.alert')

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">User</h1>
    <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm shadow-sm">
      <i class="fa fa-plus fa-sm text-white-50"></i>
      Tambah User
    </a>
  </div>

  <!-- Content Row -->
  <div class="row">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Role</th>
              <th>Created Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ $user->roles }}</td>
              <td>{{ $user->created_at }}</td>
              <td>
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-info">
                  <i class="fas fa-pencil-alt"></i>
                </a>
                <form
                  action="{{ route('user.destroy', $user->id) }}"
                  method="POST"
                  class="d-inline"
                  onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')"
                >
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            @empty
            <tr>
              <td colspan="7" class="text-center">No Data</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection