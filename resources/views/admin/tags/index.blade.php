@extends('layouts.admin')

@section('content')
    <form action="{{route('admin.tags.store')}}" method="post" class="d-flex align-items-center">
        @csrf
        <div class="input-group my-2">
            <input type="text" name="name" class="form-control" placeholder="
            Add a tag name here " aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Add new</button>
        </div>
    </form>
    @if(session()->has('message'))
    <div class="alert alert-success mb-3 mt-3 ms-5">
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="recent-grid">
        <div class="projects">
            <div class="project-card">
                <div class="project-card-header">
                    <h3>Tags</h3>
                </div>
                <div class="project-card-body">
                    <table width="100%">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Projects</th>
                            <th scope="col">Delete</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($tags as $tag)
                                <tr>
                                    <th scope="row" class="ps-2">{{$tag->id}}</th>
                                    <td>
                                        <form id="tag-{{$tag->id}}" action="{{route('admin.tags.update', $tag->slug)}}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <input class="border-0 bg-transparent" type="text" name="name" value="{{$tag->name}}">
                                        </form>
                                    </td>
                
                                    <td class="ps-4">
                                        {{$tag->projects && count($tag->projects) > 0 ? count($tag->projects) : 0}}
                                    </td>
                                    <td class="ps-2">
                                        <form action="{{route('admin.tags.destroy', $tag->slug)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-button btn " data-item-title="{{$tag->name}}"><i class="fa-solid fa-trash-can"></i></button>
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