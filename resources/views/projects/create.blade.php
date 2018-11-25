@extends('layout')

@section('content')
  <h1 class="title">Create a new Project</h1>

  <form method="POST" action="/projects">
    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input class="input" type="text" id="title" name="title">
        </div>
    </div>
    <div class="field"> 
      <textarea class="textarea" name="description" placeholder="Project description" cols="30" rows="10"></textarea>
    </div>

    <button class="button is-info" type="submit">Create Project</button>
  </form>

@endsection
