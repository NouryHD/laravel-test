<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

  public function getIndex(){
    return view('pages.welcome');
  }
  public function getAbout(){
    $first = "Noury";
    $last = "Kraaikamp";

    $fullname = $first . " " . $last;

    return view('pages.about')->withFullname($fullname);
  }
  public function getContact(){
    return view('pages.contact');
  }

}
