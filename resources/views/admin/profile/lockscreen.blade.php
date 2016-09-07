@extends('admin.layout.blank')
@section('content')
<div class="lock-word animated fadeInDown">
	<span class="first-word">LOCKED</span><span>SCREEN</span>
</div>
<div class="middle-box text-center lockscreen animated fadeInDown">
	<div>
		<div class="m-b-md">
		<img alt="image" class="img-circle circle-border" src="https://s3.amazonaws.com/uifaces/faces/twitter/ok/128.jpg">
		</div>
		<h3>John Smith</h3>
		<p>Your are in lock screen. Main app was shut down and you need to enter your passwor to go back to app.</p>
		<form class="m-t" role="form" action="index">
			<div class="form-group">
				<input type="password" class="form-control" placeholder="******" required="">
			</div>
			<button type="submit" class="btn btn-primary block full-width">Unlock</button>
		</form>
	</div>
</div>
@stop