<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');


class ProdController extends Controller
{
    public function __construct() 
{
parent:: __construct();
$this->call->model('ProdModel');
}

public function userProduct(){
    $data = $this->ProdModel->select_all();
    $this->call->view('show', $data);
}
    //FIRST ADDED
    public function index() 
    {
        $this->call->model('ProdModel');
        $data['info'] = $this->ProdModel->select_all();
        return $this->call->view('ProductRecords',$data);
    }
    
    //connection for add form
    public function add_prod() 
    {
        $this->call->model('ProdModel');
        $data['info'] = $this->ProdModel->select_all();
        return $this->call->view('add_prod', $data);
    }

    public function add()
    {
        $prodname = $this->io->post('prodname');
        $description = $this->io->post('description');
        $price = $this->io->post('price');
        $stocks = $this->io->post('stocks');

        $bind = array(
            "prodname" => $prodname,
            "description" => $description,
            "price" => $price,
            "stocks" => $stocks
        );

        $this->db->table('prod')->insert($bind);

        redirect('/ProductRecords'); 
    }


}
