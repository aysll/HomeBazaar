@extends('layout')

@section('content')
	<section id="offers">
    <div class="container-fluid">
      <div class="row text-center">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 green_contact">
            <h1>XÜSUSİ ENDİRİMLƏR VƏ TƏKLİFLƏR</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="navbar-contact">
            <ul class="nav navbar-nav">
              <li><a href="\">Home</a></li>
              <li><a href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>
              <li><a href="\offers">Endirimlər & Təkliflər</a></li>
            </ul>
          </div>
      </div>
      <hr>
      <div class="height"></div>
      <div class="row text-center offerPicture img-responsive">
      </div>
      <div class="row text-center">
            <h2>ENDİRİMLİ MƏHSULLAR</h2>
      </div>
      <div class="row">
      @foreach($getproductWithDiscount as $discount )
        @if($discount->Discount!=0.00)
          <div class=" col-xs-6 col-sm-6 col-md-3 col-lg-3" style="margin-bottom:30px;">
              <div  class="lil_arrival ">
              <a href="\shopsidebar/{{ $discount->id }}">
                  <img style="height: 200px;" class="center-block img-responsive"  src="../uploads/images/{{ $discount->Picture }}">
              </a>
                  <h6 class="text-center">{{ $discount->ProductName }}</h6>
                  <p class="text-center oldPrice">{{ $discount->UnitPrice }}</p>
                  <p class="text-center newPrice">{{ $discount->Discount }}</p>
                  <button type="button" class="btn btn-default btn-block btn-card">ADD TO CARD</button>
              </div>
          </div>
        @endif
      @endforeach 
      </div>
       <div class="height"></div>
      </div>
  </section>
@stop