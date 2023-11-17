@extends('layouts.master')
@inject('form', 'App\Models\form')
@section('title')
عرض كافة الطلبات@stop
@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">


				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

<br><br><br>
<h3 class="text-center page-title"> طلبات قطع الارااضي الكسنية لكافة الشرائح</h3>
<br><br>
form::factory()->count(5)->create()


<form action="{{ route('users.searchall')  }}"method="GET">
    <div class="row">
        <div class="col-12">
            <div class="row no-gutters">
                <div class="col-lg-3 col-md-3 col-sm-12 p-0">

                </div>
                <div class="input-group mb-2">
                    <input type="search" name="searchall"class="form-control form-input" placeholder="ابحث عن طريق الاسم او رقم الاستمارة">
                    <span class="input-group-append">
                        <button class="btn ripple btn-primary" type="submit">بحــث</button>
                    </span>
                </div>

            </div>
        </div>
    </div>
</form>
<br>
  <div class="table-responsive" >
    <div >
        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
            style="text-align: center">

        <thead  >
            <tr>
    <th scope="col" width="5%" >رقم الاستمارة</th>
<th>الاسم الرباعي</th>
<th>الشريحة</th>
<th> عرض الملف</th>
<th scope="col" width="30%" colspan="4" >خيارات</th>


</tr>

        </thead>
        <tbody>

            @if($forms->count())
            @foreach($forms as $form)
                <tr>

                    <td>{{  $form->id }}</td>
                    <td>{{ $form->Name }}</td>
                    <td>{{ $form->slides }}</td>

                    <td><a href="{{ route('form.showpdf', $form->id) }}"class="btn btn-secondary btn-xs py-0"></i>عرض ملف المواطن</a></td>

                    <td><a href="{{ route('form.show',$form->id) }}" class="btn btn-warning btn-xs py-0" style="margin:2px;">عرض</a> </td>
                    <td><a href="{{route('form.edit',$form->id)}}" class="btn btn-primary btn-xs py-0">تعديل</a></td>

                        <td>

                            <form action="{{route('form.destroy',$form->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-xs py-0">حذف</button>
                                 </form>
                        </td>






                </tr>
            @endforeach
            @else
            <tr>
                <td colspan="3">لاتوجد نتائج بحــث</td>
            </tr>
            @endif
        </tbody>
    </table>
</div>

</div>
</div>
</div>
</div>

		<!-- main-content closed -->
@endsection
@section('js')
<script>
    $(function() {
            $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var forms_id = $(this).data('id');
            $.ajax({

                type: "GET",
                dataType: "json",
                url: '/status/update',
                data: {'status': status, 'forms_id': forms_id},
                success: function(data){
                console.log(data.success)
             }
          });
       })
    });
 </script>


<!--Internal  Datepicker js -->
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
