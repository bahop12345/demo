<!--
    Author: W3layouts
    Author URL: http://w3layouts.com
    License: Creative Commons Attribution 3.0 Unported
    License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

    <title>Login</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="public/dist/css/style.css" type="text/css" media="all">

    <!-- Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>

    <section class="login">
        <div class="w3layoutscontaineragileits formlogin">
          <h2>Login here</h2>
          @if(session('ThongBao'))
          <div class="alert alert-danger" style="color: #FF0040">
              {{session('ThongBao')}}
          </div>
          @endif
          <form action="{{route('login')}}" method="post">
            @csrf
              <input type="email" Name="Username" placeholder="EMAIL" required="">
              <input type="password" Name="Password" placeholder="PASSWORD" required="">
             
              <div class="aitssendbuttonw3ls">
                  <input type="submit" value="LOGIN">
              </div>
          </form>
      </div>
  </section>



</body>
<!-- //Body -->

</html>
