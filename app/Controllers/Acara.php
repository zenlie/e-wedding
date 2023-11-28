<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index(): string
    {
        $builder = $this->db->table('e_wedding');
        $query   = $builder->get()->getResult();
        
        // print_r($query);
        // print_r($query->getResult());
        $data['e_wedding'] = $query;
        return view('acara/index', $data);
    }
}
