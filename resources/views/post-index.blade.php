@extends('layouts/main-layout')
@section('content')
<div class="card">
  <div class="card-header">
    <h1>LIST OF POSTS</h1>
    <a class='btn btn-primary' href="{{route('post-create')}}">NEW POST</a>
  </div>
  <div class="card-body">
    <ul id="target">

    </ul>
  </div>
</div>
@endsection
