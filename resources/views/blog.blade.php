@extends('layouts.app')

@section('content')

<main id="main">
  
    <!-- ==========================
        Services Section
      ============================-->
    <section id="">
        <div class="container mb-3">
            <header class="section-header wow fadeInUp" style="margin-top:7rem;">
                <h3>Learn</h3> 
                <div class="text-right">
                    @if(Auth::check())
                        <a href="/create" class="mb-2 btn btn-primary">Create Post</a>
                    @endif
                </div>
            </header>
            <div class="row">
                
                @forelse ($posts as $post)
                <div class="col-md-4 box wow bounceInUp mt-3 card" data-wow-duration="1.4s"> 
                  
                        <a href="/learn/{{$post->slug}}"> <img class="featured_image card-img-top rounded" src="{{asset('public/images/'.$post->featured_image)}}" align="" width="150px" height="200px"/> </a>                       
                          <div class="card-body">
                        <h3 class="titlee card-title" ><a href="/learn/{{$post->slug}}" style="color:black; text-decoration:none; font-weight:bold;">{{$post->title}}</a></h3>
                        <div class="description"><a href="/learn/{{$post->slug}}" style="color:#666; text-decoration:none;">{!!str_limit(strip_tags($post->body), 200)!!}</a></div>
                        <h5 class="author">{{$post->user->name}}</h5>
                        <p class="">{{$post->created_at->format('d M')}} | {{$post->estimatedTime()}} read <i class="fa fa-star-o"></i></p>
                    </div>
                        @if($post->PostThatAreSevenDaysOld())
                            <span class="badge badge-danger" style="width:20% ">Just In</span>
                        @endif  
                </div>
                @empty
                    <h3 class="description">No Post Yet, Please Check Back!</h3><br>
                @endforelse
                
            </div>
        </div>
    </section>
</main>
@endsection
