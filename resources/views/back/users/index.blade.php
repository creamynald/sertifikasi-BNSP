@extends('layouts.default')
@section('content')
<div class="pagetitle">
    <h1>Website management</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item">Website management</li>
        <li class="breadcrumb-item">Users</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Users</h5>
            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm"><i class="bi bi-plus"></i> Tambah User</a>
            {{-- <a href="#" class="btn btn-danger btn-sm"><i class="bi bi-plus"></i> Export</a> --}}
            
            <!-- Table with stripped rows -->
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="bi bi-check-circle me-1"></i>
                        {{ Session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table datatable" id="table-users">
                  <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Level</th>
                        <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse ($users as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>
                                @if ($row->level == '1')
                                    Operator Web
                                @else
                                    Admin
                                @endif
                            </td>
                            <td>
                              <a href="{{ route('users.edit', $row->id) }}" class="btn btn-warning btn-sm text-white"><i class="bi bi-pencil-square d-inline"></i></a>
                                <form action="{{ route('users.destroy', $row->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-link btn-danger btn-sm">
                                    <i class="bi bi-trash text-white"></i>
                                </button>                                                
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Data Masih Kosong</td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

@endsection

