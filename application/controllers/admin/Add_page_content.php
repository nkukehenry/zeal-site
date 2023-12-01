<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_page_content extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/Model_common');
        $this->load->model('admin/Model_page');
    }
	public function index()
	{
		$error = '';
		$success = '';

		$data['setting'] = $this->Model_common->get_setting_data();
		$data['page_home'] = $this->Model_page->show_home();
		$data['page_about'] = $this->Model_page->show_about();
		$data['page_faq'] = $this->Model_page->show_faq();
		$data['page_service'] = $this->Model_page->show_service();
		$data['page_testimonial'] = $this->Model_page->show_testimonial();
		$data['page_news'] = $this->Model_page->show_news();
		$data['page_contact'] = $this->Model_page->show_contact();
		$data['page_search'] = $this->Model_page->show_search();
		$data['page_term'] = $this->Model_page->show_term();
		$data['page_privacy'] = $this->Model_page->show_privacy();
		$data['page_team'] = $this->Model_page->show_team();
		$data['page_portfolio'] = $this->Model_page->show_portfolio();
		$data['page_event'] = $this->Model_page->show_event();

		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/content_management/add_page_content',$data);
		$this->load->view('admin/view_footer');
		
	}

}