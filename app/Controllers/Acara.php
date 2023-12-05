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

    public function edit ($id = null)
    {
        if($id != null) {
            $query = $this->db->table('acara')->getwhere(['id' => $id]);
            if($query->resultID->num_rows > 0) {
                $data['acara'] = $query->getRow();
                return view('acara/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['method']);

        $this->db->table('acara')->where(['id' => $id])->update($data);
        return redirect()->to(site_url('acara'))->with('success', 'Data Berhasil Diupdate');
    }
}
