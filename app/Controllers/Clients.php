<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\ClientsModel;

class Clients extends Controller
{
	public function index()
	{
        $clients = new ClientsModel;

        $data = [
            'title' => 'Lista de Clientes',
            'clients' => $clients -> getClients()
        ];

        echo view('templates/header');
		echo view('clients/list', $data);
		echo view('templates/footer');
    
    }
    
    public function details($id = null)
    {

        $clients = new ClientsModel;
        $data = [
            'title' => 'Detalhes do Cliente',
            'client' => $clients -> getClients($id)
        ];

        echo view('templates/header');
		echo view('clients/details', $data);
		echo view('templates/footer');
    }
	
}
