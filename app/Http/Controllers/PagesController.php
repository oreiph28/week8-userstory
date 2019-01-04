<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function index(){
      $title= 'Welcome to Virtual Market!';
    //return view('pages.index',compact('title'));
      return view('pages.index')->with('title',$title);
    }

     public function about(){
      $title= 'Welcome to About!';
  
      // return view('pages.about')->with('title',$title);
      return view('pages.about',compact('title'));
    // return view ('pages.about');
     }

     public function services(){
       $data= array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
       );
       return view('pages.services')->with($data);
    //return view('pages.services');
     }
}
