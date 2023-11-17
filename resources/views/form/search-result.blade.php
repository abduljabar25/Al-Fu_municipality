@extends('layouts.master')
@inject('form', 'App\Models\form')
@section('title')
نتيجة البحث
@stop

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

<h3 class="text-center page-title">نتيجة البحث</h3>

@if ($message = Session::get('success'))
<div class="alert alert-success" role="alert">
 {{$message}}
</div>
@endif
<br><br><br>
  <div class="table-responsive" >
    <div >
        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
            style="text-align: center">

        <thead  >
            <tr>
    <th>رقم الاستمارة</th>
<th>الاسم الرباعي</th>
<th>الشريحة</th>
<th>حالة المعاملة</th>
<th scope="col" width="15%" colspan="4" >خيارات</th>



            </tr>
        </thead>
        <tbody>

            @if($forms->count())
            @foreach($forms as $form)
                <tr>

                    <td>{{ $form->id }}</td>
                    <td>{{ $form->Name }}</td>
                    <td>{{ $form->slides }}</td>

                    <td>
                        <input data-id="{{$form->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="مدقق" data-off=" غير مدقق  " {{ $form->status ? 'checked' : '' }}>

                    </td>
                    <td><a href="{{ route('form.show',$form->id) }}" class="btn btn-warning btn-sm">عرض</a></td>
                    @auth
                    <td><a href="{{route('form.edit',$form->id)}}" class="btn btn-info btn-sm">تعديل</a></td>

                        <td>

                            <form action="{{route('form.destroy',$form->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                                 </form>
                        </td>
                        @endauth





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
<script> $(function() {
            $('.toggle-class').change(function() {
            var status = $(this).prop('checked') == true ? 1 : 0;
            var id = $(this).data('id');
            $.ajax({

                type: "GET",
                dataType: "json",
                url: '',
                data: {'status': status, 'id': id},
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
