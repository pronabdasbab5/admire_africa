<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admire Africa | Admin Login</title>

    <!-- Bootstrap -->
    <link href="{{ asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset('admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('admin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <center>
                @if (session()->has('login_error'))
                    <div class="alert alert-danger">{{ session()->get('login_error') }}</div>
                @endif
            </center>
            <form action="{{ url('admin/login') }}" method="POST" autocomplete="off">
                @csrf
              <h1>Admin Login</h1>
              <div>
                <input type="email" class="form-control form-text-element" placeholder="Username" value="{{ old('email') }}" required name="email"/>
                @error('email')
                    <font style="color: red; font-weight: bold;">{{ $message }}</font>
                @enderror
              </div>
              <div>
                <input type="password" class="form-control form-text-element" placeholder="Password" value="{{ old('password') }}" name="password" required>
                @error('email')
                    <font style="color: red; font-weight: bold;">{{ $password }}</font>
                @enderror
              </div>
              <div>
                <button type="submit" class="btn btn-default submit form-text-element">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <p><b>Developed By <a target="_blank" href="https://www.webinfotech.net.in/">WebInfotech</a></b></p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>