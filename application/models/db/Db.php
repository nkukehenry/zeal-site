
<?php 

      class Db extends CI_Model{
            // Constructor
            public function __construct(){
                parent:: __construct();
                $this->load->database();
            }

            // Get all content of multi rows
            public function multi_rows_data($table_name, $column_name = FALSE, $caller_value = FALSE)
            {
                if($column_name === FALSE){
                    $this->db->select('*');
                    $this->db->from($table_name);
                    $query = $this->db->get();
                    return $query->result();
                }else{
                    $this->db->select('*');
                    $this->db->from($table_name);
                    $this->db->where($column_name, $caller_value);
                    return $query->row_array();
                }
            }

            // Get all content of single row
            public function single_row_data($table_name)
            {
                $this->db->select('*');
                $this->db->from($table_name);
                $query = $this->db->get();
                return $query->row_array();
            }
      }