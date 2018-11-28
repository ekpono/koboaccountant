@extends('layouts.app')

@section('content')

<main id="main">
  
    <!-- ==========================
        Services Section
      ============================-->
      <section id="">
        <div class="container">
          <header class="section-header wow fadeInUp" style="margin-top:7rem;">
            <h3>BLOG</h3> 
            <div class="text-right">
              @if(Auth::check())
                    <a href="/create" class="mb-2 btn btn-primary">Create Post</a>
                  @endif
            </div>
            {{-- <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus, ad pro quaestio laboramus. Ei ubique vivendum pro. At ius nisl accusam lorenta zanos paradigno tridexa panatarel.</p> --}}
          </header>
  
          <div class="row mt-3">
           
              @forelse ($posts as $post)
              <div class="col-md-4 w-75 box wow bounceInUp mt-3 card" data-wow-duration="1.4s"> 
                  <img class="featured_image card-img-top rounded" src="{{'images/'.$post->featured_image}}" align="center" width="150px" height="200px"/>                             
                  <div class="card-body">
                      <h3 class="titlee card-title" ><a href="/blog/{{$post->slug}}" style="color:black; text-decoration:none; font-weight:bold;">{{$post->title}}</a></h3>
                    
                      <p class="description"><a href="/blog/{{$post->slug}}" style="color:#666; text-decoration:none;">{!!str_limit($post->body, 200)!!}</a></p>                  
                        <p class="">{{$post->created_at->format('d M')}} | {{$post->estimatedTime()}} read <i class="fa fa-star-o"></i></p>
                      </div>
                     {{-- <hr class="hr" style="width:70px; border:2px solid #003130; margin:left"> --}}
                  </div>
              @empty           
                  <h3 class="description">No Post Yet, Please Check Back!</h3><br>
              @endforelse 
                 <!-- <div class="view overlay">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/6-col/img%20(3).jpg" class="img-fluid " alt="">
                    <div class="mask flex-center rgba-red-strong">
                        <p class="white-text">Strong overlay</p>
                    </div>
                </div -->
          </div>
        </div>
      </section>
    </main>
  


@endsection

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
            <div class="row mt-3">
                
                @forelse ($posts as $post)
                <div class="col-md-4 box wow bounceInUp mt-3 card" data-wow-duration="1.4s"> 
                  
                        <a href="/learn/{{$post->slug}}"><img class="featured_image card-img-top rounded" src="{{asset('public/images/'.$post->featured_image)}}" align="center" width="150px" height="200px"/>                         
                          <div class="card-body">
                        <h3 class="titlee card-title" ><a href="/learn/{{$post->slug}}" style="color:black; text-decoration:none; font-weight:bold;">{{$post->title}}</a></h3>
                        <p class="description"><a href="/learn/{{$post->slug}}" style="color:#666; text-decoration:none;">{!!str_limit($post->body, 200)!!}</a></p>
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
