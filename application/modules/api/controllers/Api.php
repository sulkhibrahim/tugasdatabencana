<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require 'vendor/autoload.php';
use chriskacerguis\RestServer\RestController;

class Api extends RestController {
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('BaseModel');
        $this->load->model('BaseModel');
    }
    public function checkauth(){
        if (array_key_exists("Authorization",$this->input->request_headers())){
            $r=$this->db->get_where("user", ['password' => $this->input->request_headers()["Authorization"]])->row();
            if(empty($r)){
                $this->response( [
                    'status' => false,
                    'message' => 'Denied. invalid api key'
                ], 403 );
                return false;
            }else 
                return true;
        }else{
            $this->response( [
                'status' => false,
                'message' => 'Denied. pls input api key'
            ], 403 );
            return false;
        }
    }

    public function databencana_get(){
        if(!$this->checkauth()){
            return;
        }
        $data=$this->BaseModel->getAll();
        $this->response( $data, 200 );
    }
    public function databencana_post(){
        if(!$this->checkauth()){
            return;
        }
        $data = [
            'judul_bencana' => $this->post('judul_bencana'),
            'latitude' => $this->post('latitude'),
            'tanggal_kejadian' => $this->post('tanggal_kejadian'),
            'longitude' => $this->post('longitude'),
            'deskripsi_bencana' => $this->post('deskripsi_bencana'),
            'photo_bencana' => $this->post('photo_bencana'),
            'jenis_bencana_id' => $this->post('jenis_bencana_id'),
            'alamat' => $this->post('alamat'),
        ];
        if($this->BaseModel->postBencana($data)){
            $this->response( [
                'status' => true,
                'message' => 'Success add data'
            ], 200 );
        }else{
            $this->response( [
                'status' => false,
                'message' => 'failed add data'
            ], 400 );
        }
    }
    public function databencana_put($id){
        if(!$this->checkauth()){
            return;
        }
        if($this->BaseModel->editBencana($this->put(),$id)){
            $this->response( [
                'status' => true,
                'message' => 'Success edit data'
            ], 200 );
        }else{
            $this->response( [
                'status' => false,
                'message' => 'failed edit data'
            ], 400 );
        }
    }
    public function databencana_delete($id){
        if(!$this->checkauth()){
            return;
        }
        if($this->BaseModel->delBencana($id)){
            $this->response( [
                'status' => true,
                'message' => 'Success delete data'
            ], 200 );
        }else{
            $this->response( [
                'status' => false,
                'message' => 'failed delete data. '
            ], 400 );
        }
    }



    // public function users_get()
    // {
    //     if(!$this->checkauth()){
    //         return;
    //     }
    //     // Users from a data store e.g. database
    //     $users = [
    //         ['id' => 0, 'name' => 'John', 'email' => 'john@example.com'],
    //         ['id' => 1, 'name' => 'Jim', 'email' => 'jim@example.com','data'=>$this->input->request_headers()],
    //     ];

    //     $id = $this->get( 'id' );

    //     if ( $id === null )
    //     {
    //         // Check if the users data store contains users
    //         if ( $users )
    //         {
    //             // Set the response and exit
    //             $this->response( $users, 200 );
    //         }
    //         else
    //         {
    //             // Set the response and exit
    //             $this->response( [
    //                 'status' => false,
    //                 'message' => 'No users were found'
    //             ], 404 );
    //         }
    //     }
    //     else
    //     {
    //         if ( array_key_exists( $id, $users ) )
    //         {
    //             $this->response( $users[$id], 200 );
    //         }
    //         else
    //         {
    //             $this->response( [
    //                 'status' => false,
    //                 'message' => 'No such user found'
    //             ], 404 );
    //         }
    //     }
    // }
}