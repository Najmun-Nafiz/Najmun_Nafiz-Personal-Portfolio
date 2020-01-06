<div class="hk-wrapper hk-vertical-nav">
@extends('layouts.app')
@section('title','About-Me')

@push('css')
@endpush

@section('content')
<!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Notifications Table</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Notifications Table</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Notifications Table</h5>
                            <p class="mb-40">All the information about category are include in this given tables,<code>search, pagination & selectors</code>. For responsive table just add the <code>responsive: true</code> to your DataTables function. <a href="https://datatables.net/reference/option/" target="_blank">View all options</a>.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
             
                                                    <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Message</th>
							                        <th>Action</th>
                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                               @foreach($contacts as $key=>$v_info)
                                                <tr>

                                                    <td style="color: white;background-color: orange;text-align: center;">{{ $key + 1 }}</td>
                                                    <td>{{$v_info -> firstname}}</td>
                                                    <td>{{$v_info -> email}}</td>
                                                    <td style="max-width: 200px;">{{$v_info -> message}}</td>
                                                    
                                                    

                                                    
                                                    
                                                    <td>
                                                        

                                                        <a href="{{route('admin.user.comment.reply',$v_info->id)}}" class="btn btn-info btn-sm"><i class="icon-compass"></i></a>
      
                                                        <a href="{{route('admin.user.comment.destroy',$v_info->id)}}" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>

                                                    </td>
                                                    
                                                </tr>
                                               @endforeach

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                   <th>Id</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
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