@extends('Layouts.Frontend.app')
@section('content') @include('Layouts.Frontend.Navbars.nav_expand')
<body class="">

 <div class="row d-flex align-items-center" id="inicio_sesion">
  <div class="col-md-4 mr-auto ml-auto">
   {!! Form::open(['route' => ['login'], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
      <h5 class="title" id="">Iniciar sesion</h5>
      <br>
      <div class="input-group">
        {!!Form::text('email',null,array('class'=>'form-control','placeholder'=> 'email'))!!}
      </div>
      <div class="input-group">
        {!!Form::password('password',null,array('class'=>'form-control'))!!}
      </div>

      <button type="submit" class="btn btn-info btn-fill pull-right">Iniciar Sesion</button>

    {!! Form::close() !!}
  </div>
</div>
@include('Layouts.Frontend.scripts')
</body>
@endsection
