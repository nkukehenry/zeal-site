<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_contact');
        $this->load->model('Model_portfolio');
        $this->load->model('db/Db');
    }

	public function index($product=false)
	{
		
		$data['product']=($product) ? $product: '';

		$data['setting'] = $this->Model_common->all_setting();
		$data['page_contact'] = $this->Model_common->all_page_contact();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['testimonials'] = $this->Model_contact->all_testimonial();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		// $data['contact_content'] = $this->Db->single_row_data('tbl_page_contact');

		$this->load->view('view_header',$data);
		$this->load->view('view_contact',$data);
		$this->load->view('view_footer',$data);
	}

	public function send_email() 
	{

		$data['setting'] = $this->Model_common->all_setting();

		$error = '';

		if(isset($_POST['form_contact'])) {

			// $valid = 1;

			$this->form_validation->set_rules('name', 'Name', 'trim|required');
			$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
			$this->form_validation->set_rules('email', 'Email Address', 'trim|required|valid_email');
			$this->form_validation->set_rules('message', 'Message', 'trim|required');
			$this->form_validation->set_rules('confirm', 'Human Confirmation', 'required');
			$this->form_validation->set_error_delimiters('', '<br>');

			if($this->form_validation->run() == FALSE) {
				$valid  = 0;
                $error .= validation_errors();
            }else{

			if($this->input->post('confirm') != 5){
			  $error = "Your answer to the confirmation question was wrong";
			  $valid = 0;
			}

		    if($valid == 1)
		    {
				
				$msg = '<h3>Sender Information</h3>
					<b>Name: </b> '.$_POST['name'].'<br><br>
					<b>Phone: </b> '.$_POST['phone'].'<br><br>
					<b>Email: </b> '.$_POST['email'].'<br><br>
					<b>Subject: </b> '.$_POST['subject'].'<br><br>
					<b>Message: </b> '.$_POST['message'];

            	$this->load->library('email');

				$this->email->from($data['setting']['send_email_from']);
				$this->email->to($data['setting']['receive_email_to']);
				$this->email->reply_to($_POST['email'], $_POST['name']);

				$this->email->subject('Contact Form Email');
				$this->email->message($msg);

				$this->email->set_mailtype("html");

				$this->email->send();

		        $success = 'Thank you for contacting us. We will get back to you shortly.';
        		$this->session->set_flashdata('success',$success);
		    } 
		    else
		    {
        		$this->session->set_flashdata('error',$error);
		    }
		}
			redirect(base_url().'contact');
            
        } else {
            
            redirect(base_url().'contact');
        }
	}
}