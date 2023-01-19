<!DOCTYPE html>
<html>
<head>
<title></title>
 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
 
</head>
<body>

      <div class="login-wrap">
        <div class="login-html">
          <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Register</label>
          <div class="login-form">
            <div class="sign-in-htm">
              <form action="{{url('post-login')}}" method="POST" id="logForm">
                {{ csrf_field() }}
              <div class="group">
                <label for="user" class="label">Email</label>
                <input id="user" name="email" type="email" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input type="password" name="password" id="pass" class="input" data-type="password">
              </div>
              <div class="group">
              </div>
              <div class="group">
                <input type="submit" class="button" value="Login">
              </div>
            </div>
          </form>
          <form action="{{url('post-registration')}}" method="POST" id="logForm">
            {{ csrf_field() }}
            <div class="sign-up-htm">
              <div class="group">
                <label for="user" class="label">Username</label>
                <input id="user" name="name" type="text" class="input">
              </div>
              @if ($errors->has('name'))
              <span class="error">{{ $errors->first('name') }}</span>
              @endif    
              <div class="group">
                <label for="pass" class="label">Password</label>
                <input id="pass" name="password" type="password" class="input" data-type="password">
              </div>
              @if ($errors->has('password'))
              <span class="error">{{ $errors->first('password') }}</span>
              @endif  
              <div class="group">
                <label for="pass" class="label">Email Address</label>
                <input id="pass" name="email" type="text" class="input">
              </div>
              @if ($errors->has('email'))
              <span class="error">{{ $errors->first('email') }}</span>
              @endif    
              <div class="group">
                <input type="submit" class="button" value="Register">
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
</body>
</html>