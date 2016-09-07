@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-sm-4">
		<h2>Forum - post view</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li class="active"><strong>Forum - post view</strong></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="wrapper wrapper-content animated fadeInRight">
			<div class="ibox-content forum-post-container">
				<div class="forum-post-info">
					<h4><span class="text-navy"><i class="fa fa-globe"></i> General discussion</span> - Announcements - <span class="text-muted">Free talks</span></h4>
				</div>
				<div class="media">
					<a class="forum-avatar" href="#">
						<img src="{{asset('/assets/img/a1.jpg')}}" class="img-circle" alt="image">
						<div class="author-info">
							<strong>Posts:</strong> 542<br/>
							<strong>Joined:</strong> April 11.2015<br/>
						</div>
					</a>
					<div class="media-body">
						<h4 class="media-heading">The standard chunk of Lorem Ipsum</h4>
						Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
						<br/><br/>
						Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, 
						from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. 
						Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, 
						written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, 
						"Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
						<br/><br/>
						- Mike Smith
						CEO, Zender Inc.
					</div>
				</div>
				<div class="media">
					<a class="forum-avatar" href="#">
						<img src="{{asset('/assets/img/a2.jpg')}}" class="img-circle" alt="image">
						<div class="author-info">
							<strong>Posts:</strong> 32<br/>
							<strong>Joined:</strong> Dec 11.2015<br/>
						</div>
					</a>
					<div class="media-body">
						<h4 class="media-heading">There are many variations of passages of Lorem Ipsum available</h4>
						Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. 
						All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. 
						It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures
						<br/><br/>
						- Alex Kunter
						Designer, Kurtner Company
					</div>
				</div>
				<div class="media">
					<a class="forum-avatar" href="#">
						<img src="{{asset('/assets/img/a3.jpg')}}" class="img-circle" alt="image">
						<div class="author-info">
							<strong>Posts:</strong> 543<br/>
							<strong>Joined:</strong> June 21.2015<br/>
						</div>
					</a>
					<div class="media-body">
						<h4 class="media-heading">Hampden-Sydney College in Virginia</h4>
						 All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, 
						 making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, 
						 combined with a handful of model sentence structures
						<br/><br/>
						- Monica Jackson
						UX developer
					</div>
				</div>
				<div class="media">
					<a class="forum-avatar" href="#">
						<img src="{{asset('/assets/img/a4.jpg')}}" class="img-circle" alt="image">
						<div class="author-info">
							<strong>Posts:</strong> 72<br/>
							<strong>Joined:</strong> March 08.2015<br/>
						</div>
					</a>
					<div class="media-body">
						<h4 class="media-heading">Suffered alteration in some form,</h4>
						All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, 
						making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, 
						combined with a handful of model sentence structures
						<br/><br/>
						- John Ken
						UX/UI developer

						<div class="media">
							<a class="forum-avatar" href="#">
								<img src="{{asset('/assets/img/a7.jpg')}}" class="img-circle" alt="image">
								<div class="author-info">
									<strong>Posts:</strong> 253<br/>
									<strong>Joined:</strong> Oct 08.2015<br/>
								</div>
							</a>
							<div class="media-body">
								<h4 class="media-heading"> Latin words, combined with a handful of mode</h4>
								Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.
								<div class="photos">
									<a href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg" target="_blank"> 
										<img src="{{asset('/assets/img/p1.jpg')}}" class="forum-photo" alt="image"></a>
									<a href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg" target="_blank"> 
										<img src="{{asset('/assets/img/p3.jpg')}}" class="forum-photo" alt="image"></a>
								</div>
								Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
								<br/><br/>
								- Adam Smith
								CEO
							</div>
						</div>
						<div class="media">
							<a class="forum-avatar" href="#">
								<img src="{{asset('/assets/img/a8.jpg')}}" class="img-circle" alt="image">
								<div class="author-info">
									<strong>Posts:</strong> 431<br/>
									<strong>Joined:</strong> March 25.2015<br/>
								</div>
							</a>
							<div class="media-body">
								<h4 class="media-heading">Virginia, looked up one of the more obscure Latin words</h4>
								Distracted by the readable content of a page when looking at its layout. 
								The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using
								<br/><br/>
								Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. 
								All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, 
								making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words
								<br/><br/>
								- Sandra Jackson
								UI developer
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop