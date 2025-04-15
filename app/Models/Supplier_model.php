<?php namespace App\Models;

use CodeIgniter\Model;

class Supplier_model extends Model
{
    protected $table = 'suppliers';
    protected $primaryKey = 'supplierid';
    protected $allowedFields = ['companyname', 'address', 'phone'];
}
