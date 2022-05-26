<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\Ticket;
use App\Models\StatusModel;
use App\Models\PriorityModel;


class TicketController extends ResourceController
{
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
            'title'     => 'Tickets de soporte',
            'total'     => $total,
            'status'    => $status,
            // // 'tickets'   => $tickets->findAll(),
            // 'tickets'   => $tickets->orderBy('status', 'ASC')->findAll()
            'tickets'   => $tickets->orderBy('id', 'desc')->findAll()
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


    public function new()
    {
        $categories = model('CategoryModel');
        $priorities = model('PriorityModel');
        $status = model('StatusModel');
        $areas = model('AreaModel');

        $data = [
            'title'         => 'Nuevo ticket de soporte',
            'status'        => $status->findAll(),
            'priorities'    => $priorities->findAll(),
            'categories'    => $categories->findAll(),
            'areas'         => $areas->findAll()
        ];
        return view('tickets/new', $data);
    }


    public function create()
    {
        $ticket = model(Ticket::class);

        if ($this->request->getMethod() === 'post' && $this->validate([

            'area'              => 'required',
            'category'          => 'required',
            'priority'          => 'required',
            'status'            => 'required',
            'title'             => 'required',
            'description'       => 'required',
            'phone'             => 'required',
            'email'             => 'required'

        ])) {
            $ticket->save([

                'area'          => $this->request->getPost('area'),
                'category'      => $this->request->getPost('category'),
                'priority'      => $this->request->getPost('priority'),
                'title'         => $this->request->getPost('title'),
                'slug'          => url_title($this->request->getPost('title'), '-', true),
                'description'   => $this->request->getPost('description'),
                'evidence'      => $this->request->getPost('evidence'),
                'url'           => $this->request->getPost('url'),
                'status'        => $this->request->getPost('status'),
                'phone'         => $this->request->getPost('phone'),
                'email'         => $this->request->getPost('email')
                // 'remote'        => $this->request->getPost('remote'),
                // 'dateMeeting'   => $this->request->getPost('dateMeeting'),
                // 'hourMeeting'   => $this->request->getPost('hourMeeting'),
                // 'ok'            => $this->request->getPost('ok')

            ]);

            // echo view('tickets/index');
            return redirect()->to('tickets/');
        } else {
            return redirect()->to('tickets/new');
        }
    }


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


    public function delete($id = null)
    {
        //
    }

    public function table()
    {
        $ticket = new Ticket();
        $data = [
            'title'     => 'Tickets en modo tabular',
            // 'tickets'   => $ticket->orderBy('status', 'ASC')->findAll()
            'tickets'   => $ticket->orderBy('id', 'desc')->findAll()
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
