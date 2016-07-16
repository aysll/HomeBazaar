<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slider;
use App\Category;
use App\Blog;
use App\Http\Requests;

class pageController extends Controller
{
	public function indexPage(){
		$productBestSeller=Product::all()->take(4);
		$productBestSellerrow1=Product::all()->take(2);
		$productBestSellerrow2=Product::all()->take(4);
		$productNew=Product::skip(4)->take(6);
		$slider=Slider::all();
		$categoryName=Category::all();
		$getBlogByIdIndex=Blog::all()->take(2);

		return view("index",compact('productBestSeller','productBestSellerrow1', 'productBestSellerrow2' ,'slider', 'productNew', 'categoryName','getBlogByIdIndex'));
	}

	public function contactPage(){
		return view("contact");
	}

	public function aboutPage(){
		return view("about");
	}

	public function blogListPage(){
		$listBlog=Blog::all();
		return view("bloglist", compact('listBlog'));
	}

	public function blogSinglePage($id){
		$getBlogById=Blog::where('id', $id)->get();
		return view("blogsingle", compact('getBlogById'));
	}

	public function deliveryPage(){
		return view("delivery");
	}

	public function offersPage(){
		$getproductWithDiscount = Product::all();
		return view("offers", compact('getproductWithDiscount'));
	}

	public function shopSideBarPage( $id){
		 $getProductByCategoryId=Product::where('category_id', $id)->get();
		return view("shopsidebar", compact('getProductByCategoryId'));
	}
	public function shopSideBarPageAll(){
		$shopSideBarPageAll=Product::all();
		return view('shopsidebarall', compact('shopSideBarPageAll'));
	}

	public function shopSinglePage($id){
		$shopsingleById = Product::where('id', $id)->get();
		return view("shopsingle", compact('shopsingleById'));
	}

	public function wishListPage(){
		return view("wishlist");
	}
	public function addtoCardPage(){
		return view("addtoCard");
	}
	
}
