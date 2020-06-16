<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class Sekolah extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sekolah_model', 'sekolah');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null)
        {
            $sekolah = $this->sekolah->getSekolah();
        } else
            {
                $sekolah = $this->sekolah->getSekolah($id);
            }

        if ($sekolah)
        {
            $this->response([
                'status' => true,
                'data' => $sekolah
            ], REST_Controller::HTTP_OK);
        } else
            {
                $this->response([
                    'status' => false,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);  
            }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null)
        {
            $this->response([
                'status' => false,
                'message' => 'provide an id!!'
            ], REST_Controller::HTTP_BAD_REQUEST); 
        } else
            {
                if ($this->sekolah->deleteSekolah($id) > 0)
                {
                    //OK
                    $this->response([
                        'status' => true,
                        'id' => $id,
                        'message' => 'deleted'
                    ], REST_Controller::HTTP_NO_CONTENT);
                } else
                    {
                        //id not FOUND
                        $this->response([
                            'status' => false,
                            'message' => 'id not found'
                        ], REST_Controller::HTTP_BAD_REQUEST);
                    }
            }

    }

    public function index_post()
    {
        $data = 
        [
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'logo' => $this->post('logo')
        ];

        if ($this->sekolah->createSekolah($data) > 0 )
        {
            $this->response([
                'status' => true,
                'message' => 'new siswa has been created'
            ], REST_Controller::HTTP_CREATED); 
        } else
            {
                $this->response([
                    'status' => false,
                    'message' => 'failed to create new data!!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = 
        [
            'nama' => $this->put('nama'),
            'alamat' => $this->put('alamat'),
            'logo' => $this->put('logo')
        ];

        if ($this->sekolah->updateSekolah ($data, $id) > 0 )
        {
            $this->response([
                'status' => true,
                'message' => 'data siswa has been UPDATED.'
            ], REST_Controller::HTTP_NO_CONTENT);   
        } else
            {
                $this->response([
                    'status' => false,
                    'message' => 'failed to update data!!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
    }

}
