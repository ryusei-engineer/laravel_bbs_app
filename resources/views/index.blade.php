@extends('layouts.index')
@section('title', 'top画面')
@section('content')
<h1>top画面</h1>
@forelse($rooms as $room)
<li>{{ $room->name }}</li>
<a href="{{ route('room',['room_id' => $room->id]) }}">チャット画面へ</a>
@empty
<li>ルームはありません。</li>
@endforelse
@endsection