@extends('layouts.admin')

@section('content')
    <h2 class="mt-4 mb-4 ms-5 tabs-title">Create New Project</h2>
    <div class="row bg-white mx-5">
        <div class="col-12">
            <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf
                    <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="cover_image" class="form-label">Image</label>
                        <input type="file" name="cover_image" id="cover_image" class="form-control  @error('cover_image') is-invalid @enderror" >
                        @error('cover_image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
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

                    {{-- <div class="mb-3">
                        <label for="technologies" class="form-label">Technologies</label>
                        <select multiple class="form-select" name="technologies[]" id="technologies">
                            <option value="">Seleziona tecnologie</option>
                            @forelse ($technologies as $technology)
                            <option value="{{$technology->id}}">{{$technology->name}}</option>
                            @empty
                                <option value="">No technology</option>
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