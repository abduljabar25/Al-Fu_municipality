<?php $__env->startSection('title'); ?>
  الرئيسية<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<!--  Owl-carousel css-->
<!-- Maps css -->
<link href="<?php echo e(URL::asset('assets/css/ani-backgr.css')); ?>" rel="stylesheet">

<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>

				<!-- /breadcrumb -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="content">
    <h1>بلدية الفهود</h1>
<h3>ترحب بكم وتتمنى  ان تقدم لكم افضل الخدمات</h3>
</div>
<div id="net">
</div>
		<!-- Container closed -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<!--Internal  Chart.bundle js -->

<script src="<?php echo e(URL::asset('assets/js/ani-backgr.js')); ?>"></script>

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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Al-Fu_municipality\resources\views/home.blade.php ENDPATH**/ ?>