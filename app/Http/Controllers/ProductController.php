<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        Product::create([
        'name' => 'silver',
        'detail' => 'This is silver'
        ]);
        dd('done');
    }

    public function update()
    {
        Product::find(1)->update([
        'name' => 'silver updated',
        'detail' => 'This is silver'
        ]);
        dd('done');
    }

    public function delete()
    {
        Product::find(1)->delete();
        dd('done');
    }
}
