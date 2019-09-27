<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SymbolController extends Controller
{
  public function getNumber(){
    $numbers = [];
    for ($i =0; $i < 11 ; $i++) {
      $numbers[]= $i;

    }

    return view('elem.numbers', compact('numbers'));
  }
  public function getSymbol(){
    $letters = [];
    for ($i ='a'; $i < 'z' ; $i++) {
      $letters[]= $i;

    }
  $letters[]= 'z';
  return view('elem.letters', compact('letters'));
  }
}
