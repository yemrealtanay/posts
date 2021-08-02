@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('posts.update', $post)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="slcCategory">{{ __('Post Category') }}</label>
                                <select class="custom-select" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @if($post->category_id==$category->id) selected
                                        @endif
                                        > {{ $category->name }} </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                              <label for="exampleInputEmail1">Post Title</label>
                              <input type="text" name="title" class="form-control" id="inptitle" value="{{ $post->title }}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Post Content</label>
                                <textarea type="text" name="content" class="form-control" id="inpcontent" >{{ $post->content }}</textarea>
                              </div>
                            
                            
                            
                            <button type="submit" class="btn btn-primary">Update Post</button>
                        
                    
                    </form>

                    <hr>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection