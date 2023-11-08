<?php
namespace App\Controllers;
use App\Models\usuario_model;
use CodeIgniter\Controller;

class usuario_controller extends BaseController
{
	public function __construct(){
		helper (['form', 'url']);
	}
	public function create(){
		$dato['titulo'] = 'registro';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
	}
	public function formValidation(){
		$input = $this->validate([
			'nombre' => 'required|min_length[3]',
			'apellido' => 'required|min_length[3]|max_length[25]',
			'usuario' => 'required|min_length[3]',
			'email' => 'required|min_length[4]|max_length[100]|valid_email|is_unique[usuarios.email]',
			'pass' => 'required|min_length[3]|max_length[10]',
		],
	);
		$formModel = new usuario_model();

		if (!$input) {
			$dato['titulo'] = 'registro';
        	echo view('front/head_view', $dato);
        	echo view('front/navbar_view');
        	echo view('back/usuario/registro', ['validation' => $this->validator]);
       		echo view('front/footer_view');
		} else{
			$formModel->save([
				'nombre' => $this->request->getvar('nombre'),
				'apellido' => $this->request->getvar('apellido'),
				'usuario' => $this->request->getvar('usuario'),
				'email' => $this->request->getvar('email'),
				'pass' => password_hash($this->request->getvar('pass'), PASSWORD_DEFAULT),
			]);
			session()->setFlashdata('success', 'Usuario registrado con exito');
			return redirect()->to(base_url('registro'));
		}
	}
}