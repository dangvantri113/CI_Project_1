<?php
class Blog extends CI_Controller
{

    public function index()
    {
        $this->load->view('blogs/view');
    }
    public function comments()
    {
        echo 'Look at this!';
    }
}
