@extends('layout')

@section('content')
<h1 class="title">{{ $project->title }}</h1>
<p>{{ $project->description }}</p>

<a href="/projects/{{ $project->id }}/edit">Edit</a>
