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

     private $db;

    public function __construct()
    {
        $db = db_connect();
        $this->db = db_connect();
        $pager = \Config\Services::pager();
    }


    public function index()
    {
        $tickets = new Ticket();
        $db = \Config\Database::connect();
        $total = $db->table('tickets')->countAll();
        $tickets = model('Ticket');

        $builder = $db->table('status');
        $builder->join('tickets', 'tickets.status=status.id');
        $status = $builder->where('status.id', 'ASC')->get();

        $data = [
            'title'     => 'Otro',
            'total'     => $total,
            'status'    => $status,
            // 'tickets'   => $tickets->findAll(),
            'tickets'   => $tickets->orderBy('status', 'ASC')->findAll()
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
        $db = db_connect();
        $ticket = new Ticket();

        // $statusModel = new StatusModel();
        // $builder = $this->statusModel->select('name');
        // $builder->join('status', 'status.id = tickets.status');
        // $estado   = $builder->get();


        $builder = $this->db->table("status as s");
        $builder->select('s.name');
        $builder->join('tickets as t', 's.id = t.status');
        $st = $builder->get()->getResult();

        $data = [
          'ticket'  => $ticket->where('id', $id)->first(),
          // 'status'  => $this->db->select('status.name')->from('status')->join('tickets', 'tickets.status = status.id')->get(),
          // 'status'  => $db->query('select * from status inner join tickets on status.id = tickets.status'),
          'status'  => $st,
          'title'   => "Información del ticket de soporte seleccionado"
        ];
        return view('tickets/show', $data);
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
            'tickets'   => $ticket->orderBy('status', 'ASC')->findAll()
        ];

        return view('tickets/table', $data);
    }

    public function tableStatusO1()
    {
        $ticket = new Ticket();
        $data = [
            'title'     => 'Todos los tickets de soporte',
            'tickets'   => $ticket->where('status', 's01')->findAll()
        ];

        return view('tickets/tableS01', $data);
    }

    public function tableStatusO2()
    {
        $ticket = new Ticket();
        $data = [
            'title'     => 'Tickets de soporte iniciados',
            'tickets'   => $ticket->where('status', 's02')->findAll()
        ];

        return view('tickets/tableS01', $data);
    }
    public function tableStatusO5()
    {
        $ticket = new Ticket();
        $data = [
            'title'     => 'Tickets de soporte finalizados',
            'tickets'   => $ticket->where('status', 's05')->findAll()
        ];

        return view('tickets/tableS01', $data);
    }

    public function tableStatusO7()
    {
        $ticket = new Ticket();
        $data = [
            'title'     => 'Tickets de soporte Re-abiertos',
            'tickets'   => $ticket->where('status', 's07')->findAll()
        ];

        return view('tickets/tableS01', $data);
    }


}
