@extends('layouts.master')
@inject('forms', 'App\Models\form')
@section('title')
استمارة التقديم على قطع الاراضي السكنية@stop
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto ">الخدمات الالكترونية</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ استمارة التقديم على قطع الاراضي السكنية</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">


                                @if ($message = Session::get('success'))
                                <div class="alert alert-success" role="alert">
                                 {{$message}}
                                </div>
                                @endif
                                 <form action="{{ url('storeFiles') }}" method="post"accept-charset="UTF-8"enctype="multipart/form-data" >
                                    {!! csrf_field() !!}


                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">الاسم الرباعي<span class="tx-danger">*</span></label>
                                               <input type="text" placeholder=" الاسم الرباعي" class="form-control" name="Name"required >
                                           </div>
                                           <div class="mb-3 col-md-6">
                                            <label for="formGroupExampleInput2">التولد<span class="tx-danger">*</span></label>
                                               <input type="date" placeholder="التولد" class="form-control"  name="BirthDate"required >

                                           </div>
                                       </div>
                                       <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label>الجنس<span class="tx-danger">*</span></label>
                                            <select name="gender" id="gender" class="form-control"required>
                                               <option value="">اختر </option>
                                               <option   @if(old('gender')==1) selected="selected"  @endif value="ذكر"> ذكر </option>
                                               <option @if(old('gender')==0 and old('gender')!="" ) selected="selected"   @endif value="انثى"> انثى  </option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label>الحالة الاجتماعية<span class="tx-danger">*</span></label>
                                            <select name="maritalStatus" id="maritalStatus" class="form-control"required>
                                               <option value="">اختر </option>
                                               <option   @if(old('maritalStatus')==1) selected="selected"  @endif value="متزوج/متزوجة"> متزوج/متزوجة</option>
                                               <option @if(old('maritalStatus')==0 and old('maritalStatus')!="" ) selected="selected"   @endif value="اعزب"> اعزب  </option>
                                               <option   @if(old('maritalStatus')==1) selected="selected"  @endif value="باكر"> باكر </option>
                                               <option @if(old('maritalStatus')==0 and old('maritalStatus')!="" ) selected="selected"   @endif value="ارملة "> ارملة  </option>
                                               <option   @if(old('maritalStatus')==1) selected="selected"  @endif value="مطلقة"> مطلقة </option>
                                            </select>
                                        </div>
                                    </div>

                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                            <label for="formGroupExampleInput2"> اسم الام<span class="tx-danger">*</span></label>
                                            <input type="text" class="form-control"  name="MotherName" id="MotherName"  placeholder="اسم الام"required>
                                           </div>
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">اسم الزوج/الزوجة</label>
                                               <input type="text" placeholder="اسم الزوج/الزوجة" class="form-control"  name="wifeName" id="wifeName">
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2"> مسقط الرأس <span class="tx-danger">*</span></label>
                                               <input type="text"  class="form-control"  placeholder=" مسقط الرأس" name="Birthplace" id="Birthplace"required>
                                           </div>
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">عنوان السكن<span class="tx-danger">*</span></label>
                                               <input type="text" class="form-control"  placeholder="عنوان السكن" name="ResidAddress" id="ResidAddress" required>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                            <label>   البطاقة الوطنية او هوية الاحوال المدنية<span class="tx-danger">*</span></label>
                                            <select name="NationalCard" id="NationalCard" class="form-control"required>
                                               <option value="">اختر </option>
                                               <option   @if(old('NationalCard')==1) selected="selected"  @endif value="البطاقة الوطنية"> البطاقة الوطنية</option>
                                               <option @if(old('NationalCard')==0 and old('NationalCard')!="" ) selected="selected"   @endif value="هوية الاحوال المدنية"> هوية الاحوال المدنية</option>
                                            </select>                                           </div>
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2"> رقمها<span class="tx-danger">*</span></label>
                                               <input type="number" class="form-control"  placeholder="رقمها " name="numcard" id="numcard"required >
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">رقم بطاقة السكن<span class="tx-danger">*</span></label>
                                               <input type="number" class="form-control"  placeholder="رقم بطاقة السكن" name="Residcard" id="Residcard" required>
                                           </div>
                                           <div class="mb-3 col-md-6">
                                               <label for="formGroupExampleInput2">تاريخ اصدارها<span class="tx-danger">*</span></label>
                                               <input type="date" class="form-control" placeholder="تاريخ اصدارها" name=" Dateissue" id="Dateissue"required>
                                           </div>
                                       </div>
                                       <div class="row">
                                           <div class="mb-3 col-md-6">
                                            <label>الشريحة<span class="tx-danger">*</span></label>
                                            <select name="slides" id="slides" class="form-control"required>
                                               <option value="">اختر </option>
  <option value="الشهداء ">الشهداء </option>
  <option value="الموظفين(مدنيين) ">الموظفين(مدنيين)</option>
  <option value="الموظفين(دفاع) ">الموظفين(دفاع) </option>
  <option value="الموظفين(داخلية) ">الموظفين(داخلية)</option>
  <option value="السجناء والمعتقلين">السجناء والمعتقلين</option>
  <option value="المهجرين">المهجرين</option>
  <option value="المادة 140">المادة 140</option>
  <option value="الجرحى">الجرحى</option>
  <option value="ذوي الاعاقة">ذوي الاعاقة</option>
  <option value="الارامل والمطلقات والمراة بلامعيل">الارامل والمطلقات والمراة بلامعيل</option>
  <option value=" الحشد الشعبي">الحشد الشعبي</option>
  <option value="المتقاعدين">المتقاعدين</option>
  <option value="النقابات">النقابات</option>
  <option value=" المتوفين من الخدمة او من جراءها">المتوفين من الخدمة او من جراءها</option>
  <option value="الرعاية الاجتماعية">الرعاية الاجتماعية</option>
                               </select>
                                             </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="formGroupExampleInput2"> رقم الموبايل<span class="tx-danger">*</span></label>
                                                <input type="number" class="form-control"  placeholder="رقم الموبايل " name="phonenum" required >
                                            </div>

                                       </div>



                                       <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label for="" class="form-label">ملف pdf<span class="tx-danger">*</span></label></label>
                                            <input type="file" class="form-control" @error('file') is-invalid @enderror" name="filepath" >
                                            @error('file')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                           </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                              <label class="form-check-label" for="invalidCheck">
                                                ـــ/اتعهد بصحة المعلومات المرسلة                                               <span class="tx-danger">*</span></label>
                                              <div class="invalid-feedback">
                                                You must agree before submitting.
                                              </div>
                                            </div>
                                          </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="75" style="width: 0%"></div>
                                            </div>
                                        </div>



                                              <div style="text-align:center;">
                                                <input type="submit" value="ارسال" class="btn btn-danger btn-space"></br>


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
        @stop
@section('js')
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
    <script>
        $(function () {
            $(document).ready(function () {
                $('#fileUploadForm').ajaxForm({
                    beforeSend: function () {
                        var percentage = '0';
                    },
                    uploadProgress: function (event, position, total, percentComplete) {
                        var percentage = percentComplete;
                        $('.progress .progress-bar').css("width", percentage+'%', function() {
                          return $(this).attr("aria-valuenow", percentage) + "%";
                        })
                    },
                    complete: function (xhr) {
                        console.log('File has uploaded');
                    }
                });
            });
        });
    </script>
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.steps js -->
<script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!--Internal  Form-wizard js -->
<script src="{{URL::asset('assets/js/form-wizard.js')}}"></script>
@endsection

