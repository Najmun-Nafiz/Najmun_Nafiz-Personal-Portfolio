<div class="hk-wrapper hk-vertical-nav">
@extends('layouts.app')
@section('title','Portfolio')

@push('css')
@endpush

@section('content')
<!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Portfolio</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Portfolio Create</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">
                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="toggle-right"></i></span></span>Portfolio Create</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Portfolio Create</h5>
                            <p class="mb-25">All the Portfolio will be addded by creating the use bellow this field. <code>.form-control</code> class.</p>
                            @include('admin.message')
                            <div class="row">
                                <div class="col-sm">
                                    <div class="row">
                                        <div class="col-md-10">

                                            <form action="{{ route('admin.portfolio.store')}}" method = "post" enctype="multipart/form-data">

                                                @csrf

                                                <input type="text" class="form-control mt-15" placeholder="Project-Name" name="projectname"required>

                                                <input type="text" class="form-control mt-15" placeholder="Name" name="name"required>

                                                <input type="text" class="form-control mt-15" placeholder="Created-Name" name="created_name" required>

                                                <input type="text" class="form-control mt-15" placeholder="Skills" name="skills" required>

                                                <select class="form-control custom-select mt-15" name = "category_id"  >
	                                                <option selected>Select The Category</option>

	                                                @foreach($categories as $v_categories)

														<option value = "{{$v_categories -> id}}">
															{{$v_categories -> name}}
														</option>

													@endforeach
                                            	</select>

                                                <textarea class="form-control mt-15" cols="15" rows="5" placeholder="Description" name="description" required style="max-width: 60%;"></textarea>
                                               
                                               <input type="file" name="image" class="form-control mt-15" required>

                                                <a href="{{route('admin.portfolio.index')}}" class="btn btn-danger mt-45">Back</a>
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