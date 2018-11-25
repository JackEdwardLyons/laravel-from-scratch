@extends('layout')

@section('content')
  <h1>Create a new Project</h1>

  <form method="POST" action="/projects">
    {{ csrf_field() }}

    <div>
      <input type="text" name="title" placeholder="Project Title" />
    </div>
    <div>
      <textarea name="description" placeholder="Project description" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Create Project</button>
  </form>

@endsection
