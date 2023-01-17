@extends('layouts.admin')

@section('content')
    <div class="project-card">
        <div class="p-4">
            <h1 class="show-title mb-3">{{$category->name}} :</h1>
            <ol>
                @foreach($category->projects as $project)
                <li>{{$project->title}}</li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection