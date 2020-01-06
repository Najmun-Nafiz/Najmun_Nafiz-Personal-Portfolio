<div class="hk-wrapper hk-vertical-nav">
@extends('layouts.app')
@section('title','About Me')

@push('css')
@endpush

@section('content')
<!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">About Me</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About Me Create</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>About Me Create</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">About Me Create</h5>
                            <p class="mb-25">About Me Information will be addded by creating the use bellow this field. <code>.form-control</code> class.</p>
                            @include('admin.message')
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-10">

                                            <form action="{{ route('admin.about.store')}}" method = "post" enctype="multipart/form-data">

                                                @csrf

                                                <input type="text" class="form-control mt-15" placeholder="Name" name="name"required>

                                                <input type="text" class="form-control mt-15" placeholder="Profession" name="profession"required>
                                                

                                                <input type="text" class="form-control mt-15" placeholder="Mobile" name="mobile" required>

                                                <input type="email" class="form-control mt-15" placeholder="Email" name="email" required>

                                                <textarea class="form-control mt-15" cols="15" rows="5" placeholder="Description" name="description" required style="max-width: 60%;"></textarea>
                                               
                                               

                                                <a href="{{route('admin.about.index')}}" class="btn btn-danger mt-45">Back</a>
                                                <button type="submit" class="btn btn-primary mt-45">Save</button>

                                            </form>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <!-- /Row -->
            </div>
            <!-- /Container -->

             <!-- Footer -->
            <div class="hk-footer-wrap container">
                <footer class="footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <p>Najmun Nafiz by<a href="https://hencework.com/" class="text-dark" target="_blank">OwnLab</a> © 2019</p>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <p class="d-inline-block">Follow us</p>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-facebook"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-twitter"></i></span></a>
                            <a href="#" class="d-inline-block btn btn-icon btn-icon-only btn-indigo btn-icon-style-4"><span class="btn-icon-wrap"><i class="fa fa-google-plus"></i></span></a>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- /Footer -->

        </div>
        <!-- /Main Content -->
</div>
@endsection

@push('scripts')
@endpush