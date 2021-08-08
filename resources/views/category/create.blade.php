@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Category') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('categories.store')}}" method="POST">
                            @csrf
                   
                            <div class="form-group">
                              <label for="exampleInputEmail1">Category Name</label>
                              <input type="text" name="name" class="form-control" id="inpname">
                              
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary">Create Category</button>
                           
                        
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection