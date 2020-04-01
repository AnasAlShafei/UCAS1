<?php

namespace App\Repositories;

use Illuminate\Http\Request;

interface ProductsInterface
{
    /**
     * function Get All Products
     *
     * @return void
     */
    public function getProducts();
    /**
     *  function Show Product
     *
     * @param [type] $id
     * @return void
     */
    public function getProductByUserId($id);
    /**

     *  function Create Product
     *
     * @return void
     */
    public function createProduct();

    /**
     * function Show Product By ID
     *
     * @param [type] $id
     * @return void
     */
    public function showProductById($id);
    /**
     * function  Store New Product
     *
     * @param Request $request
     * @return void
     */
    public function storeNewProduct(Request $request);
    /**
     * function Update Product
     *
     * @param Request $request
     * @param [type] $id
     * @return void
     */
    public function updateProdoct(Request $request, $id);

    /**
     * function to Delete Product
     *
     * @param [type] $id
     * @return void
     */
    public function deleteProductWithId($id);

    /**
     *  function Edit Product to show data
     *
     * @param int $id
     * @return void
     */
    public function editProductbyId($id);


    //               /API/                  //
    /***
     * Show Products To User with Auth
     */
    public function ApiShowProducts();
    /**
     *  function Store NEW Product
     *
     * @param Request $request
     * @return string
     */
    public function ApiStoreProduct(Request $request);
    /**
     * function To show product by id
     *
     * @param int $id
     * @return String
     */
    public function ApiShowProductById($id);
    /**
     * delete Product
     *
     * @param int $id
     * @return void
     */
    public function ApiDeleteProduct($id);

    /**
     * Show Product For Admin
     *
     * @return void
     */
    public function ApiShowProductsForAdmin();
    /**
     * Show product with User_id in \App\products
     *
     * @param Type $var
     * @return void
     */
    public function ApiShowProductsForEditor();


    //Home Work // Api // CRUD #4 //

    /**
     * Show only trashed
     *
     * @return \Illuminate\Http\Response
     */
    public function ApiGetTrashedProducts();
    /**
     * Restore product
     *
     * @param int $id
     * @return void
     */
    public function ApiRestoreProduct($id);

    /**
     * Force Delete Product ...
     *
     * @param int $id
     * @return void
     */
    public function ApiForceDeleteProduct($id);
    /**
     * Soft Deelte To product
     *
     * @param [type] $id
     * @return void
     */
    public function ApiSoftDeleteProduct($id);
}
