@extends('layouts.master')
@section('title')
  الرئيسية@stop
@section('css')
<!--  Owl-carousel css-->
<!-- Maps css -->
<link href="{{URL::asset('assets/css/ani-backgr.css')}}" rel="stylesheet">

@endsection
@section('page-header')

				<!-- /breadcrumb -->
@endsection
@section('content')

<div class="content">
    <h1>بلدية الفهود</h1>
<h3>ترحب بكم وتتمنى  ان تقدم لكم افضل الخدمات</h3>
</div>
<div id="net">
</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->

<script src="{{URL::asset('assets/js/ani-backgr.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>
<script>
VANTA.NET({
  el: "#net",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
   color: 0x3fe8ff,
  backgroundColor: 0xf2a52
})
</script>
@endsection

