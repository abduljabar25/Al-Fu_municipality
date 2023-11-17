@extends('layouts.master')
@section('title')
عرض الاعلان@stop
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto"> لوحة الاعلانات </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ عرض الاعلان</span></div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')









 <div class="mb-3">
    <img src="/images/{{$auction->image}}" >

    </div>






</div>
</div>

</div>
</div>
</div>
</div>


</div>

<!-- main-content closed -->
@endsection
@section('js')
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>
@endsection
