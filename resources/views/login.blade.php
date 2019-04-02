@extends('layout.loginlayout')

@section('content')

<div class="login-layout">
	
<form action="/home">
        <h2 class="text-center log-in-header">Log in</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block button-log-in">Log in</button>
        </div>
        <div class="clearfix">
            <a href="#" class="pull-right log-in-header">Forgot Password?</a>
        </div>        
    </form>

</div>

@endsection