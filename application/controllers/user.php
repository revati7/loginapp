<?php
class User extends My_Controller{
    public function index()
    {
        //$this->load->helper('url');
        $this->load->view('public/articles_list');
    }
}