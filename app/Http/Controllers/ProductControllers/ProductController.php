<?php
namespace App\Http\Controllers\ProductControllers;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index(): View
    {
        return view('products.addProduct');
    }
}
