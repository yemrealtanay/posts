@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $category->name }}
                    <a href="{{ route('categories.edit', $category) }}"
                    class="btn btn-sm btn-warning">{{ __('Edit Category') }}</a>
                   
                </div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($category->posts as $post)

                    <a href="#">
                    {{ $post->title }}<br/>
                    </a>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection