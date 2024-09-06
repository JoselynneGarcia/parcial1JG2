<?php
namespace App\Controllers;

use App\Models\Productosmodel;
use CodeIgniter\Controller;


class Producto extends BaseController
{
    public function index()
    {
        $model = new Productosmodel();
        $data['productos']= $model->findAll();
        return view('productos/index', $data);
    }

    public function create()
    {
        $model= new Productosmodel();
        $data['productos']=$model->findAll();
        return view('productos/create',$data);

    }

    public function store()
    {
        $model = new ProductosModel();

        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'cantidad_existencia' => $this->request->getPost('cantidad_existencia'),
            'fecha_vencimiento' => $this->request->getPost('fecha_vencimiento'),
            'tipo_producto_id' => $this->request->getPost('tipo_producto_id'),
        ];
        
        $model->insert($data);

        return redirect()->to(site_url('productos'));
    }

    public function edit($producto_id)
    {
        $model = new Productosmodel();
        $data['producto'] = $model->find($producto_id);
    
        return view('productos/edit', $data);
    }
 
    public function update()
    {
        $model = new Productosmodel();
        
        $data = [
            'producto_id' => $this->request->getPost('producto_id'),
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            'cantidad_existencia' => $this->request->getPost('cantidad_existencia'),
            'fecha_vencimiento' => $this->request->getPost('fecha_vencimiento'),
            'tipo_producto_id' => $this->request->getPost('tipo_producto_id'),
        ];
        $model->save($data);
    
        return redirect()->to('/productos');
    }

    public function delete($producto_id)
    {
        $model = new ProductosModel();
        $model->delete($producto_id);
        
        return redirect()->to('/productos');
    }

}

?>