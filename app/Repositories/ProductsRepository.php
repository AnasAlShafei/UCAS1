<?php


namespace App\Repositories;


use App\products;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductsRepository implements ProductsInterface
{
    /**
     * function Get All Products
     *
     * @return data
     */
    public function getProducts()
    {
        //
        $products = products::all();
        return view('control.products.index', compact('products'));
    }
    /**
     *  function Show Product
     *
     * @param int $id
     * @return void
     */
    public function getProductByUserId($id)
    {
        $product = products::where('user_id', $id)->get();
        return view('control.products.byUserId', compact('product'));;
    }
    /**
     *  function Create Product
     *
     * @return void
     */
    public function createProduct()
    {
        //
        $products = products::all();
        return view('control.products.create', compact('products'));
    }

    /**
     * function Show Product By ID
     *
     * @param int $id
     * @return void
     */
    public function showProductById($id)
    {
        //
        $product = products::find($id);
        return view('control.products.show', compact('product'));;
    }

    /**
     * function  Store New Product
     *
     * @param Request $request
     * @return void
     */
    public function storeNewProduct(Request $request)
    {
        //
        // request()->validate([
        //     'image'  => 'mimes:jpg,jpeg,png,gif|max:2048',
        // ]);

        // if ($files = $request->file('image')) {

        //     $destinationPath = public_path() . "/images/";
        //     $imgfile = date('YmdHis') . "." . $files->getClientOriginalExtension();
        //     $files->move($destinationPath, $imgfile);
        // } else {
        //     $imgfile = "NULL";
        // }
        $product = [
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'body' => $request->body,
            // 'image' => $imgfile,
        ];
        products::create($product);
        return redirect('products/products');
    }
    /**
     * function Update Product
     *
     * @param Request $request
     * @param int $id
     * @return void
     */
    public function updateProdoct(Request $request, $id)
    {
        //
        request()->validate([
            'img'  => 'mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        if ($files = $request->file('image')) {

            $destinationPath = public_path() . "/images/";
            $imgfile = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $imgfile);
        } else {
            $imgfile = "NULL";
        }

        $product = [
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'body' => $request->body,
            'image' => $imgfile,
        ];
        products::where('id', $id)->update($product);
        return redirect('products/products');
    }
    /**
     * function to Delete Product
     *
     * @param int $id
     * @return void
     */
    public function deleteProductWithId($id)
    {
        $product = products::find($id);
        $product->delete($id);
        return redirect('/products/products');
    }

    /**
     *  function Edit Product to show data
     *
     * @param int $id
     * @return void
     */
    public function editProductbyId($id)
    {
        //
        $product = products::find($id);
        return view('control.products.edit', compact('product'));;
    }


    //                   /  API /                   /

    /***
     * Show Products To User with Auth
     */
    public function ApiShowProducts()
    {
        if (Auth::user()->role_id == 1) {
            $products = products::all();
            return Response()->json($products);
        }
        if (Auth::user()->role_id == 2) {
            $products = products::where('user_id', Auth::user()->id)->get();
            return Response()->json($products);
        }
    }

    /**
     *  function Store NEW Product
     *
     * @param Request $request
     * @return string
     */
    public function ApiStoreProduct(Request $request)
    {
        $product = [
            'title' => $request->title,
            'user_id' => Auth::user()->id,
            'body' => $request->body,
        ];
        products::create($product);
        return Response()->json('Sucess add Products');
    }

    /**
     * function To show product by id
     *
     * @param int $id
     * @return String
     */
    public function ApiShowProductById($id)
    {
        $product = products::find($id);
        return response()->json($product);
    }

    /**
     * delete Product
     *
     * @param int $id
     * @return void
     */
    public function ApiDeleteProduct($id)
    {
        $product = products::find($id);
        $product->delete($id);
        return response()->json($product);
    }

    /**
     * Show Product For Admin
     *
     * @return void
     */
    public function ApiShowProductsForAdmin()
    {
        # code...
        $products = products::all();
        return Response()->json($products);
    }

    /**
     * Show product with User_id in \App\products
     *
     * @param Type $var
     * @return void
     */
    public function ApiShowProductsForEditor()
    {
        $products = products::where('user_id', Auth::user()->id)->get();
        return Response()->json($products);
    }
}
