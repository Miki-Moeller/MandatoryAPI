<?php
/**
 * Created by PhpStorm.
 * User: Miki
 * Date: 15-11-2018
 * Time: 10:23
 */
namespace App\Http\Controllers;

use App\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    public function show    ($id)
    {
        return new ProductResource(Product::find($id));
    }

}