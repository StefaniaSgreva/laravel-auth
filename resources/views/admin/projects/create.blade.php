@extends('layouts.admin')

@section('content')
    <h2 class="mt-4 mb-4 ms-5 tabs-title">Create New Project</h2>
    <div class="row bg-white mx-5">
        <div class="col-12">
            <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf
                <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required maxlength="150" minlength="3">
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <div class="form-text">* Minimo tre caratteri e massimo 150 caratteri</div>
                </div>
                <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea rows="10" class="form-control" id="content" name="content"></textarea>
                </div>

                <div class="mb-3">
                    <img id="uploadPreview" width="100" class="mb-3" src="https://via.placeholder.com/300x200">
                    <label for="create_cover_image" class="form-label">Image</label>
                    <input type="file" name="cover_image" id="create_cover_image" class="form-control  @error('cover_image') is-invalid @enderror" >
                    @error('cover_image')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category_id" class="form-label">Select Category</label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{$category->id == old ('category_id') ? 'selected' : ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <select multiple class="form-select" name="tags[]" id="tags">
                        @forelse ($tags as $tag)
                        <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @empty
                            <option value="">No tag</option>
                        @endforelse
                    </select>
                </div> --}}

                <div class="mb-5 ms-4">
                    @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">

                        @if (old("tags"))
                            <input type="checkbox" class="form-check-input" id="{{$tag->slug}}" name="tags[]" value="{{$tag->id}}">
                        @else
                            <input type="checkbox" class="form-check-input" id="{{$tag->slug}}" name="tags[]" value="{{$tag->id}}">
                        @endif
                        <label class="form-check-label" for="{{$tag->slug}}">{{$tag->name}}</label>
                        </div>
                    @endforeach
                    @error('tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
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