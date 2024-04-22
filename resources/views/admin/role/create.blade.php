@extends('admin.layouts.app')

@section('title')
    Role Create
@endsection

@php
    $page = "Role Create"
@endphp

@section('main_content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Role Create</h3>
            </div>
            <form action="{{ route('role.store') }}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group col-md-4">
                        <label for="roleName">Role Name</label>
                        <input type="text" class="form-control @error('role_name') is-invalid @enderror" id="role_name" name="role_name" required placeholder="Role Name">

                        @error('role_name')
                            <p style="color: red">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-body">
                                <div class="card card-info card-outline">
                                    <div class="card-body">
                                        @foreach ($permissions as $permission)
                                            <div class="custom-control custom-checkbox p-3" style="display:inline-block;">
                                                <input class="custom-control-input" type="checkbox" name="permissions[]" id="permissions{{ $permission->id }}" value="{{ $permission->id }}">
                                                <label for="permissions{{ $permission->id }}" class="custom-control-label">{{ $permission->name }}</label>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Create</button>
                </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
@endsection

@section('add_js')

@endsection
