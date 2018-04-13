@extends('Layouts.Backend.app')

@section('content')
 <!-- Navbar -->
 @include('Layouts.Backend.Navbars.nav_expand')
 @include('Backend.Dish.Index.header')
 <div class="content">
  <div class="row">
   @include('Backend.Dish.Index.dishes_table')
  </div>
 </div>
 @include('Layouts.Backend.Footers.footer')
@endsection
