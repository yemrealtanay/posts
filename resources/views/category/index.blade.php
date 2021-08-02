@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Categories') }}
                    <a href="{{ route('categories.create') }}"
                    class="btn btn-sm btn-primary">{{ __('New Category') }}</a>
                </div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach($categories as $category)

                    <a href="{{ route('categories.show', $category) }}">
                    {{ $category->name }}<br/>
                    </a>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection