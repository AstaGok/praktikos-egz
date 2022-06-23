<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Shops;
  
class ShopsController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        $shops = Shops::all();
        return view('shops', compact('shops'));
    }
  
}