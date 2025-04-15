<?php namespace App\Controllers;

use App\Models\Supplier_model;

class Supplier extends BaseController
{
    public function index()
    {
        $model = new Supplier_model();
        $data['title'] = 'Data Supplier';
        $data['suppliers'] = $model->findAll();

        echo view('header_view', $data);
        echo view('supplier_view', $data);
        echo view('footer_view');
    }

    public function tambah()
    {
        $data['title'] = 'Tambah Supplier';
        echo view('header_view', $data);
        echo view('tambah_supplier_view');
        echo view('footer_view');
    }

    public function add()
    {
        $model = new Supplier_model();
        $model->insert($this->request->getPost());
        return redirect()->to('/supplier');
    }

    public function edit($id)
    {
        $model = new Supplier_model();
        $data['title'] = 'Edit Supplier';
        $data['supplier'] = $model->find($id);

        echo view('header_view', $data);
        echo view('edit_supplier_view', $data);
        echo view('footer_view');
    }

    public function update()
    {
        $model = new Supplier_model();
        $id = $this->request->getPost('supplierid');
        $model->update($id, $this->request->getPost());
        return redirect()->to('/supplier');
    }

    public function hapus($id)
    {
        $model = new Supplier_model();
        $model->delete($id);
        return redirect()->to('/supplier');
    }
}
