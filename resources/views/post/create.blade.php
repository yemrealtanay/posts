@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Post') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('posts.store')}}" method="POST">
                            @csrf
                   
                            <div class="form-group">
                                <label for="slcCategory">{{ __('Post Category') }}</label>
                                <select class="custom-select" name="category_id">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
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
                              <input type="text" name="title" class="form-control" id="inptitle">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Post Content</label>
                                <textarea type="text" name="content" class="form-control" id="inpcontent" rows="5"></textarea>
                              </div>
                            
                            
                            
                            <button type="submit" class="btn btn-primary">Create Post</button>
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection