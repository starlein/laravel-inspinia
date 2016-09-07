@extends('admin.layout.template')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
	<div class="col-lg-10">
		<h2>Chart.js</h2>
		<ol class="breadcrumb">
			<li><a href="index">Home</a></li>
			<li><a>Graphs</a></li>
			<li class="active"><strong>Peity Charts</strong></li>
		</ol>
	</div>
	<div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInDown">
	<div class="row">
		<div class="col-lg-5">
			<div class="jumbotron">
				<h1>Peity Charts</h1>
				<p>Is a perfect library for inline graphics visualization data.</p>
				<p><a href="http://benpickles.github.io/peity/" target="_blank" class="btn btn-primary btn-lg" role="button">Learn more about Peity</a></p>
			</div>
		</div>
		<div class="col-lg-7">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Pie Charts <small>With custom colors.</small></h5>
					<div class="ibox-tools">
						<a class="close-link"><i class="fa fa-times"></i></a>
					</div>
				</div>
				<div>
					<table class="table table-bordered white-bg">
						<thead>
						<tr>
							<th>Graph</th>
							<th>Code</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td><span class="pie">1/5</span></td>
							<td><code>&lt;span class="pie"&gt;1/5&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="pie">226/360</span></td>
							<td><code>&lt;span class="pie"&gt;226/360&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="pie">0.52/1.561</span></td>
							<td><code>&lt;span class="pie"&gt;0.52/1.561&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="pie">1,4</span></td>
							<td><code>&lt;span class="pie"&gt;1,4&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="pie">226,134</span></td>
							<td><code>&lt;span class="pie"&gt;226,134&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="pie">0.52,1.041</span></td>
							<td><code>&lt;span class="pie"&gt;0.52,1.041&lt;/span&gt;</code></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Line and Bars Charts</h5>
					<div class="ibox-tools">
						<a class="close-link"><i class="fa fa-times"></i></a></div>
				</div>
				<div >
					<table class="table table-bordered white-bg">
						<thead>
						<tr>
							<th>Graph</th>
							<th>Code</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td><span data-diameter="40" class="updating-chart">5,3,9,6,5,9,7,3,5,2,5,3,9,6,5,9,7,3,5,2</span></td>
							<td><code>&lt;span class="line"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="line">5,3,9,6,5,9,7,3,5,2</span></td>
							<td><code>&lt;span class="line"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="line">5,3,2,-1,-3,-2,2,3,5,2</span></td>
							<td><code>&lt;span class="line"&gt;5,3,2,-1,-3,-2,2,3,5,2&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="line">0,-3,-6,-4,-5,-4,-7,-3,-5,-2</span></td>
							<td><code>&lt;span class="line"&gt;0,-3,-6,-4,-5,-4,-7,-3,-5,-2&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="bar">5,3,9,6,5,9,7,3,5,2</span></td>
							<td><code>&lt;span class="bar"&gt;5,3,9,6,5,9,7,3,5,2&lt;/span&gt;</code></td>
						</tr>
						<tr>
							<td><span class="bar">5,3,2,-1,-3,-2,2,3,5,2</span></td>
							<td><code>&lt;span class="bar"&gt;5,3,2,-1,-3,-2,2,3,5,2&lt;/span&gt;</code></td>
						</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@include('admin.layout.inc-footer')
@stop

@section('js')
<script type="text/javascript" src="{{asset('/assets/js/demo/peity-demo.js')}}"></script>
@stop