@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Chart.js</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Graphs</a></li>
			<li class="active"><strong>Sparkline Charts</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInDown">
	<div class="row">
		<div class="col-lg-5">
			<div class="jumbotron">
				<h1>Sparkline</h1>
				<p>It's another graet library for inline graphics visualization.</p>
				<p><a href="http://omnipotent.net/jquery.sparkline" target="_blank" class="btn btn-primary btn-lg" role="button">Learn more about Sparkline</a></p>
			</div>
		</div>
		<div class="col-lg-7">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Sparkline Charts <small>With custom colors.</small></h5>
					<div class="ibox-tools">
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div>
					<table class="table table-bordered white-bg">
						<thead>
						<tr>
							<th>Graph</th>
							<th>Type</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td><span id="sparkline1"></span></td>
							<td>Inline line chart</td>
						</tr>
						<tr>
							<td><span id="sparkline2"></span></td>
							<td>Bar chart</td>
						</tr>
						<tr>
							<td><span id="sparkline3"></span></td>
							<td>Pie chart</td>
						</tr>
						<tr>
							<td><span id="sparkline4"></span></td>
							<td>Long inline chart</td>
						</tr>
						<tr>
							<td><span id="sparkline5"></span></td>
							<td>Tristate chart</td>
						</tr>
						<tr>
							<td><span id="sparkline6"></span></td>
							<td>Discrete chart</td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Custom pie size example</h5>
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
				<div class="ibox-content text-center h-200"><span id="sparkline7"></span></div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Custom bar size example</h5>
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
				<div class="ibox-content text-center h-200"><span id="sparkline8"></span></div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Custom line size example</h5>
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
				<div class="ibox-content text-center h-200"><span id="sparkline9"></span></div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript" src="{{asset('/assets/js/demo/sparkline-demo.js')}}"></script>
@stop