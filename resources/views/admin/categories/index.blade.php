@extends('layouts.admin')

@section('content')
    {{-- CREATE BTN --}}
    <a class="my-btn" href="{{route('admin.categories.create')}}">Add new</a>
    {{-- MESSAGE DELETE EDIT --}}
    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3">
        {{ session()->get('message') }}
    </div>
    @endif
    {{-- CATEGORIES  --}}
    <div class="recent-grid">
        <div class="projects">
            <div class="project-card">
                <div class="project-card-header">
                    <h3>Categories</h3>
                </div>
                <div class="project-card-body">
                    <table width="100%">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Projects</th>
                                <th scope="col">Edit</th>
                                <th scope="col">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                    <tr>
                                        <th scope="row" class="ps-2">{{$category->id}}</th>
                                        <td><a href="{{route('admin.categories.show', $category->slug)}}" title="View Category">{{$category->name}}</a></td>
                                        <td class="ps-4">{{count($category->projects)}}</td>
                                        <td class="ps-4"><a href="{{route('admin.categories.edit', $category->slug)}}" title="Edit Category"><i class="fa-solid fa-file-pen"></i></a></td>
                                        <td class="ps-2">
                                            <form action="{{route('admin.categories.destroy', $category->slug)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="delete-button btn" data-item-title="{{$category->name}}}"><i class="fa-solid fa-trash-can"></i></button>
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
    @include('partials.admin.modal_delete')
@endsection
