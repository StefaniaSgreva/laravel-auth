@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($projets as $project)
            <li>{{$project->title}}</li>
        @endforeach
    </ul>
@endsection