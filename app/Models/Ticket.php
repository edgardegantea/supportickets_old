<?php

namespace App\Models;

use CodeIgniter\Model;

class Ticket extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tickets';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['category', 'priority', 'title',  'slug', 'description', 'evidence', 'url', 'status', 'phone', 'email', 'remote', 'dateMeeting', 'hourMeeting', 'ok'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';


    public function getTickets() {

        $db = db_connect();

        $builder = $db->table('tickets');
        $query   = $builder->get();

        /*
        $this->db->select('t.*, s.*');
        $this->db->from('tickets t');
        $this->db->join('status s', 't.status = s.id');
        $this->db->order_by( 't.id', 'asc' );
        $query = $this->db->get();
        return $query->result_array();
        */
    }

}
