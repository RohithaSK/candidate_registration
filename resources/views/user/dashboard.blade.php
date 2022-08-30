@extends('root.master_page')



@section('usertype')
Normal User Dashboard
@endsection


@section('navbar')

@include('user.navbar')

@endsection



@section('content')

<div class="card" style= "width: 550px";>
  <div class="card-header">
  <h1 class="card-title"><b>You are welcome {{ Auth::user()->name }} !</b></h1>

  </div>
  <div class="card-body">
  You are successfully logged in! <br><br>
  <div class="text-center">
    <a href="/form" class="btn btn-primary">Register as a candidate</a>
  </div>
  </div>

</div>

@endsection
