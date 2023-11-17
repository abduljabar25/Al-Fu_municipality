
@extends('layouts.master')
@inject('forms', 'App\Models\form')
@section('title')
وصل  معاملة تخيصيص قطعة ارض سكنية
@stop
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الخدمات الالكترونية </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ وصل  معاملة تخيصيص قطعة ارض سكنية</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

@section('content')

<div class="card text-center">

    <div class="card-header">

    </div>
    <div class="card-body" >

        <div class="tab-content">
            <div class="tab-pane active" id="post">
                <div class="row row-sm" id="printMe" >
                    <div class="col-md-12 col-xl-12">
                        <div class=" main-content-body-invoice" >
                            <br>
                            <br>
                            <br>
                            <div class="card card-invoice">
                                <div class="card-body">
                                    <div class="visible-print text-center">

                                        <div class="billed-from">
                                            <h6>مديرية بلدية الفهود</h6>
                                            <p>وصل  معاملة تخيصيص قطعة ارض سكنية<br>
                                                <br>
                                                <img src="{{asset('assets/img/image.png')}}" style="width:100px;height:100px;">
                                            </div><!-- billed-from -->
                                    </div><!-- invoice-header -->
                                    <div class="visible-print text-center">
<label class="w-64 cursor-pointer rounded-md shadow-sm bg-white border-2 py-8 px-4" :class="{ 'border-white': form.plan !== 'basic', 'border-green-500': form.plan === 'basic' }">
            <input type="radio" value="basic" v-model="form.plan" class="sr-only" />
            <div class="flex flex-row justify-between items-center">
                <span class="font-bold"> رقم الاستمارة </span>


            </div>

            <span class="text-sm">{{$form->id}}</span>
        </label>

                                    </div>
                                    <br>

                                    <div class="visible-print text-center">
                                        <div class="card-body">
                                            {!!QrCode::size(200)->color(255, 0, 0)->encoding('UTF-8')->generate($form->id ); !!}
                                        </div>
                                    </div>
                            </div>

                            <br><br><br><br><br><br>
                            <hr class="mg-b-40">
                                    <div class="float-left d-none d-sm-inline-block">
                                        البريد الالكتروني للدائرة:alfuhoodorqinfodep@gmail.com
                                      </div>
                                      <div class="float-right d-none d-sm-inline-block">
                                        {{ $form->created_at }}
                                                            </div>
                                                            <div> بواسطة:Abduljabbar_Jaleel</div>
                        </div>

                    </div><!-- COL-END -->

                    <div class="float-right d-none d-sm-inline-block">
                        <p class="text-center">
                             توقيع مستلم المعاملة
                        </p>
                     </div>
                     <div class="float-left d-none d-sm-inline-block">
                        <p class="text-center">
            الختم            </p>
                     </div>

                </div>
                <!-- row closed -->
                </div>
                <div  style="text-align:center;">

                    <a  title="'طباعة' "><button class="btn btn-info btn-sm" id="print_Button" onclick="printDiv('printMe')"><i class="fa fa-print" aria-hidden="true"></i> </button></a>

                    </div>                    </div>
                <body style="text-align:center;">

                    <div >




                </div>
<br>
<div class="row">
    <div class="col align-self-start">
    </div>

  </div>
  <br>




<div class='container p-5'>











</div>

@endsection
@section('js')
    <script type="text/javascript">
        function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
        }
    </script>

    <script type="text/javascript">
        function printDiv(divorder) {
            var printContents = document.getElementById(divorder).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
        }
    </script>



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



