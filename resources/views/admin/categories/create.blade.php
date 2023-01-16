@extends('layouts.admin')

@section('content')
    <h2 class="mb-4 mt-4">Create New Category</h2>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{route('admin.categories.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf
                    <div class="mb-3">
                    <label for="title" class="form-label">Category Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    
                    <button type="submit" class="my-btn submit mt-4">Submit</button>
                    <button type="reset" class="my-btn reset">Reset</button>
            </form>
        </div>
    </div>
@endsection