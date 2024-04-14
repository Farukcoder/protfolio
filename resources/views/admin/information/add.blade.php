@extends('admin.layouts.app')

@section('title')
    Information Add
@endsection

@php
    $page = "Information Add"
@endphp

@section('main_content')
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{ route('information.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <div class="form-group d-flex justify-content-center">
                                    <div class="text-center col-md-6">
                                        <img class="profile-user-img img-fluid" src="{{ asset('admin/assets/dist/img/user4-128x128.jpg') }}" alt="User profile picture">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="input-group mt-2 d-flex justify-content-center">
                                    <div class="custom-file col-md-3">
                                        <input type="file" required class="custom-file-input" id="photo" name="photo">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" required class="form-control" name="first_name" id="first_name" placeholder="First Name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" required class="form-control" name="last_name" id="last_name" placeholder="Last Name">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="number" required class="form-control" name="age" id="age" placeholder="00">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nationality</label>
                                    <input type="text" required class="form-control" name="nationality" id="nationality" placeholder="Nationality">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" required class="form-control" name="phone" id="phone" placeholder="01888888888">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" required class="form-control" name="email" id="email" placeholder="test@gmail.com">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Skype</label>
                                    <input type="text" required class="form-control" name="skype" id="skype" placeholder="skype url">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Whatsapp</label>
                                    <input type="text" class="form-control" name="whatsapp" id="whatsapp" placeholder="Whatsapp url">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Linkedin</label>
                                    <input type="text" required class="form-control" name="linkedin" id="linkedin" placeholder="Linkedin Url">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Facebook</label>
                                    <input type="text" class="form-control" name="facebook" id="facebook" placeholder="Facebook url">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Language</label>
                                    <div class="select2-purple">
                                        <select class="select2" required multiple="multiple" data-placeholder="Select language" data-dropdown-css-class="select2-purple" name="language[]" id="language" style="width: 100%;">
                                            <option value="Bengali">Bengali</option>
                                            <option value="English">English</option>
                                            <option value="Hindi">Hindi</option>
                                            <option value="French">French</option>
                                            <option value="Russian">Russian</option>
                                            <option value="Japanese">Japanese</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Project</label>
                                    <input type="number" required class="form-control" name="project" id="project" placeholder="00">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Customer</label>
                                    <input type="number" required class="form-control" name="customer" id="customer" placeholder="00">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" required name="address" id="address" rows="3" placeholder="Enter address"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea id="summernote" required name="description"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-12">
                                <div class="form-group d-flex justify-content-center">
                                    <div class="text-center col-md-2">
                                        <button type="submit" class="btn btn-block bg-gradient-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection
