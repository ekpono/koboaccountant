@extends('layouts.app')

@section('content')
<div  class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 mt-5">
            <h1 style="font-weight:bold">{{$post->title}}</h1>
            <h5 style="font-weight:500" class="mb-3">Posted: {{$post->created_at->diffForHumans() . " by " . $post->user->name . " | Reading Time " . $post->estimatedTime()}}</h5>
                <img class="card-img-top w-75 m-4 rounded img-fluid" height="20px" src="{{asset('public/images/'.$post->featured_image)}}"/>                             
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
    <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = {{$post->id}}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://koboaccountant-com-learn-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
</div>
<!--<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5bc60bacfc0c1e9f"></script>-->
@endsection
