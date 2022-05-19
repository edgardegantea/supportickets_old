<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use CodeIgniter\RESTful\ResourceController;

class CategoriaController extends ResourceController
{

    public function index()
    {
        $db = \Config\Database::connect();
        $total = $db->table('categories')->countAll();
        $category = model(CategoryModel::class);

        $data = [
            'total'         => $total,
            'title'         => 'Categorías',
            'categorias'    => $category->orderBy('name', 'ASC')->findAll()
        ];

        return view('categorias/index', $data);
    }


    public function show($id = null)
    {
        $category = new CategoryModel();

        $data = [
            'categoria'  => $category->where('id', $id)->first(),
            'title'   => 'Información de la categoría seleccionada'
        ];
        return view('categorias/show', $data);
    }


    public function new()
    {
        return view('categorias/new');
    }


    public function create()
    {
        return view('categorias/create');
    }


    public function edit($id = null)
    {
        return view('categorias/edit');
    }


    public function update($id = null)
    {
        //
    }


    public function delete($id = null)
    {

    }
}
