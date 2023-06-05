<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_home');
        $this->load->model('Model_portfolio');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_home'] = $this->Model_common->all_page_home();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();
		$data['all_news_category'] = $this->Model_common->all_news_category();

		$data['sliders'] = $this->Model_home->all_slider();
		$data['services'] = $this->Model_home->all_service();
		$data['features'] = $this->Model_home->all_feature();
		$data['why_choose'] = $this->Model_home->all_why_choose();
		$data['team_members'] = $this->Model_home->all_team_member();
		$data['testimonials'] = $this->Model_home->all_testimonial();		
		$data['clients'] = $this->Model_home->all_client();
		$data['pricing_table'] = $this->Model_home->all_pricing_table();
		$data['home_faq'] = $this->Model_home->all_faq_home();


		// Hakim Modifications Currency List
		$data['currency_sending'] = $this->Model_home->get_currency_data('tbl_currencies', 'is_forex', 0);
		$data['forex_exchange'] = $this->Model_home->get_currency_data('tbl_currencies', 'is_forex', 1);
		// Hakim Modifications Currency List

		// Hakim Modifications Home Content
		$data['currency_section_headers'] = $this->Model_home->get_home_content('tbl_home_currency_section_headers')->row_array();
		$data['about_section'] = $this->Model_home->get_home_content('tbl_home_about_section')->row_array();
		$data['we_are_flexible_headers'] = $this->Model_home->get_home_content('tbl_home_we_are_flexible_headers')->row_array();
		$data['we_are_flexible_content'] = $this->Model_home->get_home_content('tbl_home_we_are_flexible_content')->result_array();
		$data['why_choose_us_header_content'] = $this->Model_home->get_home_content('tbl_home_why_choose_us_top_content')->row_array();
		$data['why_choose_us_services_content'] = $this->Model_home->get_home_content('tbl_home_why_choose_us_services')->result_array();
		$data['why_choose_us_images_and_shapes'] = $this->Model_home->get_home_content('tbl_home_why_choose_us_images_and_shapes')->row_array();
		$data['home_more_benefits_headers'] = $this->Model_home->get_home_content('tbl_home_more_benefits_headers')->row_array();
		$data['home_more_benefits_content'] = $this->Model_home->get_home_content('tbl_home_more_benefits_content')->result_array();
		$data['home_reviews_headers'] = $this->Model_home->get_home_content('tbl_home_our_review_headers')->row_array();
		$data['home_reviews_content'] = $this->Model_home->get_home_content('tbl_home_our_review_content')->result_array();
		// Hakim Modifications Home Content



		$data['portfolio_category'] = $this->Model_portfolio->get_portfolio_category();
		$data['portfolio'] = $this->Model_portfolio->get_portfolio_data();

		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		

		$this->load->view('view_header',$data);
		$this->load->view('view_home',$data);
		$this->load->view('view_footer',$data);
	}

	public function send_email() {

		$data['setting'] = $this->Model_common->all_setting();

		$error = '';

		if(isset($_POST['form_contact'])) {

			$valid = 1;

			if($_POST['pest_control'] == 'Pest Control') {
	    		$pest_control_status = 'Yes';
	    	} else {
	    		$pest_control_status = 'No';
	    	}

	    	if($_POST['termite_control'] == 'Termite Control') {
	    		$termite_control_status = 'Yes';
	    	} else {
	    		$termite_control_status = 'No';
	    	}

	    	if($_POST['damage_repair'] == 'Damage Repair') {
	    		$damage_repair_status = 'Yes';
	    	} else {
	    		$damage_repair_status = 'No';
	    	}

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('phone', 'Phone Number', 'trim|required');
			$this->form_validation->set_rules('city', 'City', 'trim|required');
			$this->form_validation->set_error_delimiters('', '<br>');

			if($this->form_validation->run() == FALSE) {
				$valid = 0;
                $error .= validation_errors();
            }

            if( $pest_control_status == 'No' && $termite_control_status == 'No' && $damage_repair_status == 'No' ) {
            	$valid = 0;
                $error .= 'You must have to select at least one service.';
            }

		    if($valid == 1)
		    {
				$msg = '
            		<h3>Visitor Information</h3>
					<b>Name: </b> '.$_POST['name'].'<br><br>
					<b>Email: </b> '.$_POST['email'].'<br><br>
					<b>Phone: </b> '.$_POST['phone'].'<br><br>
					<b>City: </b> '.$_POST['city'].'<br><br>
					<b>Pest Control: </b> '.$pest_control_status.'<br><br>
					<b>Termite Control: </b> '.$termite_control_status.'<br><br>
					<b>Damage Repair: </b> '.$damage_repair_status.'
				';
            	$this->load->library('email');

				$this->email->from($data['setting']['website_email']);
				$this->email->to($data['setting']['receive_email']);

				$this->email->subject('Contact Form Email');
				$this->email->message($msg);

				$this->email->set_mailtype("html");

				$this->email->send();

		        $success = 'Thank you for sending us an email. We will contact  you shortly.';
        		$this->session->set_flashdata('success',$success);

		    } 
		    else
		    {
        		$this->session->set_flashdata('error',$error);
		    }

			redirect(base_url());
            
        } else {
            
            redirect(base_url());
        }
	}

}
