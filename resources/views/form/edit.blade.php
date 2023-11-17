@extends('layouts.master')
@section('title')
تعديل بيانات الاستمارة@stop
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">تعديل</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل بيانات الاستمارة</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success" role="alert">
                         {{$message}}
                        </div>
                        @endif
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">

                                <form action="{{ route('form.update',$form->id)}}" method="post" enctype="multipart/form-data">

                @csrf
                @method('PUT')


                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                                   <input type="hidden" name="id" id="id" value="{{$form->id}}" id="id" />

                                               <label for="formGroupExampleInput2">الاسم الرباعي<span class="tx-danger">*</span></label>
                                               <input type="text" placeholder=" الاسم الرباعي" class="form-control" name="Name"data-id="{{$form->id}}" value="{{$form->Name}}"  >
                                           </div>
                                           <div class="mb-3 col-md-6">
                                            <label for="formGroupExampleInput2">التولد<span class="tx-danger">*</span></label>
                                               <input type="date" placeholder="التولد" class="form-control"  name="BirthDate"value="{{$form->BirthDate}}"  >

                                           </div>
                                       </div>
                                       <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label>الجنس<span class="tx-danger">*</span></label>
                                            <select name="gender" id="gender" class="form-control"value="{{$form->gender}}" >
                                               <option value="">اختر </option>
                                               <option value="ذكر" {{($form->gender === 'ذكر') ? 'Selected' : ''}}>ذكر</option>
                                               <option value="انثى" {{($form->gender === 'انثى') ? 'Selected' : ''}}>انثى</option>

                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label>الحالة الاجتماعية<span class="tx-danger">*</span></label>
                                            <select name="maritalStatus" id="maritalStatus" class="form-control"value="{{$form->maritalStatus}}" >
                                               <option value="">اختر </option>
                                               <option value="متزوج/متزوجة" {{($form->maritalStatus === 'متزوج/متزوجة') ? 'Selected' : ''}}>متزوج/متزوجة</option>
                                               <option value="اعزب" {{($form->maritalStatus === 'اعزب') ? 'Selected' : ''}}>اعزب</option>
                                               <option value="باكر" {{($form->maritalStatus === 'باكر') ? 'Selected' : ''}}>باكر</option>
                                               <option value="ارملة" {{($form->maritalStatus === 'ارملة') ? 'Selected' : ''}}>ارملة</option>
                                               <option value="مطلقة" {{($form->maritalStatus === 'مطلقة') ? 'Selected' : ''}}>مطلقة</option>

                                            </select>
                                        </div>
                                    </div>

                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                            <label for="formGroupExampleInput2"> اسم الام<span class="tx-danger">*</span></label>
                                            <input type="text" class="form-control"  name="MotherName" id="MotherName"  placeholder="اسم الام"value="{{$form->MotherName}}">
                                           </div>
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">اسم الزوج/الزوجة<span class="tx-danger">*</span></label>
                                               <input type="text" placeholder="اسم الزوج/الزوجة" class="form-control"  name="wifeName" id="wifeName" value="{{$form->wifeName}}">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2"> مسقط الرأس <span class="tx-danger">*</span></label>
                                               <input type="text"  class="form-control"  placeholder=" مسقط الرأس" name="Birthplace" id="Birthplace"value="{{$form->Birthplace}}" >
                                           </div>
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">عنوان السكن<span class="tx-danger">*</span></label>
                                               <input type="text" class="form-control"  placeholder="عنوان السكن" name="ResidAddress" id="ResidAddress" value="{{$form->ResidAddress}}" >
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                            <label>   البطاقة الوطنية او هوية الاحوال المدنية<span class="tx-danger">*</span></label>
                                            <select name="NationalCard" id="NationalCard" class="form-control"value="{{$form->NationalCard}}" >
                                               <option value="">اختر </option>
                                               <option value="البطاقة الوطنية" {{($form->NationalCard === 'البطاقة الوطنية') ? 'Selected' : ''}}>البطاقة الوطنية</option>
                                               <option value="هوية الاحوال المدنية" {{($form->NationalCard === 'هوية الاحوال المدنية') ? 'Selected' : ''}}>هوية الاحوال المدنية</option>
                                            </select>                                           </div>
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2"> رقمها<span class="tx-danger">*</span></label>
                                               <input type="number" class="form-control"  placeholder="رقمها " name="numcard" id="numcard"value="{{$form->numcard}}"  >
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">رقم بطاقة السكن<span class="tx-danger">*</span></label>
                                               <input type="number" class="form-control"  placeholder="رقم بطاقة السكن" name="Residcard" id="Residcard" value="{{$form->Residcard}}" >
                                           </div>
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">تاريخ اصدارها<span class="tx-danger">*</span></label>
                                               <input type="date" class="form-control" placeholder="تاريخ اصدارها" name=" Dateissue" id="Dateissue"value="{{$form->Dateissue}}" >
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                            <label>الشريحة<span class="tx-danger">*</span></label>
                                            <select name="slides" id="slides" class="form-control"value="{{$form->slides}}" >
                                               <option value="">اختر </option>
                                               <option value="الشهداء" {{($form->slides === 'الشهداء') ? 'Selected' : ''}} > الشهداء</option>
                                               <option value="الموظفين(مدنيين) " {{($form->slides === 'الموظفين(مدنيين) ') ? 'Selected' : ''}}>الموظفين(مدنيين) </option>
                                               <option value="الموظفين(دفاع) " {{($form->slides === 'الموظفين(دفاع) ') ? 'Selected' : ''}} >الموظفين(دفاع)  </option>
                                               <option value="الموظفين(داخلية) " {{($form->slides === 'الموظفين(داخلية) ') ? 'Selected' : ''}} >الموظفين(داخلية)  </option>
                                               <option value="السجناء والمعتقلين" {{($form->slides === 'السجناء والمعتقلين') ? 'Selected' : ''}} >السجناء والمعتقلين </option>
                                               <option value=" المهجرين" {{($form->slides === 'المهجرين ') ? 'Selected' : ''}} >المهجرين  </option>
                                               <option value=" المادة 140" {{($form->slides === 'المادة 140 ') ? 'Selected' : ''}} >المادة 140  </option>
                                               <option value="الجرحى" {{($form->slides === 'الجرحى') ? 'Selected' : ''}}>الجرحى</option>
                                               <option value="ذوي الاعاقة"{{($form->slides === 'ذوي الاعاقة') ? 'Selected' : ''}}>ذوي الاعاقة</option>
                                               <option value="الارامل والمطلقات والمراة بلامعيل" {{($form->slides === 'الارامل والمطلقات والمراة بلامعيل ') ? 'Selected' : ''}}>الارامل والمطلقات والمراة بلامعيل</option>
                                               <option value=" الحشد الشعبي"{{($form->slides === 'الحشد الشعبي') ? 'Selected' : ''}}>الحشد الشعبي</option>
                                               <option value="المتقاعدين"{{($form->slides === 'المتقاعدين ') ? 'Selected' : ''}}>المتقاعدين</option>
                                               <option value="النقابات"{{($form->slides === 'النقابات ') ? 'Selected' : ''}}>النقابات</option>
                                               <option value=" المتوفين من الخدمة او من جراءها"{{($form->slides === 'المتوفين من الخدمة او من جراءها ') ? 'Selected' : ''}}>المتوفين من الخدمة او من جراءها</option>
                                               <option value="الرعاية الاجتماعية"{{($form->slides === 'الرعاية الاجتماعية ') ? 'Selected' : ''}}>الرعاية الاجتماعية</option>
                                           </select>
                                             </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="formGroupExampleInput2"> رقم الموبايل<span class="tx-danger">*</span></label>
                                                <input type="number" class="form-control"  placeholder="رقم الموبايل " name="phonenum" value="{{$form->phonenum}}"  >
                                            </div>

                                       </div>



                                       <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="" class="form-label"> {{$form->filepath}}<span class="tx-danger">*</span></label></label>
                                            <input type="file" class="form-control" id="filepath" name="filepath" value="{{$form->filepath}}" >
                                           </div>


                                        <div class="mb-3 col-md-6">
                                            <label for="formGroupExampleInput2"> الحالة <span class="tx-danger">*</span></label>
                                            <input data-id="{{$form->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="مدقق" data-off=" غير مدقق  " {{ $form->status ? 'checked' : '' }}>
                                        </div>
                                    </div>




                                        <div class="form-group">

                                        </div>

                                        <div style="text-align:center;">
                                            <button type="submit"  class="btn btn-danger btn-space">
                                         تعديل                                              </button>
                                            </div>


                                              </div>


    </form>
								</div>
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->

				<!-- row -->

				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
        $(function() {
                $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var id = $(this).data('id');
                $.ajax({

                    type: "GET",
                    dataType: "json",
                    url: '/status/update',
                    data: {'status': status, 'id': id},
                    success: function(data){
                    console.log(data.success)
                 }
              });
           })
        });
     </script>
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Rating js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script src="{{URL::asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/jquery.barrating.js')}}"></script>
<script src="{{URL::asset('assets/plugins/rating/ratings.js')}}"></script>

@endsection

