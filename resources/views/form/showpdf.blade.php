
@extends('layouts.master')
@section('title')
عرض ملف المواطن@stop
@inject('forms', 'App\Models\form')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الخدمات الالكترونية </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/عرض ملف المواطن</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

@section('content')



<embed src="/download/{{$form->filepath}}" type="application/pdf"   height="700px" width="700">


    <body style="text-align:center;">

        <div >




    </div>
<br>
<div class="row">
<div class="col align-self-start">
</div>

</div>
<br>




                <!-- row closed -->




















</div>

@endsection




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



