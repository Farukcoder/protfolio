@extends('admin.layouts.app')

@section('title')
    Role View
@endsection

@php
    $page = "Role view"
@endphp

@section('main_content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Role View</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group col-md-4">
                                <label for="roleName">Role Name : </label>
                                {{ $role->name }}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card-body">
                                        <div class="card card-info card-outline">
                                            <div class="card-body">
                                                @foreach ($role->permissions as $permission)
                                                    <div class="custom-control custom-checkbox p-3" style="display:inline-block;">
                                                        <b>{{ $permission->name }}</b>
                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
