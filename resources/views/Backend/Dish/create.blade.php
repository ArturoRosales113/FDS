@extends('Layouts.Backend.app')

@section('content')
 <!-- Navbar -->
 @include('Layouts.Backend.Navbars.nav_expand')
@include('Backend.Dish.Create.header')
 <div class="content">
  <div class="row">
   @include('Backend.Dish.Create.form')
  </div>
 </div>
 @include('Layouts.Backend.Footers.footer')
@endsection
