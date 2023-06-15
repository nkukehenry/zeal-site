<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_content_management_mdl extends CI_Model 
{
	function get_home_content($table_name)
    {
        $this->db->select('*');
        $this->db->from($table_name);
        $query = $this->db->get();
        return $query;
    }

    // Update Home Content
    public function update_home_content($table_name, $id, $image = FALSE){
        
        if($table_name === 'tbl_home_currency_section_headers'){
            $data = array(

                'top_header' => $this->input->post('top_header'),
                'second_header' => $this->input->post('second_header'),
                'third_header' => $this->input->post('third_header'),
                'contact_us_button_text' => $this->input->post('contact_us_button_text'),
                'contact_us_button_url' => $this->input->post('contact_us_button_url'),
                
            );
        }elseif($table_name === 'tbl_home_about_section'){
            $data = array(

                'about_us_top_header' => $this->input->post('about_us_top_header'),
                'about_us_second_header' => $this->input->post('about_us_second_header'),
                'about_us_description' => $this->input->post('about_us_description'),
                'about_us_image' => $image,
                'about_us_rates_header' => $this->input->post('about_us_rates_header'),
                'about_us_rates_description' => $this->input->post('about_us_rates_description'),
                'about_us_attention_header' => $this->input->post('about_us_attention_header'),
                'about_us_attention_description' => $this->input->post('about_us_attention_description'),
                'about_us_button_text' => $this->input->post('about_us_button_text'),
                'about_us_button_link' => $this->input->post('about_us_button_link'),
                
            );
        }elseif($table_name === 'tbl_home_we_are_flexible_headers'){
            $data = array(

                'home_we_are_flexible_top_header' => $this->input->post('home_we_are_flexible_top_header'),
                'home_we_are_flexible_second_header' => $this->input->post('home_we_are_flexible_second_header'),
                
            );
        }elseif($table_name === 'tbl_home_we_are_flexible_content'){
            $data = array(

                'content_header' => $this->input->post('content_header'),
                'content_description' => $this->input->post('content_description'),
                'content_icon' => $this->input->post('content_icon'),
                'content_button_text' => $this->input->post('content_button_text'),
                'content_button_url' => $this->input->post('content_button_url'),
                
            );
        }elseif($table_name === 'tbl_home_why_choose_us_top_content'){
            $data = array(

                'main_header' => $this->input->post('main_header'),
                'main_header' => $this->input->post('main_header'),
                'main_description' => $this->input->post('main_description'),
                
            );
        }elseif($table_name === 'tbl_home_why_choose_us_services'){
            $data = array(

                'service_header' => $this->input->post('service_header'),
                'service_description' => $this->input->post('service_description'),
                // 'service_icon' => $this->input->post('service_icon'),
                
            );
        }elseif($table_name === 'tbl_home_why_choose_us_images_and_shapes'){
            $my_image = $this->input->post('hidden_image');
            if($my_image == 1){
                $data = array(
                    'choose_image_1' => $image,
                );
            }elseif($my_image == 2){
                $data = array(
                    'choose_image_2' => $image,
                );
            }elseif($my_image == 3){
                $data = array(
                    'choose_image_3' => $image, 
                );
            }

        }elseif($table_name === 'tbl_home_more_benefits_headers'){
            $data = array(

                'benefits_main_header' => $this->input->post('benefits_main_header'),
                'benefits_second_header' => $this->input->post('benefits_second_header'),
                
            );
        }elseif($table_name === 'tbl_home_more_benefits_content'){
            $data = array(

                'benefits_content_header' => $this->input->post('benefits_content_header'),
                'benefits_content_description' => $this->input->post('benefits_content_description'),
                // 'benefits_content_icon' => $this->input->post('benefits_content_icon'),
                // 'benefits_content_duration' => $this->input->post('benefits_content_duration'),
                // 'benefits_content_delay' => $this->input->post('benefits_content_delay'),
                
            );
        }elseif($table_name === 'tbl_home_our_review_content'){
            $data = array(

                'our_review_client_name' => $this->input->post('our_review_client_name'),
                'our_review_client_roll' => $this->input->post('our_review_client_roll'),
                'our_review_client_image' => $image,
                'our_review_client_comment' => $this->input->post('our_review_client_comment'),
                
            );
        }elseif($table_name === 'tbl_home_partners'){
            $data = array(

                'partner_title' => $this->input->post('partner_title'),
                'partner_logo' => $image,
                'partner_description' => $this->input->post('partner_description'),
                
            );
        }

        $this->db->where('id', $id);
        $this->db->update($table_name, $data);
        return true;
    }

    // Delete Home Content from here
    public function delete_home_content($table_name, $table_column, $id){
        $this->db->where($table_column, $id);
        $this->db->delete($table_name);
        return true;
    }

    // Add Home Content
    public function add_home_content($table_name, $upload_image = FALSE){

        if($table_name === "tbl_home_we_are_flexible_content"){
            $data = array(
                'content_header' => $this->input->post('content_header'),
                'content_description' => $this->input->post('content_description'),
                'content_icon' => $this->input->post('content_icon'),
                'content_button_text' => $this->input->post('content_button_text'),
                'content_button_url' => $this->input->post('content_button_url'),
            );
        }elseif($table_name === "tbl_home_our_review_content"){
            $data = array(
                'our_review_client_name' => $this->input->post('our_review_client_name'),
                'our_review_client_roll' => $this->input->post('our_review_client_roll'),
                'our_review_client_image' => $upload_image,
                'our_review_client_comment' => $this->input->post('our_review_client_comment'),
            );
        }elseif($table_name === "tbl_home_partners"){
            $data = array(

                'partner_title' => $this->input->post('partner_title'),
                'partner_logo' => $upload_image,
                'partner_description' => $this->input->post('partner_description'),
                
            );
        }

        $this->db->insert($table_name, $data);
        return true;
    }

    //---------------------------------------------------------------------
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
   
}