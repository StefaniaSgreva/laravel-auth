@extends('layouts.admin')

@section('content')
    <h1>{{$project->title}}</h1>
    @if($project->category)
    <small>Category:{{$project->category->name}}</small>
    @endif
    {{-- !! e una sola graffa, per evitare che il plug in delle text area stampi l'html --}}
    <p>{!! $project->content !!}</p> 

    <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{$project->title}}">

    @if ($project->tags && count($project->tags) > 0 ? count($project->tags) : 0)
        @foreach ($project->tags as $tag)
        <span>{{$tag->name}}</span>
        @endforeach
    @endif
@endsection