@extends('layouts.app')

@section('content')
    <h1>あいうえお</h1>
    @foreach($threads as $thread)
    <div>
        {{ $thread->title->getValue() }};
    </div>
    @endforeach
@endsection
