@extends('Layouts.Frontend.app')
@section('content')
<body class="login-page">
  @include('Layouts.Frontend.Navbars.nav_expand')
 <div class="page-header" id="front_register">
        <div class="page-header-image" style="background-image:url(../assets/img/login.jpg)"></div>
        <div class="content-center">
            <div class="container">
               <div class="row">
                <div class="col-md-8 content-center">
                    <div class="card card-login card-plain">
                     <div class="card-title">
                      <h6>Registrar Usuario</h6>
                     </div>
                      <div class="card-body">
                       {!! Form::open(['route' => ['register'], 'method' => 'POST']) !!}
                        @include('auth.registerForm')
                       {!! Form::close() !!}
                      </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</body>
@endsection
