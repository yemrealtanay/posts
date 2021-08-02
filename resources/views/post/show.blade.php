@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $post->name }}
                    <a href="{{ route('posts.edit', $post) }}"
                    class="btn btn-sm btn-warning">{{ __('Edit Post') }}</a>
                   
                </div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="card-text">
                    
                    {{ $post->title }}<br/>
                    
                    <p>{{ $post->content }}</p>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection