<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_currencies extends CI_Model 
{
	function get_currencies_data($table_name, $select_column, $value)
    {
        $this->db->select('*');
        $this->db->from($table_name);
        $this->db->where($select_column, $value);
        $this->db->join('tbl_countries', 'tbl_countries.country_id = tbl_currencies.country_id');
        $query = $this->db->get();
        return $query->result_array();
    }

    // Get Countries from here
    function get_countries_data($table_name) {
        $this->db->select('*');
        $this->db->from($table_name);
        $query = $this->db->get();
        return $query->result_array();
    }


    // Currency data from here
    function add_currencies_data($table_name) {

        $var = $this->input->post('is_forex');

        $data = array(
            'currency_icon' => $this->input->post('insert_icon'),
            'is_forex' => $this->input->post('is_forex'),
            'country_id' => $this->input->post('country_id'),
        );
        $this->db->insert($table_name, $data);
        return $var;
    }

    // Delete Currency Data from here
    public function delete_currency_data($table_name, $column_name, $id){
        $this->db->where($column_name, $id);
        $this->db->delete($table_name);
        return true;
    }
   
}