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
     * function Get All Products
     *
     * @return void
     */
    public function getAllProducts();
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
}
