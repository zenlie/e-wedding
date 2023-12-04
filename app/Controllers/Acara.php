<?php

namespace App\Controllers;

class Acara extends BaseController
{
    public function index(): string
    {
        $builder = $this->db->table('acara');
        $query   = $builder->get()->getResult();
        
        // print_r($query);
        // print_r($query->getResult());
        $data['acara'] = $query;
        return view('acara/index', $data);
    }

    public function create()
    {
        return view('acara/add');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('acara')->insert($data);
        if($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Disimpan');
        }
    }
}
