@extends('layouts.app')

@section('content')
<div  class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-10 mt-5">
            {{-- @php
                $mycontent = $post->body; // wordpress users only
                $word = str_word_count(strip_tags($mycontent));
                $m = floor($word / 200);
                $s = floor($word % 200 / (200 / 60));
                $est = $m . ' minute' . ($m == 1 ? '' : 's') . ', ' . $s . ' second' . ($s == 1 ? '' : 's');

                echo "Estimated Reading time ".$est;
            @endphp --}}
            <h1>{{$post->title}}</h1>
            <div class="mb-3">Posted: {{$post->created_at->diffForHumans() . " by " . $post->user->name . " | Reading Time " . $post->estimatedTime()}}</div>
            <h2>{!! $post->body !!}</h2>
        

            <div class="mt-5 mb-5 addthis_inline_share_toolbox"></div>
            @if (Auth::check())
            <div class="btn-group m-3">
                <a href="edit_post/{{$post->slug}}"><button type="submit" class="btn btn-primary mb-5">Edit</button></a>
                <a href="edit_post/{{$post->slug}}/delete"><button type="submit" class="btn btn-danger mb-5">Delete</button></a>
            </div>
            @endif
        </div>

    </div>
</div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bc60bacfc0c1e9f"></script>
@endsection
