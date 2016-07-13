<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\ProductRequest;
use App\ProductModel;
use App\OrderModel;
use App\CategoryModel;
use File;
use Session;

class ProductController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    }   

    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = ProductModel::with(['category'])->get();
        
        return view('admin.product.index', ['products' => $product]);     
    }

    /**
     * Show the form for creating a new product.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = CategoryModel::where('status', 1)->lists('category_name', 'id')->toArray();
        
        return view('admin.product.create', ['category' => $category]);
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        $extension = $data['image']->getClientOriginalExtension(); 
        $fileName = $data['product_name'].'.'.$extension;
        $data['image'] = $fileName;

        $data['slug'] = str_slug($request->input('product_name'), "-");
       
        $product = new ProductModel($data);

        if($product->save() && $request->image->move($this->image_path, $fileName))
        {
            Session::flash('success','product successfully Added.');
            return redirect()->to('admin/product/'. $data['slug'] .'/edit');
        }
        else
        {
            return redirect()->back()->withErrors('Something went wrong, please try again!')->withInput();
        }
    }

    /**
     * Show the form for editing the specified product.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $category = CategoryModel::where('status', 1)->lists('category_name', 'id')->toArray();
        $product = ProductModel::where('slug', $slug)->first();
        
        if($product)
        {
            return view('admin.product.edit', ['product' => $product, 'category' => $category]);
        }
        else
        {
            abort(404);
        }
    }

    /**
     * Update the specified product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        $product = ProductModel::find($id);
        if($product)
        {
            if(isset($request->image))
            {
                $extension = $data['image']->getClientOriginalExtension(); 
                $fileName = $data['product_name'].'.'.$extension;
                $data['image'] = $fileName;
            }
            $data['slug'] = str_slug($request->input('product_name'), "-");
        
            if($product->update($data))
            {
                if(isset($request->image))
                {
                    File::delete($this->image_path.'/'.$product->image);
                    $result = $request->image->move($this->image_path, $fileName);
                    if($result)
                    {
                        Session::flash('success','product successfully updated.');
                        return redirect()->to('admin/product/'. $data['slug'] .'/edit');
                    }
                    else 
                    {
                        return redirect()->back()->withErrors('Image can not be uploaded, please try again!')->withInput();
                    }
                } 
                else 
                {
                    Session::flash('success','product successfully updated.');
                    return redirect()->to('admin/product/'. $data['slug'] .'/edit');
                }
            }
            else
            {
                return redirect()->back()->withErrors('Something went wrong, please try again!')->withInput();
            }
        }
        else
        {
            abort(404);
        }
    }

    /**
     * Remove the specified product from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = ProductModel::find($id);
        if($product)
        {
            $order = ProductModel::where('id', $id)->with('order', 'cart')->first();
            if(count($order->order) == 0 && count($order->cart) == 0)
            {
                $path  = $this->image_path.'/'.$product->image;
                $result = File::delete($path);
                if($result){
                    if($product->delete($id))
                    {
                        Session::flash('success','product successfully deleted.');
                        return redirect()->to('admin/product');
                    }
                }
            }
            else 
            {
                return redirect()->back()->withErrors('Sorry you can not delete this product,Product is available in orders or cart.')->withInput();
            }
            return redirect()->back()->withErrors('Something went wrong, please try again!')->withInput();
        }
        else
        {
            abort(404);
        }
    }
}
