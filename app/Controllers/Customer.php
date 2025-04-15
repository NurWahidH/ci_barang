<?php namespace App\Controllers;

use App\Models\Customer_model;

class Customer extends BaseController
{
    public function index()
    {
        $model = new Customer_model();
        $data['title'] = 'Data Customer';
        $data['customers'] = $model->findAll();

        echo view('header_view', $data);
        echo view('customer_view', $data);
        echo view('footer_view');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Customer';
        echo view('header_view', $data);
        echo view('tambah_customer_view');
        echo view('footer_view');
    }

    public function add()
    {
        $model = new Customer_model();
        $model->insert($this->request->getPost());
        return redirect()->to('/customer');
    }

    public function edit($id)
    {
        $model = new Customer_model();
        $data['title'] = 'Edit Customer';
        $data['customer'] = $model->find($id);

        echo view('header_view', $data);
        echo view('edit_customer_view', $data);
        echo view('footer_view');
    }

    public function update()
    {
        $model = new Customer_model();
        $id = $this->request->getPost('customerid');
        $model->update($id, $this->request->getPost());
        return redirect()->to('/customer');
    }

    public function hapus($id)
    {
        $model = new Customer_model();
        $model->delete($id);
        return redirect()->to('/customer');
    }
}
