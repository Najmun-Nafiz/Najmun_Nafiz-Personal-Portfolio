<div class="hk-wrapper hk-vertical-nav">
@extends('layouts.app')
@section('title','Add-Contact-Info')

@push('css')
@endpush

@section('content')
<!-- Main Content -->
        <div class="hk-pg-wrapper">
            <!-- Breadcrumb -->
            <nav class="hk-breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-light bg-transparent">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact-Info Table</li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->

            <!-- Container -->
            <div class="container">

                <!-- Title -->
                <div class="hk-pg-header">
                    <h4 class="hk-pg-title"><span class="pg-title-icon"><span class="feather-icon"><i data-feather="database"></i></span></span>Contact-Info Table</h4>
                </div>
                <!-- /Title -->

                <!-- Row -->
                <div class="row">
                    <div class="col-xl-12">
                        <section class="hk-sec-wrapper">
                            <h5 class="hk-sec-title">Contact-Info Table</h5>
                            <p class="mb-40">All the information about category are include in this given tables,<code>search, pagination & selectors</code>. For responsive table just add the <code>responsive: true</code> to your DataTables function. <a href="https://datatables.net/reference/option/" target="_blank">View all options</a>.</p>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="table-wrap">
                                        <table id="datable_1" class="table table-hover w-100 display pb-30">
                                            <thead>
                                                <tr>
             
                                                    <th>Id</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Content</th>
                                                    <th>Status</th>
							                        <th style="max-width: 20% !important;">Action</th>
                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                               @foreach($all_info as $key=>$v_info)
                                                <tr>

                                                    <td style="color: white;background-color: orange;text-align: center;">{{ $key + 1 }}</td>
                                                    <td>{{$v_info -> email}}</td>
                                                    <td>{{$v_info -> address}}</td>
                                                    <td style="max-width: 350px;">{{$v_info -> content}}</td>
                                                    
                                                    

                                                    <td>
                                                        @if($v_info -> status == true)
                                                            <span class="alert-success" style="color: black;">Active</span>
                                                            
                                                        @else
                                                            <span class="alert-danger" style="color: black;">Un-Active</span>
                                                            
                                                        @endif
                                                    </td>
                                                    
                                                    <td>
                                                        
                                                        @if($v_info -> status == true)
                                                            <a href="{{ route('admin.contact.unactive',$v_info->id) }}" style="background-color: red;padding: 4px 7px; border-radius: 3px;">
                                                                <i class="glyphicon glyphicon-remove"></i>
                                                            </a>
                                                        @else
                                                            <a href="{{ route('admin.contact.active',$v_info->id) }}" style="background-color: red;padding: 4px 7px; border-radius: 3px;">
                                                                <i class="glyphicon glyphicon-ok"></i>
                                                            </a>
                                                        @endif

                                                        <a href="{{route('admin.contact.edit',$v_info->id)}}" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
      
                                                        <a href="{{route('admin.contact.destroy',$v_info->id)}}" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></a>

                                                    </td>
                                                    
                                                </tr>
                                               @endforeach

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Email</th>
                                                    <th>Address</th>
                                                    <th>Content</th>
                                                    <th>Status</th>
							                        <th style="max-width: 20% !important;">Action</th>
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