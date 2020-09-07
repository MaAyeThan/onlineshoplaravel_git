<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
use App\Category;
use App\Subcategory;

class PageController extends Controller
{
    public function mainfun($value='')
    {
        $items = Item::take(10)->orderBy('id','desc')->get();//Item::all()
        //dd($items);  
        $brands = Brand::all();
        $categories = Category::take(8)->get();
        return view('main',compact('items','brands','categories'));
    }

    public function loginfun($value='')
    {
        
        return view('login');
    }

    public function registerfun($value='')
    {
        
        return view('register');
    }


    public function promotionfun($value='')
    {
        $items = Item::where('discount','>',0)->get();
        return view('promotion',compact('items'));
    }

    public function shoppingcartfun($value='')
    {
        
        return view('shoppingcart');
    }

    public function subcategoryfun($id)
    {
       $subcategory = Subcategory::find($id);
       $subcategories = Subcategory::all();
       return view('subcategory',compact('subcategories','subcategory'));
    }

    public function itemdetailfun($id)
    {
        $item= Item::find($id);
        return view('itemdetail',compact('item'));
    }

    public function brandfun($id)
    {
        $brand = Brand::find($id);
        return view('brand',compact('brand'));
    }

}
