@extends('layouts.app')

@section('content')
<div  class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-5">
            <h1 style="font-weight:bold">{{$post->title}}</h1>
            <h5 style="font-weight:500" class="mb-3">Posted: {{$post->created_at->diffForHumans() . " by " . $post->user->name . " | Reading Time " . $post->estimatedTime()}}</h5>
                <img class="card-img-top rounded img-fluid" height="20px" src="{{'../images/'.$post->featured_image}}"/>                             
            <p class="">{!! $post->body !!}</p>
        

            <div class="mt-5 mb-5 addthis_inline_share_toolbox"></div>
            {{-- Only authenticated user can see these buttons --}}
                @if (Auth::check())
                <div class="btn-group m-3">
                    <a href="edit_post/{{$post->slug}}"><button type="submit" class="btn btn-primary mb-5">Edit</button></a>
                    <a href="edit_post/{{$post->slug}}/delete"><button type="submit" class="btn btn-danger mb-5">Delete</button></a>
                </div>
            @endif
        </div>
        <div class="col-md-2"></div>

    </div>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bc60bacfc0c1e9f"></script>
@endsection
