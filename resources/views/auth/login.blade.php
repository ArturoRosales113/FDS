@extends('Layouts.Frontend.app') @section('content')
<body class="login-page">
 @include('Layouts.Frontend.Navbars.nav_expand')
 <div class="page-header" id="inicio_sesion">
  <div class="page-header-image"></div>
  <div class="content-center">
   <div class="container">
    <div class="col-md-4 content-center">
     <div class="card card-login card-plain">
      @include('auth.loginForm')
     </div>
    </div>
   </div>
  </div>
 </div>
</body>
@endsection
