<?php

class ProductController
{

    public function index()
    {

        $db = new product();
        $data['products'] = $db->getAllProducts();
        View::load('Product/index', $data);
    }
    public function add()
    {
        View::load('product/add');
    }
    public function store()
    {
        //View::load('product/store');
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];

            $data = array(
                "id" => $id,
                "name" => $name,
                "price" => $price,
                "description" => $description,
                "qty" => $qty
            );
            $db = new product();

            if ($db->insertProduct($data)) {
                View::load('product/add', ["success" => "Data Inserted successfuly."]);
            } else {
                View::load('product/add');
            }
        }
    }
    public function delete($id)
    {
        $db = new product();
        if ($db->deleteProduct($id)) {
            View::load('product/delete', ["success" => "Data deleted successfuly."]);
        } else {
            View::load('product/delete');
        }
    }

    public function edit($id)
    {

        $db = new product();
        $row = $db->selectOneRow($id);
        $data["row"] = $row;
        if ($row) {
            View::load('product/edit', $data);
        } else {
            echo "error";
        }
    }

    public function update($id)
    {
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $qty = $_POST['qty'];

            $data = array(
                "id" => $id,
                "name" => $name,
                "price" => $price,
                "description" => $description,
                "qty" => $qty
            );
            $db = new product();

            if ($db->updateProduct($id, $data)) {
                View::load('product/edit', ["success" => "Data updated successfuly.",'row' => $db->selectOneRow($id)]);
            } else {
                View::load('product/edit',['row' => $db->selectOneRow($id)]);
            }
        }
    }
}
