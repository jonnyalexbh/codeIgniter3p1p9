<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    /**
     * index
     *
     */
    public function index()
    {
        $data['page_title'] = 'Your title products';

        $this->load->view('products/index', $data);
    }

    /**
     * create
     *
     */
    public function create()
    {
        echo "create product";
    }

    /**
     * store
     *
     */
    public function store()
    {
        echo "store product";
    }

    /**
     * show
     *
     */
    public function show($id)
    {
        echo "show product {$id}";
    }

    /**
     * edit
     *
     */
    public function edit($id)
    {
        echo "edit product {$id}";
    }

    /**
     * update
     *
     */
    public function update($id)
    {
        echo "update product {$id}";
    }

    /**
     * destroy
     *
     */
    public function destroy($id)
    {
        echo "destroy product {$id}";
    }
}
