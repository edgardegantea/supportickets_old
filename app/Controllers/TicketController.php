<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Ticket;
use App\Models\StatusModel;
use App\Models\PriorityModel;


class TicketController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

    public function __construct()
    {
        $db = db_connect();
    }


    public function index()
    {
        
        $tickets = new Ticket();

        
        /*
        $data = [
            'title'     => 'Tickets de soporte',
            'status'    => 
            'tickets'   => $tickets->orderBy('id', 'desc')->findAll()
        ];

        return view('tickets/index', $data);
        */
        $db = \Config\Database::connect();
        
        /*
        $query   = $db->query('SELECT t.title as asunto, t.description as descripcion, s.name as estado, p.name as prioridad 
            FROM tickets as t 
            join priorities as p 
                on t.priority = p.id
            join status as s
                on t.status = s.id'
            );
        */

        /*
        $builder = $db->table('tickets');
        $builder->select('tickets.title', 'status.name', 'priorities.name');
        $builder->join('status', 'tickets.status = status.id');
        $builder->join('priorities', 'tickets.priority = priorities.id');
        $data = $builder->get();
        */

        

        $total = $db->table('tickets')->countAll();
        
        $tickets = model('Ticket');

        $builder = $db->table('status');
        $builder->join('tickets', 'tickets.status=status.id');
        $status = $builder->where('status.id', 'ASC')->get();

        $data = [
            'title'     => 'Otro',
            'total'     => $total,
            'status'   => $status,
            'tickets'   => $tickets->findAll(),
        ];

        return view('tickets/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        return view('tickets/show');
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $categories = model('CategoryModel');
        $priorities = model('PriorityModel');
        $status = model('StatusModel');
        $data = [
            'title'         => 'Nuevo ticket de soporte',
            'status'        => $status->findAll(),
            'priorities'    => $priorities->findAll(),
            'categories'    => $categories->findAll(),
        ];
        return view('tickets/new', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $ticket = model(Ticket::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'title' => 'required|min_length[3]|max_length[150]',
            'description'  => 'required',
        ])) {
            $ticket->save([
                'title'         => $this->request->getPost('title'),
                'slug'          => url_title($this->request->getPost('title'), '-', true),
                'description'   => $this->request->getPost('description'),
                'evidence'      => url_title($this->request->getPost('title'), '-', true),
            ]);

            echo view('tickets/');
        } else {
            return redirect->route('tickets/new');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        return view('tickets/edit');
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

    public function table()
    {
        $ticket = new Ticket();
        $data = [
            'title'     => 'Tickets en modo tabular',
            'tickets'   => $ticket->orderBy('id', 'desc')->findAll()
        ];

        return view('tickets/table', $data);

    }
}
