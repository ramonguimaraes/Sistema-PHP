<?php 
namespace App\Controllers\Api;
use CodeIgniter\RESTful\ResourceController;

class Clients extends ResourceController
{
    protected $modelName = 'App\Models\ClientsModel';
    protected $format    = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
}
