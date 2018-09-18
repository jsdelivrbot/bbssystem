<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Questions extends MY_Controller
{
//protected $access = array("Admin", "Manager", "Performer");

    //protected $access = "User";
    protected $access = array("Admin", "User");

    public function index()
    {
        $this->load->model('question_model');

        $this->question_model->question_set();


        $this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");


        $this->load->view("all-questions");

        $this->load->view("footer");
    }



    public function userwallet()
    {

        $this->load->model('bbs_model');
        $data = array(
            'result' => $this->bbs_model->bbs_user_get()
        );

        $this->load->view("header");
        $this->load->view("app-header");

        $this->load->view("sidebar-default");

        $this->load->view("main-page-userwallet", $data);

        $this->load->view("footer");
        $this->load->view("datatablejs");
        $this->load->view("blockchain-js");

    }
}