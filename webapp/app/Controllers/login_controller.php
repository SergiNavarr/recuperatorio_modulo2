<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuario_model;

class login_controller extends BaseController
{
	public function index(){
		helper(['form', 'url']);

		$data['titulo'] = 'login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
	}

	public function auth(){
		$session = session();
		$model = new usuario_model();

		$email = $this->request->getvar('email');
		$password = $this->request->getvar('pass');

		$data = $model->where('email', $email)->first();
		if($data){
				$pass = $data['pass'];
				$ba = $data['baja'];
				if($ba == 'SI'){
					$session->setFlashdata('msg','Usuario dado de baja');
					return redirect()->to('/login');
				}

				$verify_pass = password_verify($password, $pass);
				
				if($verify_pass){
					$ses_data =[
						'id_usuario' => $data['id_usuario'],
						'nombre' => $data['nombre'],
						'apellido' => $data['apellido'],
						'email' => $data['email'],
						'usuario' => $data['usuario'],
						'perfil_id' => $data['perfil_id'],
						'logged_in' => TRUE
					];

					$session->set($ses_data);

					session()->setFlashdata('msg', 'Bienvenido!!');
					return redirect()->to('/panel');
				}else{
					session()->setFlashdata('msg', 'Contraseña incorrecta!');
					return redirect()->to('/panel');
				}
		}else{
			session()->setFlashdata('msg', 'No existe el email o es incorrecto!');
					return redirect()->to('/login');
		}
	}

	public function logout(){
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}
}