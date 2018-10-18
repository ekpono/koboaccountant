@extends('layouts.app')

@section('content')

<main id="main">
  
    <!-- ==========================
        Services Section
      ============================-->
      <section id="">
        <div class="container">
          <header class="section-header wow fadeInUp" style="margin-top:7rem;">
            <h3>BLOG</h3> <div class="text-right">
              @if(Auth::check())
                    <a href="/create" class="mb-2 btn btn-primary">Create Post</a>
                  @endif
            </div>
            {{-- <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p> --}}
          </header>
  
          <div class="row mt-3">
           
              @forelse ($posts as $post)
              <div class="col-md-6 box wow bounceInUp mt-3" data-wow-duration="1.4s">              
                  <h3 class="titlee" ><a href="/blog/{{$post->slug}}" style="color:black; text-decoration:none; font-weight:bold;">{{$post->title}}</a></h3>
                    <p class="description"><a href="/blog/{{$post->slug}}" style="color:#666; text-decoration:none;">{!!str_limit($post->body, 150)!!}</a></p>
                    
                    <h6 class="author">{{$post->user->name}}</h6>
                      <p class="">{{$post->created_at->format('d M')}} | {{$post->estimatedTime()}} read <i class="fa fa-star-o"></i></p>
                     
                     {{-- <hr class="hr" style="width:70px; border:2px solid #003130; margin:left"> --}}
                  </div>
              @empty           
                  <h3 class=" description">No Post Yet, Please Check Back!</h3><br>
              @endforelse 
                 
          </div>
        </div>
      </section>
  
     
    
    </main>
  


@endsection
