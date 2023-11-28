<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_content_management extends CI_Controller {
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/content_management/home_content_management_mdl');
        // $this->load->model('admin/Model_dashboard');
    }


    // Load Home Content
	public function index() {


		$data['title'] = "Home Content Management";
        $data['advert_content'] = $this->home_content_management_mdl->get_home_content('tbl_home_advert')->row_array(); // Home Advert Section content
        $data['home_currency_section_headers'] = $this->home_content_management_mdl->get_home_content('tbl_home_currency_section_headers')->row_array(); // Home Currency exchange Section headers
        $data['home_about_us_section'] = $this->home_content_management_mdl->get_home_content('tbl_home_about_section')->row_array(); // Home Content About Us Section
        $data['home_we_are_flexible_headers'] = $this->home_content_management_mdl->get_home_content('tbl_home_we_are_flexible_headers')->row_array(); // Home Content We Are Flexible Section Headers
        $data['home_we_are_flexible_content'] = $this->home_content_management_mdl->get_home_content('tbl_home_we_are_flexible_content')->result_array(); // Home Content We Are Flexible Section Content
        $data['home_why_choose_us_top_content'] = $this->home_content_management_mdl->get_home_content('tbl_home_why_choose_us_top_content')->row_array(); // Home Why Choose us Top Content
        $data['home_why_choose_us_services'] = $this->home_content_management_mdl->get_home_content('tbl_home_why_choose_us_services')->result_array(); // Home Why Choose us Services
        $data['home_why_choose_us_images'] = $this->home_content_management_mdl->get_home_content('tbl_home_why_choose_us_images_and_shapes')->row_array(); // Home Why Choose us Images and Shapes
        $data['home_more_benefits_headers'] = $this->home_content_management_mdl->get_home_content('tbl_home_more_benefits_headers')->row_array(); // Home More Benefits Headers
        $data['home_more_benefits_content'] = $this->home_content_management_mdl->get_home_content('tbl_home_more_benefits_content')->result_array(); // Home More Benefits Content
        $data['home_our_review_headers'] = $this->home_content_management_mdl->get_home_content('tbl_home_our_review_headers')->row_array(); // Home Our Reviews Headers
        $data['home_our_review_content'] = $this->home_content_management_mdl->get_home_content('tbl_home_our_review_content')->result_array(); // Home Our Reviews Content
        $data['our_partners'] = $this->home_content_management_mdl->get_home_content('tbl_home_partners')->result_array(); // Home Our Partners


		$this->load->view('admin/view_header', $data);
		$this->load->view('admin/content_management/view_home_content_management', $data);
		$this->load->view('admin/view_footer');
	}

    // Update Home Content
    public function update_home_content($id, $image = FALSE){
        $table_name = $this->input->post('hidden_table'); // Value comes from the submitted Table

        if($image === FALSE){
            $this->home_content_management_mdl->update_home_content($table_name, $id);
            redirect('admin/home_content_management');
        }else{

            $get_path = $this->input->post('hidden_image');

            if($get_path == 1 || $get_path == 2 || $get_path == 3){
                $path = "./assets/site/img/why-choose-us/";
            }elseif($get_path === 'testimonials'){
                $path = "./assets/site/img/testimonials/";
            }elseif($get_path === 'partner'){
                $path = "./assets/site/img/partner/";
            }elseif($get_path === "advert"){
                $path = "./assets/site/img/advert/";
            }else{
                $path = "./assets/site/img/hero/";
            }
            // Upload Image from here if it is available
            $config['upload_path'] = $path;
            $config['allowed_types'] = "jpg|jpeg|gif|png|webp";
            $config['max_size'] = "50000";
            $config['max_width'] = "50000";
            $config['max_height'] = "50000";

                $this->load->library('upload', $config);
                if(!$this->upload->do_upload()){
                    $errors = array('error' => $this->upload->display_errors());
                    $update_image = $image;
                }else{
                    
                    $data = array('upload_data' => $this->upload->data());
                    $update_image = $_FILES['userfile']['name'];

                }

                $this->home_content_management_mdl->update_home_content($table_name, $id, $update_image);
                redirect('admin/home_content_management');

        }
    }

    // Add Home Content
    public function add_home_content(){
        $table_name = $this->input->post('hidden_table'); // Value comes from the submitted Table

        $get_path = $this->input->post('hidden_image');
        if($get_path === 'comment'){
            $path = "./assets/site/img/testimonials/";
        }elseif($get_path === 'partner'){
            $path = "./assets/site/img/partner/";
        }else{
            $path = FALSE;
        }

        // Upload Image from here if it is available
        $config['upload_path'] = $path;
        $config['allowed_types'] = "jpg|jpeg|gif|png|webp";
        $config['max_size'] = "5000";
        $config['max_width'] = "5000";
        $config['max_height'] = "5000";

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload()){
                $errors = array('error' => $this->upload->display_errors());
                $upload_image = "client.jpg";
            }else{
                
                $data = array('upload_data' => $this->upload->data());
                $upload_image = $_FILES['userfile']['name'];

            }

             // Value comes from the submitted Table
            $table_name = $this->input->post('hidden_table'); 

            $this->home_content_management_mdl->add_home_content($table_name, $upload_image);
            redirect('admin/home_content_management');
    }

    // Delete Home Content
    public function delete_home_content($id, $table){
        $table_name = $table;
        $this->home_content_management_mdl->delete_home_content($table_name, 'id', $id);
        redirect('admin/home_content_management');
    }
}