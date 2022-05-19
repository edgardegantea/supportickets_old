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

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $category = new CategoryModel();

        $data = [
            'categoria'  => $category->where('id', $id)->first(),
            'title'   => 'Información de la categoría seleccionada'
        ];
        return view('categorias/show', $data);
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
