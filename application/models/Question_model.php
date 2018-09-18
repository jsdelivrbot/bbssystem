<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question_model extends CI_Model {

    private $table = "questions";
    private $_data = array();


    public function question_set(){

        $new_question_data = array(
            'title' => 'title',
            'descr' => 'descr',
            'file' => 'file',
            'voitetime' => 'voitetime',
            'answertime' => 'answertime',
            'tokensamount' => 'tokensamount',

        );

        //$this->db->insert('questions', $new_question_data);

    }

    public function get_data()
    {
        return $this->_data;
    }

}