<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
class BlogController extends Controller
{
   public function index($id) {
     return "ID is :". $id;
   }
}
