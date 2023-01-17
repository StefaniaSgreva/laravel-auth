@extends('layouts.admin')

@section('content')
<div class="project-card">
    <div class="p-4">
        <h1 class="show-title mb-3">{{$project->title}}</h1>
        @if($project->category)
        <small class="show-category">Category:<span>{{$project->category->name}}</span></small>
        @endif
        {{-- !! e una sola graffa, per evitare che il plug in delle text area stampi l'html --}}
        <p class="show-content mb-4">{!! $project->content !!}</p> 

        <div class="show-img mb-4">
            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{$project->title}}">
        </div>

        @if ($project->tags && count($project->tags) > 0 ? count($project->tags) : 0)
            @foreach ($project->tags as $tag)
            <span class="show-tags mb-4">#{{$tag->name}}</span>
            @endforeach
        @endif
    </div>
</div>
 
@endsection