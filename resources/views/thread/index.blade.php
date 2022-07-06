@extends('layouts.app')

@section('content')
    <h1>あいうえお</h1>
    <a href="/thread/launch">掲示板を立てる</a>
    @foreach($threads as $thread)
    <div>
        {{ $thread->title->getValue() }};
    </div>
    @endforeach
@endsection
