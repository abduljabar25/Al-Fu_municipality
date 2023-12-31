<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-dark active" href="<?php echo e(url('/' . $page='home')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/logo-white.png')); ?>" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="<?php echo e(url('/' . $page='home')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/favicon.png')); ?>" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="<?php echo e(url('/' . $page='home')); ?>"><img src="<?php echo e(URL::asset('assets/img/brand/favicon-white.png')); ?>" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="<?php echo e(URL::asset('assets/img/faces/faces.png')); ?>"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">مديرية بلدية الفهود</h4>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category"></li>
					<li class="slide">
						<a class="side-menu__item" href="<?php echo e(url('/' . $page='#')); ?>"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">الرئيسية</span><span class="badge badge-success side-badge">1</span></a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('/' . $page='#')); ?>"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z" opacity=".3"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z"/></svg><span class="side-menu__label">الخدمات الالكترونية</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="<?php echo e(url('/form/index')); ?>">ابحث عن معاملتك</a></li>
							<li><a class="slide-item" href="<?php echo e(url('/form/create')); ?>">استمارة التقديم على قطع الاراضي السكنية</a></li>
                            <li><a class="slide-item" href="<?php echo e(url('/form/indexAdmin')); ?>"> عرض كافة طلبات قطع الااراضي</a></li>

						</ul>

					</li>

					<li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="<?php echo e(url('/' . $page='#')); ?>"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">تعليمات</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="<?php echo e(url('/' . $page='accordion')); ?>">تعليمات تخصيص قطع الاراضي السكنية</a></li>
							<li><a class="slide-item" href="<?php echo e(url('/' . $page='carousel')); ?>">تعليمات الحصول على احازة بناء</a></li>
						</ul>
					</li>



					<li class="slide">
						<a class="side-menu__item" href="<?php echo e(url('/auction/index')); ?>"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"  viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v4H5zm10 10h4v4h-4zM5 15h4v4H5zM16.66 4.52l-2.83 2.82 2.83 2.83 2.83-2.83z" opacity=".3"/><path d="M16.66 1.69L11 7.34 16.66 13l5.66-5.66-5.66-5.65zm-2.83 5.65l2.83-2.83 2.83 2.83-2.83 2.83-2.83-2.83zM3 3v8h8V3H3zm6 6H5V5h4v4zM3 21h8v-8H3v8zm2-6h4v4H5v-4zm8-2v8h8v-8h-8zm6 6h-4v-4h4v4z"/></svg><span class="side-menu__label">  لوحة الاعلانات</span><span class="badge badge-warning side-badge">Hot</span></a>
					</li>






				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
<?php /**PATH C:\xampp\htdocs\Al-Fu_municipality\resources\views/layouts/main-sidebar.blade.php ENDPATH**/ ?>