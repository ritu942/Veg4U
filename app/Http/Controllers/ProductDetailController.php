<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductDetailController extends Controller
{
    //
    function show()
    {
        return ProductCategory::all();
    }
}
