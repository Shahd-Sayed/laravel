<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Product;

class ProductController extends Controller {

    public function index() {
        // بيظهر الداتا الي ف الي (table) في ال show
        $products = Product::get()->toArray();
        echo "<pre>";
        print_r($products);
        echo "</pre>";
    }

    public function create() {
        return view("products/create");   
    }

    public function store( Request $request ) {
        echo "stored page";
        $name = $request->name;
        $color = $request->color;
        $size = $request->size;
        $count_in_stock = $request->count_in_stock;
        Product::create([
            "name" => $name, "color" => $color , "size" => $size ,"count_in_stock" => $count_in_stock, 
        ]);
    }

    public function show( $id ) {
        echo "<h1 style='font-size:40px'>you are in show page<h1>";
        $products = Product::WHERE("id",$id)->FIRST();
        echo "<pre>";
        print_r($products);
        echo "</pre>";
    }

    public function edit( $id ) {
        echo "<h1 style='font-size:40px'>you are in Edit page<h1>";
        $products = Product::WHERE("id",$id)->FIRST();
        return view("products/edit",compact("products"));      
        
    }

    public function update( Request $request, $id ) {
        echo "updated data done $id";
        $name = $request->name;
        $color = $request->color;
        $size = $request->size;
        $count_in_stock = $request->count_in_stock;
        Product::WHERE("id",$id)->UPDATE([
            "name" => $name, "color" => $color , "size" => $size ,"count_in_stock" => $count_in_stock, 
        ]);

    }

    public function destroy(string $id){
        $products =Product::WHERE("id",$id)->delete();
        echo "destroy $id";
        
    }

}
