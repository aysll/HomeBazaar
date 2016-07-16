@extends('layout')

@section('content')
	<!-- Murad: start -->
      <div class="container-fluid">
        <div class="row">
          <figure class="col-xs-12 section-intro">
            <!-- <img src="images/_slider.jpg" alt=""> -->
            <span class="section-introText">Shop</span>
          </figure>
        </div>

        <div class="container">
          <ol class="breadcrumb bg-white m-t-2">
            <li><a href="/">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li>Shop Single</li>
          </ol>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
          @foreach($shopsingleById as $product)
            <ul id="lightSlider-shop">
                <li data-thumb="../uploads/images/{{ $product->Picture }}">
                    <img src="../uploads/images/{{ $product->Picture }}" style="height: 400px;">
                </li>
                <li data-thumb="../uploads/images/{{ $product->Picture }}">
                    <img src="../uploads/images/{{ $product->Picture }}" style="height: 400px;">
                </li>
                <li data-thumb="../uploads/images/{{ $product->Picture }}">
                    <img src="../uploads/images/{{ $product->Picture }}" style="height: 400px;">
                </li2
                <li data-thumb="../uploads/images/{{ $product->Picture }}">
                   <img src="../uploads/images/{{ $product->Picture }}" style="height: 400px;">
                </li>
                <li data-thumb="../uploads/images/{{ $product->Picture }}">
                    <img src="../uploads/images/{{ $product->Picture }}" style="height: 400px;">
                </li>
                <li data-thumb="../uploads/images/{{ $product->Picture }}">
                    <img src="../uploads/images/{{ $product->Picture }}" style="height: 400px;">
                </li>
                <li data-thumb="../uploads/images/{{ $product->Picture }}">
                    <img src="../uploads/images/{{ $product->Picture }}" style="height: 400px;">
                </li>
            </ul>
            
          </div>

          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
            <h1 class="color-1f1f1f">{{ $product->ProductName }}</h1>

            <div>
              
              <div id="stars-default" class="display-ib side-padding"><input type=hidden name"rating"/></div>
            </div>

            <span class="display-b color-red fs-36 m-t-3">{{ $product->UnitPrice }}</span>

            <p class="m-t-3 fs-15">{{ $product->ProductDescription }}</p>

            <div class="m-t-3"><a href="\addtocard" class="f-lato btn-card btn no-radius color-2b2b2b side-padding-10p">Add to card</a></div>

            <div class="m-t-3">
              <span class="txt-upper fs-15 color display-ib btn-wishlist">
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                <span class="color-777777 side-padding">Add to wishlist</span>
              </span>
            </div>

            <hr class="m-t-1 m-b-1" />

            <div>
              <span class="fs-15">Categories: </span>
              <a href="#" class="display-ib color-green fs-15">{{ $product->Category->CategoryName }}</a>
         
            </div>

            <hr class="m-t-1 m-b-1" />

            <div>
              <span class="fs-15">Color: </span>
              <a href="#" class="display-ib color-green fs-15">{{ $product->Color }}</a>
           
            </div>
            <div>
              <span class="fs-15">Available Colors: </span>
              <a href="#" class="display-ib color-green fs-15">{{ $product->AvailableColor }}</a>
            </div>

            <div>
              <span class="fs-15">Size: </span>
              <a href="#" class="display-ib color-green fs-15">{{ $product->sizes }}</a>
            
            </div>

            <select>
                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>

            <!-- <hr class="m-t-1 m-b-1" /> -->
          </div>
          <!-- end of .col-lg-6 -->
        </div> <!-- end of .row -->

        <hr />

        <div class="row m-b-8 m-t-3">
          <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 m-b-3">
            <ul class="nav nav-stacked nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
              
              
            </ul>
          </div> 

          <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
            <!-- Tab panes -->
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">{{ $product->ProductDescription }}</div>

              
            </div>
        </div>
      </div> <!-- end of .row -->
    </div> <!-- end of .container -->
    <!-- Murad: end -->
@endforeach
@stop