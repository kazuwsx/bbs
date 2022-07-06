@extends('layouts.app')

@section('content')

<form method="post" action="{{ url('/thread/post') }}">
    @csrf
    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input class="input" type="text" name="title" placeholder="Title">
        </div>
    </div>
    <div class="field">
        <label class="label">Comment</label>
        <div class="control">
            <textarea class="textarea" name="comment" placeholder="Comment"></textarea>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <input class="button is-link" type="submit">Submit</button>
        </div>
    </div>
</form>

@endsection
