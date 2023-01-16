@extends('layouts.admin')

@section('content')
    <h2 class="mt-4 mb-4 ms-5 tabs-title">Edit Project: <span class="tabs-infos">{{$project->title}}</span></h2>
    <div class="row bg-white mx-5">
        <div class="col-12">
            <form action="{{route('admin.projects.update', $project->slug)}}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf
                @method('PUT')
    
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $project->title)}}" required maxlength="50">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea rows="10" class="form-control" id="content" name="content">{{old('content', $project->content)}}</textarea>
                </div>

                <div class="d-flex">
                    <div class="mb-3 me-5">
                        <img class="shadow" width="150" src="{{asset('storage/' . $project->cover_image)}}" alt="{{$project->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="cover_image" class="form-label">Replace post image</label>
                        <input type="file" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror" >
                        @error('cover_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{-- <label for="category_id" class="form-label">Seleziona Categoria</label>
                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                <option value="">Select category</option>
                @foreach ($categories as $category)
                <option value="{{$category->id}}" {{$category->id == old ('category_id') ? 'selected' : ''}}>{{$category->name}}</option>
                @endforeach
                </select>
                @error('category_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                </div> --}}

                {{-- </div>
                <div class="mb-3">
                <label for="tags" class="form-label">Tags</label>
                <select multiple class="form-select" name="technologies[]" id="technologies">
                    <option value="">Seleziona tag</option>
                    @forelse ($technologies as $technology)
                    @if($errors->any())
                    <option value="{{$technology->id}}" {{in_array($technology->id , old('technologies[]')) ? 'selected': ''}}>{{$technology->name}}</option>
                    @else
                    <option value="{{$technology->id}}" {{$project->technologies->contains($technology->id) ? 'selected': ''}}>{{$technology->name}}</option>
                    @endif
                    @empty
                        <option value="">No tag</option>
                    @endforelse
                </select>
                </div> --}}

                <button type="submit" class="my-btn submit">Submit</button>
                <button type="reset" class="my-btn reset">Reset</button>
            </form>
        </div>
    </div>
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection