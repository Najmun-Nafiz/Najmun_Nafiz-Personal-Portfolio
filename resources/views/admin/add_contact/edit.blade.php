<div class="hk-wrapper hk-vertical-nav">
@extends('layouts.app')
@section('title','Add-Contact-Info-Update')

@push('css')
@endpush

@section('content')
<!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Add-Contact-Info-Update</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Category Create</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>Add-Contact-Info-Update</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Add-Contact-Info-Update</h5>
                            <p class="mb-25">Add-Contact-Info-Update will be addded by creating the use bellow this field. <code>.form-control</code> class.</p>
                            @include('admin.message')
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-10">

                                            <form action="{{ route('admin.contact.update',$info -> id)}}" method = "post" enctype="multipart/form-data">

                                                @csrf

                                                 <input type="text" class="form-control mt-15" placeholder="Address" name="address" value = "{{ $info -> address }}"required>
                                                

                                                <input type="text" class="form-control mt-15" placeholder="Phone" name="phone" value = "{{ $info -> phone }}" required>

                                                <input type="email" class="form-control mt-15" placeholder="Email" name="email" value = "{{ $info -> email }}" required>


                                                <textarea class="form-control mt-15" cols="15" rows="5" placeholder="Content" name="content" required style="max-width: 60%;"> {{ $info -> content }}</textarea>
                                               
                                               

                                                <a href="{{route('admin.contact.index')}}" class="btn btn-danger mt-45">Back</a>
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