<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\item;

class location extends Controller
{
    public function index($location){
    	return view('locations/'.$location);
    }
    public function rolls($location){
    	$rollos= item::where('location',$location)->where('category',"rolls")->get();
    	return view('rolls',compact('rollos'));
    }
     public function rollsCategory($location,$sub_category){
    	 $rollos= item::where('location',$location)->where('sub_category',$sub_category)->get();
    	return view('rollsSubCategory',compact('rollos','sub_category','location'));
    }

    public function categories($location,$categories){
    	return $rollos= item::where('location',$location)->where('category',$categories)->get();
    	
    	//return view('rolls',compact('rollos'));
    }

    

}
