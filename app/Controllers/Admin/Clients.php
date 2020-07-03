<?php 
namespace App\Controllers\Admin;
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

        echo view('admin/templates/header');
		echo view('admin/clients/list', $data);
		echo view('admin/templates/footer');
    
    }
    
    public function details($id = null)
    {

        $clients = new ClientsModel;
        $data = [
            'title' => 'Detalhes do Cliente',
            'client' => $clients -> getClients($id)
        ];

        echo view('admin/templates/header');
		echo view('admin/clients/details', $data);
		echo view('admin/templates/footer');
    }

    public function insert()
    {
        echo view('admin/templates/header');
		echo view('admin/clients/insert');
		echo view('admin/templates/footer');
    }

    public function update($id)
    {
        $clients = new ClientsModel();

        $data = [
            'client' => $clients->getClients($id)
        ];

        echo view('admin/templates/header');
		echo view('admin/clients/update', $data);
		echo view('admin/templates/footer');
    }
    

    public function insertAction()
    {
        $clients = new ClientsModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address')
        ];

        $clients->insert($data);

        return redirect()->to(base_url('admin/clients'));

    }

    public function updateAction($id)
    {
        $clients = new ClientsModel();

        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'phone' => $this->request->getVar('phone'),
            'address' => $this->request->getVar('address')
        ];

        $clients->update($id, $data);

        return redirect()->to(base_url('admin/clients'));

    }

    public function delete($id)
    {
        $clients = new ClientsModel();
        $clients->delete($id);
        return redirect()->to(base_url('admin/clients'));

    }
    
    public function search()
    {
        $clients = new ClientsModel;
        $keyword = $this->request->getVar('keyword');

        $data = [
            'title' => 'Lista de Clientes',
            'clients' => $clients->search($keyword)
        ];

        echo view('admin/templates/header');
		echo view('admin/clients/list', $data);
        echo view('admin/templates/footer');
 
    }
}
