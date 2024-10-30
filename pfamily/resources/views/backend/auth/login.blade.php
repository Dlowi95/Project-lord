<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>DLOW | LARAVEL</title>

        <link href="backend/css/bootstrap.min.css" rel="stylesheet">
        <link href="backend/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="backend/css/login_admin.css" rel="stylesheet">

    </head>
    <<body class="main-bg">
        <div class="login-container text-c animated flipInX">
          <div>
            <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
          </div>
          <h3 class="text-whitesmoke">Đăng nhập Admin</h3>
          <div class="container-content">
            <form class="margin-t" method="post" role="form" action="{{ route('auth.login') }}">
                @csrf
              <div class="form-group">
                <input 
                    type="text" 
                    name="email"
                    class="form-control" 
                    placeholder="Email" 
                    value="{{ old('email') }}"
                >
                @if ($errors->has('email'))
                    <span class="error-message text-danger">* {{ $errors->first('email') }}</span>
                @endif
              </div>
              <div class="form-group">
                <input 
                    type="password" 
                    name="password"
                    class="form-control" 
                    placeholder="Mật khẩu" 
                    >
                    @if ($errors->has('password'))
                        <span class="error-message text-danger">* {{ $errors->first('password') }}</span>
                    @endif
              </div>
              <button type="submit" class="form-button button-l margin-b">Đăng nhập</button>
            </form>
            <p class="margin-t text-whitesmoke"><small> Jessica &copy; 2024</small> </p>
          </div>
        </div>
      </body>

</html>
