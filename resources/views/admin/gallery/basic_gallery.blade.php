@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Lightbox Gallery</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Gallery</a></li>
			<li class="active"><strong>Lightbox Gallery</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-content">
					<h2>Lightbox image gallery</h2>
					<p><strong>blueimp Gallery</strong> is a touch-enabled, responsive and customizable image & video gallery, carousel and lightbox, 
						optimized for both mobile and desktop web browsers. It features swipe, mouse and keyboard navigation, transition effects, slideshow functionality, 
						fullscreen support and on-demand content loading and can be extended to display additional content types. Full documentation you can find at: 
						<a href="https://github.com/blueimp/Gallery/blob/master/README.md" target="_blank">https://github.com/blueimp/Gallery/blob/master/README.md</a></p>
					<div class="lightBoxGallery">
						<a href="{{asset('/assets/img/gallery/1.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/1s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/2.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/2s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/3.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/3s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/6.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/6s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/7.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/7s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/8.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/8s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/9.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/9s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/10.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/10s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/12.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/12s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/6.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/6s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/7.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/7s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/2.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/2s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/3.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/3s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/1.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/1s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/9.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/9s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/10.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/10s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/11.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/11s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/12.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/12s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/6.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/6s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/12.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/12s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/10.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/10s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/1.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/1s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/2.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/2s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/3.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/3s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/6.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/6s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/7.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/7s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/8.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/8s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/9.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/9s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/10.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/10s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/11.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/11s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/12.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/12s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/6.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/6s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/7.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/7s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/2.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/2s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/3.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/3s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/1.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/1s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/9.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/9s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/10.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/10s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/11.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/11s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/12.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/12s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/7.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/7s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/8.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/8s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/9.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/9s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/10.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/10s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/11.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/11s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/12.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/12s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/6.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/6s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/12.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/12s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/4.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/4s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/5.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/5s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/10.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/10s.jpg')}}"></a>
						<a href="{{asset('/assets/img/gallery/11.jpg')}}" title="Image from Unsplash" data-gallery=""><img src="{{asset('/assets/img/gallery/11s.jpg')}}"></a>
						<!-- The Gallery as lightbox dialog, should be a child element of the document body -->
						<div id="blueimp-gallery" class="blueimp-gallery">
							<div class="slides"></div>
							<h3 class="title"></h3>
							<a class="prev">‹</a>
							<a class="next">›</a>
							<a class="close">×</a>
							<a class="play-pause"></a>
							<ol class="indicator"></ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop