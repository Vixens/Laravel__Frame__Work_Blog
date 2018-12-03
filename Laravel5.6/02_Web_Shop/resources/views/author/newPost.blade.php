 
@extends('layouts.admin')

@section('title') New post @endsection

@section('content')
    <div class="class content">
           
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-light">
                                        New Forms
                                    </div>
                                    @if(Session::has('success'))
                                        <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @endif

                                    @if($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li> 
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <form action="{{ route('createPost') }}" method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="normal-input" class="form-control-label">Title</label>
                                                    <input name="title" id="normal-input" class="form-control" placeholder="Post Title">
                                                </div>
                                            </div>
        
                                          
                                        </div>
        
                                        <div class="row mt-4">
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label for="placeholder-input" class="form-control-label"> content</label>
                                                     <!-- Delete the id when if this thing dont work -->
                                                    <textarea class="ckeditor" name="content" id="summary-ckeditor" placeholder="Post contents"></textarea>
                                                </div>
                                            </div>  
                                        </div>
                                        <button  class="btn btn-success"type= "submit">Create Post</button>
                                         <!-- Ckeditor -->
                                        <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                        <script>
                                                CKEDITOR.replace( 'summary-ckeditor' );
                                        </script>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
        
                       
                    </div>
    </div>
@endsection