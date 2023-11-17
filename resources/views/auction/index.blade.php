@extends('layouts.master')
@inject('auction', 'App\Models\auction')
@section('title')
الاعلانات المنشورة
@stop
@section('css')
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex"><h4 class="content-title mb-0 my-auto">لوحة الاعلانات  </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/  الاعلانات المنشورة</span></div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->

                <div class="row">
                    @auth
                    <div class="col align-self-start">
                        <a   class="btn btn-primary" href="{{route('auction.create')}}" >نشر اعلان </a>
                       </div>
                    @endauth


                  </div>
                  <br>

                  @if ($message = Session::get('success'))
                  <div class="alert alert-success" role="alert">
                   {{$message}}
                  </div>
                  @endif


                  <div class="table-responsive" >
                    <div >
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                            style="text-align: center">

                        <thead  >
                            <tr>
                    <th width="15%">التسلسل </th>
                <th> نوع الاعلان</th>
                <th width="15%">تاريخ الاعلان</th>
                <th scope="col" width="30%" colspan="4" >خيارات</th>



                            </tr>
                        </thead>
                        <tbody>

                            @if($auctions->count())
                            @foreach($auctions as $auction)
                                <tr>

                                    <td>{{ $auction->id }}</td>
                                    <td>{{ $auction->typeauction }}</td>
                                    <td>{{ $auction->date }}</td>


                                    <td><a href="{{ route('auction.show',$auction->id) }}" class="btn btn-warning btn-xs py-0" style="margin:2px;">عرض</a></td>
                                    @auth


                                    <td><a href="{{route('auction.edit',$auction->id)}}" class="btn btn-primary btn-xs py-0">تعديل</a></td>

                                        <td>

                                            <form action="{{route('auction.destroy',$auction->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-xs py-0">حذف</button>
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

@endsection
@section('js')
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<script src="{{URL::asset('assets/js/select2.js')}}"></script>

@endsection
