<?php

namespace DLW\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DLW\Http\Controllers\Controller;

class ImageGalleryController extends Controller
{
    public function __construct(){
        $this->middleware('admin.guard');
    }

    public function index(){
        return redirect('https://cloud.chopardparfumstraining.com');
    }
}