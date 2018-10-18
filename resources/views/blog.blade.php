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
              <div class="col-md-6 box wow bounceInUp" data-wow-duration="1.4s">              
                  <h4 class="title"><a href="/blog/{{$post->slug}}">{{$post->title}}</a></h4>
                    <p class="description">{!!str_limit($post->body, 200) !!}</p>
                  </div>
              @empty           
                  <h3 class=" description">No Post Yet, Please Check Back!</h3><br>
              @endforelse 
                 
          </div>
        </div>
      </section>
  
     
    
    </main>
  


@endsection
