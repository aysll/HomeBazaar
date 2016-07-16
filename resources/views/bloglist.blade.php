@extends('layout')

@section('content')
<section id="bloglist">
   <div class="classrow">
    <div class="blog"><h2>BLOG</h2></div>
  </div>
<div class="container">
      <div class="row">
          <div class="iconspan">
              <div class="col-md-3 col-md-offset-1 col-xs-6 col-sm-12">

                    <ul class="nav navbar-nav" style="color: gray;">
                      <li><a href="\" style="color: gray;">Ana Səhifə</a></li>
                      <li><a href="#" style="color: gray;"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
                      <li><a href="\bloglist" style="color: gray;">Blogumuz</a></li>
                    </ul>
                    
                  <hr class="col-md-12">

              </div>
                
            <!--   <div class="col-md-3 col-md-offset-5 col-xs-6 col-sm-12"> 
                <div class="blogrighticons">
                      <span class="glyphicon glyphicon-stop righticon"><p>GRID</p></span>
                      <span class="glyphicon glyphicon-align-justify righticon righticon2"><p>LIST</p></span>
                    
                </div>
            </div> -->
            </div>
          </div>
      </div>
      
      <hr>

      <div class="container">
       @foreach($listBlog as $blog)
        <a href="\blogsingle/{{$blog->id}}">
          <div class="row">
            <div class="blogmarginpictures">
              <div class="col-md-5 col-md-offset-1 col-xs-12 col-sm-12">
                <div class="blogpic">
                 {{--  <a href="\blogsingle/{{$blog->id}}"> --}}
                    <img class="img-responsive" src="../uploads/images/{{ $blog->picture }}">
                  {{-- </a> --}}
                </div>
              </div>

                    <div class="col-md-5 col-xs-12 col-sm-12 col-md-offset-1"> 
                      <div class="row blogrownewsleft">
                        <div class="col-md-3 col-xs-12 col-sm-4">
                            <div id="blogdatedayleft"><b>12</b>
                               <div id="blogdatemonthleft"><b>MARCH</b></div>
                            </div>
                      </div>    
                           <div class="bloghhp">
                           <div class="col-md-9 col-xs-12 col-sm-8">
                          
                              <h4>{{$blog->title}}</h4>
                         
                              <p style="height: 160px; overflow:hidden;">{{$blog->content}}</p>
                              <a href="\blogsingle/{{$blog->id}}">Read more...</a>
                          </div>
                          </div>
                        </div>
                    </div>
              </div>
         </div>
       </a>
      @endforeach

      <div class="row">
            <div class="col-md-10 col-md-offset-1 col-xs-12 col-sm-12"><hr></div>

      </div>
      
        <div class="row">
        <div class="col-md-4 col-md-offset-8 col-xs-12 col-sm-12">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary">1</button>
            <button type="button" class="btn btn-secondary">2</button>
            <button type="button" class="btn btn-secondary">3</button>
            <button type="button" class="btn btn-secondary">4</button>
            <button type="button" class="btn btn-secondary">5</button>
            <button type="button" class="btn btn-secondary">6</button>
            <span class="glyphicon glyphicon-chevron-right icon hidden-xs"></span>
          </div>
        </div>

      </div>


 </div>
 </section>
@stop