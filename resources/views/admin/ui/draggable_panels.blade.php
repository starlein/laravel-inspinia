@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Draggable Panels - Dra&amp;Drop box</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Tables</a></li>
			<li class="active"><strong>Draggable Panels - Dra&amp;Drop box</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">
	<div class="row" id="sortable-view">
		<div class="col-lg-6">
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Drag&amp;Drop</h5>
					<div class="ibox-tools">
						<label class="label label-primary">You can drag and drop me to other box.</label>
					</div>
				</div>
				<div class="ibox-content">
					<h2>This is simple box container nr. 1</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
						printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
						but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
			<div class="ibox ">
				<div class="ibox-title">
					<h5>Drag&amp;Drop</h5>
					<div class="ibox-tools">
						<a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-wrench"></i></a>
						<ul class="dropdown-menu dropdown-user">
							<li><a href="#">Config option 1</a></li>
							<li><a href="#">Config option 2</a></li>
						</ul>
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div class="ibox-content">
					<h2>This is simple box container nr. 3</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
						printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
						but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="ibox">
				<div class="ibox-title"><h5>Drag&amp;Drop</h5></div>
				<div class="ibox-content">
					<h2>This is simple box container nr. 2</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
						printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
						but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
			<div class="ibox">
				<div class="ibox-title"><h5>Drag&amp;Drop</h5></div>
				<div class="ibox-content">
					<h2>This is simple box container nr. 4</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
						Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
						printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, 
						but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript">
	$(document).ready(function() {
		<!-- Enable portlets -->
		WinMove();
	});
</script>
@stop