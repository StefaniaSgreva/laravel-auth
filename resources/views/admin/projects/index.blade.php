@extends('layouts.admin')

@section('content')
   {{-- DASHBOARD CARDS TOP  --}}
    <div class="dashboard-cards">
        <div class="dashboard-card-single">
            <div>
                <h2>70</h2>
                <span>Projects</span>
            </div>
            <div>
                <i class="fa-solid fa-folder-open"></i>
            </div>
        </div>
        <div class="dashboard-card-single">
            <div>
                <h2>20</h2>
                <span>Categories</span>
            </div>
            <div>
                <i class="fa-solid fa-rectangle-list"></i>
            </div>
        </div>
        <div class="dashboard-card-single">
            <div>
                <h2>20</h2>
                <span>Tags</span>
            </div>
            <div>
                <i class="fa-solid fa-tags"></i>
            </div>
        </div>
    </div>
    {{-- CREATE BTN --}}
    <a class="my-btn" href="{{route('admin.projects.create')}}">Add new</a>
    {{-- MESSAGE DELETE EDIT --}}
    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif
    {{-- RECENT PROJECTS  --}}
    <div class="recent-grid mb-4">
        <div class="projects">
            <div class="project-card">
                <div class="project-card-header">
                    <h3>Recent Projects</h3>
                    {{-- <button>See all <i class="fa-solid fa-angles-right"></i></button> --}}
                </div>
                <div class="project-card-body">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Title</th>
                                <th scope="col">Content</th>
                                <th scope="col">Category</th>
                                <th scope="col">Tags</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $project)
                                    <tr>
                                        <th scope="row" class="ps-2">{{$project->id}}</th>
                                        <td><a href="{{route('admin.projects.show', $project->slug)}}" title="View Project">{{$project->title}}</a></td>
                                        {{-- <td>{{Str::limit($project->content,80)}}</td> --}}
                                        <td>{!! Str::limit($project->content,80) !!}</td>
                                        <td class="ps-3">{{$project->category ? $project->category->name : 'Altro'}}</td>
                                        <td class="ps-3">{{$project->tags && count($project->tags) > 0 ? count($project->tags) : 0}}</td>
                                        <td class="ps-2"><a href="{{route('admin.projects.edit', $project->slug)}}" title="Edit Project"><i class="fa-solid fa-file-pen"></i></a></td>
                                        <td class="ps-2">
                                            <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-button btn" data-item-title="{{$project->title}}"><i class="fa-solid fa-trash-can"></i></button>
                                         </form>
                                        </td>
                                    </tr>
                            @endforeach
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- php artisan vendor:publish --tag=laravel-errors
        php artisan vendor:publish --tag=laravel-pagination --}}
    {{$projects->links('vendor.pagination.bootstrap-5')}}
    @include('partials.admin.modal_delete')
@endsection
