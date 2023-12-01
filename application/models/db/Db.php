
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

            // Get all content of multi rows Joins
            public function multi_rows_data_joins($table_name, $column_name = FALSE, $caller_value = FALSE)
            {
                if($column_name === FALSE){
                    $this->db->select('*');
                    $this->db->from($table_name);
                    $this->db->join('tbl_countries', 'tbl_countries.country_id = tbl_currencies.country_id');
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

            // Get limited Data
            public function multi_rows_data_limited($table_name, $limit)
            {
                $this->db->select('*');
                $this->db->from($table_name);
                $this->db->limit($limit);
                $query = $this->db->get();
                return $query->result();
            }

            // Update Image here
            public function update_image($table_name, $column_name, $caller_value, $column_to_insert, $zeal_image)
            {
                $data = array(
                    $column_to_insert => $zeal_image,
                );
                $this->db->where($column_name, $caller_value);
                $this->db->update($table_name, $data);
                return true;
            }

      }