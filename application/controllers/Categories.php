<?php

    class Categories extends CI_Controller{
        
        public function __construct() {
            parent::__construct();
            $this->load->model('common_model');          
        }
        
        public function create(){
            
            $this->load->view('category/add_category');
        }
        
        public function save(){
            
            $data = array();
            $data['category_code'] = $this->input->post('category_code');
            $data['category_name'] = $this->input->post('category_name');
            $data['quantity'] = $this->input->post('quantity');
            
            $this->db->insert('tbl_category', $data);
//            echo "<pre>";
//            print_r($data);
//            exit();
        redirect('categories/index');
        
        }
        
        public function index(){
            $data = array();
            $data['category_info'] = $this->common_model->selectAll('tbl_category');
            $this->load->view('category/view_category', $data);
        }
        
        public function edit($id){
            $data = array();
            $data['category_info'] = $this->common_model->get_info('tbl_category', $id);
            $this->load->view('category/edit_category', $data);
        }
        
        public function update_category(){
            $data = array();
            $data['category_code'] = $this->input->post('category_code');
            $data['category_name'] = $this->input->post('category_name');
            $data['quantity'] = $this->input->post('quantity');
            
            $id = $this->input->post('category_id');
//            echo "<pre>";
//            print_r($id);
//            exit();
            $this->common_model->update('tbl_category', $id, $data);
            redirect('categories/index');
        }
        
        public function delete($id){
            $this->common_model->change_status('tbl_category', $id);
            redirect('categories/index');
        }
        
        public function home(){
            $this->load->view('home/index');
        }
    }

