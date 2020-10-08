@extends('layouts/main-layout')
@section('content')

<div class="card">

  <div class="card-header">
    <h2>CREATE NEW POST</h2>
  </div>

  <div class="card-body">
    <form action="{{route('post-store')}}" method="post">
      @csrf
      @method('POST')

      <div class="form-group">
        <label for="title">title</label>
        <input type="text" name="title" value="">
      </div>
      <div class="form-group">
        <label for="content">content</label>
        <input type="text" name="content" value="">
      </div>
      <div class="form-group">
        <label for="like">like</label>
        <input type="number" name="like" value="0">
      </div>
      <div class="form-group">
        <label for="dislike">dislike</label>
        <input type="number" name="dislike" value="0">
      </div>

      <button class="btn btn-danger" type="submit" name="button">CREATE</button>

    </form>

  </div>
</div>
@endsection
