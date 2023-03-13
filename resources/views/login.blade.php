<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in - Tabler - Premium and Open Source dashboard template with responsive and high quality UI.</title>
    <link href="./dist/css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css?1674944402" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
</head>
<body  class=" d-flex flex-column">
  <script src="./dist/js/demo-theme.min.js?1674944402"></script>
  <div class="page page-center">
    <div class="container container-tight py-4">
      <div class="card card-md">
        <div class="card-body">
          <h2 class="h2 text-center mb-4">Login to your account</h2>
          <form action="{{url('post-login')}}" method="POST" id="logForm" autocomplete="off">
            {{ csrf_field() }}        
            <div class="mb-3">
              <label for="user" class="label">Email address</label>
              <input id="user" name="email" type="email" class="form-control" placeholder="your@email.com">
            </div>
            <div class="mb-2">
              <label for="pass" class="label">Password</label>
              <div class="input-group input-group-flat">
                <input type="password" name="password" id="pass" class="form-control" data-type="password" placeholder="Your password"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="mb-2">
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </div>
          </form>
      {{-- <div class="login-wrap">
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
          </form> --}}
          {{-- <form action="{{url('post-registration')}}" method="POST" id="logForm">
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
          </form> --}}
          </div>
        </div>
      </div>
</body>
</html>