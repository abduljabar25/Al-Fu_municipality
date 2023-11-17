@extends('layouts.master')
@section('title')
ابحث عن حالة معاملتك عن طريق رقم الاستمارة
@stop
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الخدمات الالكترونية </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ ابحث عن معاملتك</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

<h3 class="text-center page-title"> ابحث عن حالة معاملتك عن طريق رقم الاستمارة</h3>
@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
 {{$message}}
</div>
@endif
<br>
<br>
<br>
<form action="{{ route('users.search')  }}"method="GET">
                    <div class="row">
                        <div class="col-12">
                            <div class="row no-gutters">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">

                                </div>
                                <div class="input-group mb-2">
                                    <input type="search" name="search"class="form-control form-input" placeholder="بحــث.....">
                                    <span class="input-group-append">
                                        <button class="btn ripple btn-primary" type="submit">بحــث</button>
                                    </span>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>
@if (session('error'))
<div class="alert alert-danger">{{ session('error') }}</div>
@endif


  </div>

</div>
</div>
</div>
</div>

		<!-- main-content closed -->
@endsection
@section('js')


<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Rating js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>
@endsection
