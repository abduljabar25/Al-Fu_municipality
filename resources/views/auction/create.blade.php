@extends('layouts.master')
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto"> لوحة الاعلانات </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  نشر اعلان</span></div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->




                <br>

                  <br>


                  @if ($errors->any())
                  <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $item)
                        <li>{{$item}}</li>
                        @endforeach

                    </ul>
                  </div>

                  @endif


                <div class='container p-5'>


                <form action="{{route('storeauction')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                  <label for="" class="form-label">نوع الاعلان</label>
                  <input type="text" class="form-control" name="typeauction" >
                 </div>
                 <div class="mb-3">
                   <label for="" class="form-label">تاريخ الاعلان</label>
                   <input type="date"  class="form-control" name="date" id="" ></textarea>
                 </div>
                 <div class="mb-3">
                    <label for="" class="form-label">صورة الاعلان</label>
                    <input type="file" class="form-control" name="image" >
                   </div>

                   <div style="text-align:center;">
                    <input type="submit" value="نشر" class="btn btn-danger btn-space"></br>


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
