@extends('layout')

@section('content')
	 <div class="green">
        <h1>BLOG</h1>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 blogSnDirect">
          <div class="col-md-4">home</div> 
          <div class="col-md-2"><i class="fa fa-angle-right" aria-hidden="true"></i></div> 
          <div class="col-md-6">blog</div>
        </div>
      </div>
    </div>  
    
    <hr>

    <div class="container">
    @foreach($getBlogById as $blog)
      <div class="row blogSnImage">
      <div class="col-md-10 col-md-offset-1">   
           <img src="../uploads/images/{{ $blog->picture }}" alt="" style="width:inherit;">
      </div>
</div>

      <div class="row blogSnTitle">
        <h2 class="blogPageSnTitle">{{$blog->title}}</h2>
      </div>

      <div class="row blogPageSnTitleIcons">
        <div class="col-md-1"><i class="fa fa-user" aria-hidden="true"></i>  Admin</div>
        <div class="col-md-2"><i class="fa fa-commenting-o" aria-hidden="true"></i>  April 20,2015</div>
        <div class="col-md-2"><i class="fa fa-clock-o" aria-hidden="true"></i>  10 Comments</div>
      </div>

      <div class="row blogPageSnText">
        <br>
          <p>{{$blog->content}}</p>

      </div>

      <div class="row blogPageShare">
        <div class="col-md-7">
          <div class="col-md-2 iconDiv">
            <h5 class="blogPageSnTitle">SHARE THIS:</h5>
          </div>
          <div class="col-md-1 iconDiv"><i class="fa fa-facebook" aria-hidden="true"></i></div>
          <div class="col-md-1 iconDiv"><i class="fa fa-twitter" aria-hidden="true"></i></div>
          <div class="col-md-1 iconDiv"><i class="fa fa-vk" aria-hidden="true"></i></div>
          <div class="col-md-1 iconDiv"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
          <div class="col-md-1 iconDiv"><i class="fa fa-instagram" aria-hidden="true"></i></div>
        </div>
      </div>
      
      <hr>

      

      <hr>

      <div id="fb-root"></div>
      <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/az_AZ/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>


      <div class="fb-comments" data-href="https://www.facebook.com/zuck/posts/10101828640656261" data-width="1160px" data-numposts="5"></div>
      @endforeach
    </div>
@stop