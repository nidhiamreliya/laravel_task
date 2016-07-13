<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\BaseController;
use App\Http\Requests\Admin\CategoryRequest;
use App\CategoryModel;

use Session;

class CategoryController extends BaseController
{
    public function __construct() 
    {
        parent::__construct();
    } 

    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = CategoryModel::all();

        return view('admin.category.index', ['categories' => $category]);   
    }

    /**
     * Show the product for category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        $product = CategoryModel::where('slug', $category)->with(['product'])->first();
        return view('admin.category.products', ['products' => $product]);
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = str_slug($request->input('category_name'), "-");
       
        $category = new CategoryModel($data);

        if($category->save())
        {
            Session::flash('success','Category successfully Added.');
            return redirect()->to('admin/category');
        }
        else
        {
            return redirect()->back()->withErrors('Something went wrong, please try again!')->withInput();
        }
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CategoryModel::where('slug', $id)->first();
        
        if($category)
        {
            return view('admin.category.edit', ['category' => $category]);
        }
        else
        {
            abort(404);
        }
    }

    /**
     * Update the specified category in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str_slug($request->input('category_name'), "-");
        $category = CategoryModel::find($id);

        if($category)
        {
            if($category->update($data))
            {
                CategoryModel::find($id)->product()->update(['status' => $data['status']]);
                Session::flash('success','Category successfully updated.');
                return redirect()->to('admin/category');
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
     * Remove the specified category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = CategoryModel::find($id);
        
        if($category)
        {
            $product = CategoryModel::find($id)->product;
            if($product->count() == 0)
            {
                if($category->delete($id))
                {
                    Session::flash('success','Category successfully deleted.');
                    return redirect()->to('admin/category');
                }
                else
                {
                    return redirect()->back()->withErrors('Something went wrong, please try again!')->withInput();
                }
            }
            else 
            {
                return redirect()->back()->withErrors('Sorry you can not delete this category, delete all related products first.')->withInput();
            }
        }
        else
        {
            abort(404);
        }
    }
}
