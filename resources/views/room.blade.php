@extends('layouts.index')
@section('title', 'チャット画面')
@section('content')
<h1>チャット画面</h1>
<form action="" method="post">
  @csrf
  <input type="text" name="content">
  <button type=submit>送信</button>
</form>
@forelse($comments as $comment)
<li>{{ $comment->content }}</li>
@foreach($names as $name)
@if($comment->user_id === $name->id)
<li>{{ $name->name }}</li>
@endif
@endforeach
<hr>
@empty
<li>コメントはありません。</li>
@endforelse
<a href="{{ route('rooms') }}">ルーム一覧へ戻る</a>
@endsection