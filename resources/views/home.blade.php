@extends('master')

@section('title', 'Home')

@section('content')

<h1>Home page</h1>

<!--
Basically get all the user's information and display it 
Obviously need to make this dynamic
-->

<div id="user-info">
  <li>First Name</li>
  <li>Last Name</li>
  <li>Email Address</li>
</div>

@endsection