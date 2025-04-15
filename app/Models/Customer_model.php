<?php namespace App\Models;

use CodeIgniter\Model;

class Customer_model extends Model
{
    protected $table = 'customer';
    protected $primaryKey = 'customerid';
    protected $allowedFields = ['companyname', 'address', 'phone'];
}
