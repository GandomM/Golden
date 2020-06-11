<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Image;

use DB;
use Illuminate\Support\Facades\Session;
class productController extends Controller
{

    //  Add new product 
    function product_add()
    {
    	return view('Admin_pages/product_add');
    }




    //  Insert new product
    function product_insert(request $request)
    {
        //   $data = [
        //     'product_name' => $request->product_name,
        //     'technis' => $request->technis,
        //     'color' => $request->color,
        //     'design' => $request->design,
        //     'detail' => $request->detail,
        // ];
        // $product=Product::create($data);

//        //  check if request has image
        // $image = $request->hasFile('image') ? $request->file('image') : null;

        // if ($image) {
        //     $image_name =time();
        //     $image->move($image_name);
        //     Image::create([
        //         'image_name'=>$image_name,'imagable_id'=>$product->id,'imagable_type'=>get_class($product)
        //     ]);
        // }
       
        // return redirect('product_list');




        $data = array();
        $data['product_name'] = $request->product_name;
        $data['technis'] = $request->technis;
        $data['color'] = $request->color;
        $data['design'] = $request->design;
        $data['detail'] = $request->detail;
      

        $image = $request->file('image');
        if ($image) {
            $image_name = date('mdYHis');
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name.".".$ext;
            $upload_url = 'images/';
            $image_url = $upload_url.$image_full_name;
            $isUploaded = $image->move($upload_url,$image_full_name);
            if ($isUploaded) {
                $data['image']=$image_url;
            }else
            {
                $data['image']=null;
            }
    }
    DB::table('products')->insert($data);

        return redirect('product_list');
}




     //  show products
    function product_list()
    {
        // products variable is optional name
        $products = Product::paginate(10);

        return view('Admin_pages/product_list', compact('products'));
    	// products parameter in compate method should carry an array of info to product list and we will take it on that page
    }



     //  Delete a product
    function product_delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        Session::flash('success', "product deleted!");
        return redirect('product_list');
    }





     //  Edit a product
    function product_edit($id)
    {
        $product = product::find($id);
        return view('Admin_pages/product_edit', compact('product'));
    }




     //  Update a product
    function product_update(Request $request, $id)
    {
       
    $product = Product::find($id);
    $product->product_name = $request->product_name;
    $product->technis = $request->technis;
         $product->color = $request->color;
    $product->design = $request->design;
    // $product->image = $request->image;
    $product->detail = $request->detail;
    $product->save();
    Session::flash('success',"product updated");
    return redirect('product_list');
}
}
