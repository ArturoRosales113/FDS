@extends('Layouts.Frontend.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <ul>

                 <li class="nav-item">
    <a class="nav-link" href="#"
        onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
        Cerrar Sesión
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
