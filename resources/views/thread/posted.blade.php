@extends('layouts.app')

@section('content')
    投稿が完了しました。
    <a href="thread/{{ $thread_id }}">投稿したスレッドに行く</a>
@endsection
