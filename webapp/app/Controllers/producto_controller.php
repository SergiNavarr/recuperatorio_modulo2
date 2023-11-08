<?php
namespace App\Controllers;
use App\Models\producto_model;
use CodeIgniter\Controller;

class producto_controller extends BaseController
{
	public function __construct(){
		helper (['form', 'url']);
	}
	public function create(){
		$dato['titulo'] = 'registro';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/producto/registro');
        echo view('front/footer_view');
	}
	public function formValidation(){
		$input = $this->validate([
			'nombre' => 'required|min_length[3]',
			'precio' => 'required|min_length[1]|max_length[7]',
			'sucursal_id' => 'required|max_length[2]',
			'stock' => 'required|max_length[3]',
		],
	);
		$formModel = new producto_model();

		if (!$input) {
			$dato['titulo'] = 'Agregar Producto';
        	echo view('front/head_view', $dato);
        	echo view('front/navbar_view');
        	echo view('back/producto/registro', ['validation' => $this->validator]);
       		echo view('front/footer_view');
		} else{
			$formModel->save([
				'nombre' => $this->request->getvar('nombre'),
				'precio' => $this->request->getvar('precio'),
				'sucursal_id' => $this->request->getvar('sucursal_id'),
				'stock' => $this->request->getvar('stock'),
			]);
			session()->setFlashdata('success', 'Producto ingresado con exito');
			return redirect()->to(base_url('agregar_producto'));
		}
	}
}