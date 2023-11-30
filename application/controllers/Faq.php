<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
	function __construct()
	{
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_faq');
        $this->load->model('Model_portfolio');
        $this->load->model('db/Db');
    }

	public function index()
	{
		$data['setting'] = $this->Model_common->all_setting();
		$data['page_faq'] = $this->Model_common->all_page_faq();
		$data['comment'] = $this->Model_common->all_comment();
		$data['social'] = $this->Model_common->all_social();
		$data['all_news'] = $this->Model_common->all_news();

		$data['faqs'] = $this->Model_faq->all_faq();
		$data['portfolio_footer'] = $this->Model_portfolio->get_portfolio_data();

		$data['faqs'] = $this->Db->multi_rows_data('tbl_faq'); // multi rows data
		$data['page_content'] = $this->Db->single_row_data('tbl_faq_page_content'); // Single row data

		$this->load->view('view_header',$data);
		$this->load->view('view_faq',$data);
		$this->load->view('view_footer',$data);
	}
}