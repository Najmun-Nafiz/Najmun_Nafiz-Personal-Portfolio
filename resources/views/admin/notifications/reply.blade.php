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
                            <p class="mb-40">All the notification reply are include in this given tables,<code>search, pagination & selectors</code>. For responsive table just add the <code>responsive: true</code> to your DataTables function. <a href="https://datatables.net/reference/option/" target="_blank">View all options</a>.</p>
                            <div class="row">

                                <div class="col-sm">

                                    <div class="table-wrap">
                                        <div class="col-md-12">
			          						<div class="information" style="padding-left: 70px;padding-top: 50px;">
			          							<b><strong>Name : </strong>{{ $reply->firstname }}</b></br>
			          							<b><strong>Email : </strong>{{ $reply->email }}</b></br>
			          							<b><strong>Phone : </strong>{{ $reply->phone }}</b></br>
			          							<p><strong><b>Message :</b> </strong>{{ $reply->message }}</p>
			          						</div>
			          						<form method = "post" action="{{ route('admin.user.comment.send',$reply->id) }}">
			          							@csrf
			          							<div class="col-md-6 col-sm-6" style="padding-left:70px;padding-bottom:50px;margin-top: 18px;">
			                                          <textarea name="reply" type="text" class="form-control" id="message" rows="7" required="required" placeholder="Reply Message" style="border: 2px solid black;"></textarea>
			                                      </div>
			          						
			          	            			<a href="{{ route('admin.user.comment.reply',$reply->id) }}" class="btn btn-danger">Back</a>
			          							<button type="submit" id="submit" name="submit" class="btn btn-send">Send </button>
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