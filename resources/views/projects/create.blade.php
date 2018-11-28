@extends('layout')

@section('content')
  <h1 class="title">Create a new Project</h1>

  <form method="POST" action="/projects">
    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input 
                value="{{ old('title') }}"
                class="input {{ $errors->has('title') ? 'is-danger' : '' }}" 
                type="text" 
                id="title" 
                name="title"
                required
            />
        </div>
    </div>
    <div class="field"> 
      <textarea 
        required
        minlength="1" 
        class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" 
        name="description" 
        placeholder="Project description" 
        cols="30" 
        rows="10">
        {{ old('description') }}
        </textarea>
    </div>

    <button class="button is-info" type="submit">Create Project</button>
  </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error) 
            <ul class="notification is-danger">
                <li>
                    {{ $error }}
                </li>
            </ul>
        @endforeach
    @endif
@endsection
