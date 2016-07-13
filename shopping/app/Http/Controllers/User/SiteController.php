<?php
namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\ProductModel;
use App\CategoryModel;
use App\Http\Requests;
use App\Http\Controllers\BaseController;

class SiteController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    } 

    public function index()
    {
    	$nacklaces = ProductModel:: where(['category_id' => '2', 'status' => 1])->get();
    	$products =  ProductModel:: where('status', 1)->orderBy('id', 'desc')->take(12)->get();
    	
		return view('client.home', ['nacklaces' => $nacklaces, 'products' => $products]);
    }

    //Display product list to user
    public function products()
    {
        $categories = CategoryModel:: where('status', 1)->get();
        $products = ProductModel:: where('status', 1)->paginate($this->par_page);
        
        return view('client.product.products', ['products' => $products, 'category' => $categories]);
    }
    //Display product list on load more 
    public function product_list(Request $request)
    {
        sleep(1);
        $skip = $request->page * $this->par_page;
        $products = ProductModel:: where('status', 1)->skip($skip)->take($this->par_page)->get();
        
        $returnHTML = view('client.product.list_product')->with('products', $products)->render();
        return response()->json([
            'success' => true, 
            'html'=>$returnHTML
        ]);
    }

    //Display product list to user
    public function category($slug = null)
    {
		$categories = CategoryModel::where('status', 1)->get();
		$products = CategoryModel::where('slug', $slug)->with(['product'=> function($query){
                $query->where('status', 1);
        }])->first();
        if($products)
        {
            $products = $products->toArray();
            $links = ceil(count($products['product']) / $this->par_page) ;
            $product = array_slice($products['product'], 0, $this->par_page);

            return view('client.product.category_product', ['products' => $product, 'category' => $categories, 'links' => $links]);
        }else
        {
            abort(404);
        }
    }

    //Display product list on load more 
    public function category_list(Request $request, $slug)
    {
        $skip = $request->page * $this->par_page;
        $products = CategoryModel::where('slug', $slug)->with(['product'=> function($query) use($skip){
                $query->where('status', 1)->skip($skip)->take($this->par_page);
        }])->first();
        if($products)
        {
            $returnHTML = view('client.product.list_product')->with('products', $products['product'])->render();
            return response()->json([
                'success' => true, 
                'html'=>$returnHTML
            ]);
        } else
        {
            abort(404);
        }
    }

    //Display product details
    public function product($slug)
    {
    	$product =  ProductModel:: where('slug', $slug)->where('status', 1)->first();
    	if($product)
        {
            return view('client.product.product_details', ['product' => $product]);
        }
        else
        {
            abort(404);
        }
    }

    //Display registration page
    public function register()
    {
		return view('client.registration');
    }
}
