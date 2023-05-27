@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Edit Category
                    <a href="{{ url('admin/category') }}" class="btn btn-primary btn-sm text-white float-end">BACK</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category/'.$category->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="">New Name</label>
                        <input type="text" name="name" class="form-control" value="{{ $category->name }}" />
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">New Slug</label>
                        <input type="text" name="slug" class="form-control" value="{{ $category->slug }}" />
                        @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for=""> New Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ $category->description }}</textarea>
                        @error('description')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Image</label>
                        <img src="{{ asset('/uploads/category/'.$category->image) }}" width="60px" height="60px">
                        <input type="file" name="image" class="form-control"/>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label><br/>
                        <input type="checkbox" name="status" {{ $category->description == '1' ? 'checked':'' }} />
                    </div>
                    
                    <div class="col-md-12">
                        <h4>SEO Tags</h4>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">New Meta Title</label>
                        <input type="text" name="meta_title" value="{{ $category->meta_title }}" class="form-control" />
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for=""> New Meta Keyword</label>
                        <textarea name="meta_keyword" class="form-control" rows="3">{{ $category->meta_keyword }} </textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for=""> New Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3">{{ $category->meta_description }} </textarea>
                    </div>

                    <div class="col-md-12 mb-3">
                        <button type="submit" class="btn btn-primary float-end">Update</button>
                    </div>
                 </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection