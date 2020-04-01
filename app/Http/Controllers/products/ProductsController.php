<?php

namespace App\Http\Controllers\products;

use App\Http\Controllers\Controller;
use App\Repositories\ProductsInterface;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    protected $products;
    public function __construct(ProductsInterface $products)
    {
        $this->products = $products;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return $this->products->getProducts();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return $this->products->createProduct();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        return $this->products->storeNewProduct($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->products->showProductById($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return $this->products->editProductbyId($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return $this->products->updateProdoct($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return $this->products->deleteProductWithId($id);
    }
    /**
     * Undocumented function
     *
     * @param int $id
     * @return void
     */
    public function productsUserId($id)
    {
        return $this->products->getProductByUserId($id);
    }


    //            / Api /              //
    /***
     * Show Products To User with Auth
     */
    public function ApiShowProducts()
    {
        return $this->products->ApiShowProducts();
    }
    /**
     *  function Store NEW Product
     *
     * @param Request $request
     * @return string
     */
    public function ApiStoreProduct(Request $request)
    {
        return $this->products->ApiStoreProduct($request);
    }
    /**
     * function To show product by id
     *
     * @param int $id
     * @return String
     */
    public function ApiShowProductById($id)
    {
        return $this->products->ApiShowProductById($id);
    }

    /**
     * delete Product
     *
     * @param int $id
     * @return void
     */
    public function ApiDeleteProduct($id)
    {
        $this->products->ApiDeleteProduct($id);
    }

    /**
     * Show Product For Admin
     *
     * @return void
     */
    public function ApiShowProductsForAdmin()
    {
        return $this->products->ApiShowProductsForAdmin();
    }
    /**
     * Show product with User_id in \App\products
     *
     * @param Type $var
     * @return void
     */
    public function ApiShowProductsForEditor()
    {
        return $this->products->ApiShowProductsForEditor();
    }



    //Home Work // Api // CRUD #4 //

    /**
     * Show only trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function ApiGetTrashedProducts()
    {
        return $this->products->ApiGetTrashedProducts();
    }
    /**
     * Restore product
     *
     * @param int $id
     * @return void
     */
    public function ApiRestoreProduct($id)
    {
        return $this->products->ApiRestoreProduct($id);
    }

    /**
     * Force Delete Product ...
     *
     * @param int $id
     * @return void
     */
    public function ApiForceDeleteProduct($id)
    {
        return $this->products->ApiForceDeleteProduct($id);
    }
    /**
     * Soft Deelte To product
     *
     * @param [type] $id
     * @return void
     */
    public function ApiSoftDeleteProduct($id)
    {
        return $this->products->ApiSoftDeleteProduct($id);
    }
}
