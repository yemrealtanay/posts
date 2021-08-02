@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}
                    <a href="{{ route('posts.create') }}"
                    class="btn btn-sm btn-primary">{{ __('New Post') }}</a>
                </div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($posts as $post)

                    <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}<br/>
                    </a>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection