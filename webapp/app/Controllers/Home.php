<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['titulo'] = 'pagina principal';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/principal');
        echo view('front/footer_view');
    }
    public function quienes_somos()
    {
        $data['titulo'] = 'Quienes somos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/quienes_somos');
        echo view('front/footer_view');
    }
    public function acerca_de()
    {
        $data['titulo'] = 'Acerca de';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/acerca_de');
        echo view('front/footer_view');
    }
    public function agregar_producto()
    {
        $data['titulo'] = 'Agregar Producto';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/producto/registro');
        echo view('front/footer_view');
    }
    public function consultar_producto()
    {
        $data['titulo'] = 'Productos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/producto/productos');
        echo view('front/footer_view');
    }
     public function consultar_producto2()
    {
        $data['titulo'] = 'Productos';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/producto/productos2');
        echo view('front/footer_view');
    }
    public function registro()
    {
        $data['titulo'] = 'Registro';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
    }
    public function login()
    {
        $data['titulo'] = 'Login';
        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }
}