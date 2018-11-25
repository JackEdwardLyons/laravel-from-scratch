@extends('layout')

@section('content')
  <section class="hero">
    <div class="hero-body">
        <div class="container">
        <h1 class="title">
            Projects
        </h1>
        <h2 class="subtitle">
            All my Laravel Projects
        </h2>
        <a href="/projects/create">Create new project + </a>
        </div>
    </div>
    </section>
  <ul>
    @foreach ($projects as $project)
    <li>
        <p> -
            <strong>
                {{ $project->title }}:
            </strong>
            <span class="description">
                {{ $project->description }}
            </span>
            <a href="/projects/{{ $project->id }}/edit">
            Edit
            </a>
        </p>
    </li>
    @endforeach
  </ul>
@endsection
