@extends('layouts.app')

@section('content')
<div  class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-10 mt-5 ">
            <h1>Create Post</h1>
            @include('error')            
            <form method="post" action="/post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputTitle">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label>Upload Image</label>
                <div class="input-group">
                    <span class="input-group-btn" >
                        <span class="btn btn-default btn-file">
                            Browse… <input type="file" id="imgInp" name="featured_image"/>
                        </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                <img id="img-upload" />
            </div>
            {{--  <div class="form-group">
                <label for="exampleInputCategory">Category</label>
                <select id="inputState" name="category" class="form-control">
                    <option   value="asfd"  selected>PRO</option>
                    <option  value="">STANDARD</option>
                    <option  value="">CLASSIC</option>
                    <option value="">BASIC</option>
                </select>
            </div>  --}}
            <div class="form-group">
                <label for="blogbody">Post</label>
                <textarea rows="3"  name="body" class="form-control" id="blogbody" placeholder="Enter Blog Here"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary mb-5">Post</button>
            </form>
            
        </div>
    </div>
</div>

<script src="js/sweetalert.min.js"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')

<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'blogbody' );
    </script>
@endsection