@extends('layout')

@section('content')
  <div class="container mt-4">
    <div>
      <a class="btn btn-primary" href="{{ route('posts.create') }}">
        投稿の新規作成
      </a>
    </div>  
  </div>
  <div class="container my-4">
    <div class="card mb-4">
      <div class="card-header">
        <h2>
          Post Title
        </h2>
      </div>
      <div class="card-body">
        <p class="card-text">
          Post Body
        </p>

        <a class="card-link" href="{{ route('posts.show') }}">
          詳細を見る
        </a>
      </div>
      <div class="card-footer">
        <span>
          投稿日時：2020-1-1
        </span>
      </div>
    </div>

    <div class="card mb-4">
      <div class="card-header">
        <h2>
          Post Title
        </h2>
      </div>
      <div class="card-body">
        <p class="card-text">
          Post Body
        </p>

        <a class="card-link" href="">
          詳細を見る
        </a>
      </div>
      <div class="card-footer">
        <span>
          投稿日時：2020-1-1
        </span>
      </div>
    </div>
  </div>
@endsection