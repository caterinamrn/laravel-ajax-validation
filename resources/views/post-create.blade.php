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
        <input type="text" name="title" class="@error('title') is-invalid @enderror" value="{{old('title')}}">
        @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="content">content</label>
        <input type="text" name="content" class="@error('content') is-invalid @enderror" value="{{old('content')}}">
        @error('content')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="like">like</label>
        <input type="number" name="like" class="@error('like') is-invalid @enderror" value="{{old('like',0)}}">
        @error('like')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="dislike">dislike</label>
        <input type="number" name="dislike" class="@error('dislike') is-invalid @enderror" value="{{old('dislike',0)}}">
        @error('dislike')
          <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button class="btn btn-danger" type="submit" name="button">CREATE</button>

    </form>

  </div>
</div>
@endsection
