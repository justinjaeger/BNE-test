@extends('master')

@section('signup', 'SignUp')

@section('content')

<h1>Signup Page</h1>

<!--
Basically create a bunch of forms that submit a post request to creating a new table with those forms in them
-->

<form id="entry-fields" action="/create user" >
  <li>First Name <input></input></li>
  <li>Last Name <input></input></li>
  <li>Email Address <input></input></li>
  <li>Password - at least 8 characters with 1 number <input></input></li>
  <li>Confirm Password <input></input></li>
  
  {{ csrf_field() }}

  <button id="join-button" onclick="" >JOIN NOW</button>
</form>

<?php

?>

@endsection