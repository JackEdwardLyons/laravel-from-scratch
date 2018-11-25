@extends('layout')


@section('content')
  <h2 class="title">Edit page</h2>

  <form action="/projects/{{ $project->id }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    
    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input class="input" type="text" id="title" name="title" value="{{ $project->title }}">
        </div>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea class="textarea" name="description" id="description">
            {{ $project->description }}
            </textarea>
        </div>
    </div>
    <button class="button is-info" type="submit">Update</button>
</form>

<form method="POST" action="/projects/{{ $project->id }}">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <br>
    <button class="is-danger button" method="submit">Delete</button>
</form>
@endsection
