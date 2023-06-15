<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Currencies extends CI_Controller 
{
	function __construct() 
	{
        parent::__construct();
        $this->load->model('admin/currencies/model_currencies');
        // $this->load->model('admin/Model_dashboard');
    }


    // Currencies Sending
	public function currency_sending() {

		$data['title'] = "Currencies Sending Section";
		$data['currency_sending'] = $this->model_currencies->get_currencies_data('tbl_currencies', 'is_forex', 0);


		$this->load->view('admin/view_header',$data);
		$this->load->view('admin/currencies/view_currencies_sending',$data);
		$this->load->view('admin/view_footer');
	}

    
    // Forex Exchange
    public function forex_exchange() {

		$data['title'] = "Forex Exchange Section";
		$data['forex_exchange'] = $this->model_currencies->get_currencies_data('tbl_currencies', 'is_forex', 1);

		

		$this->load->view('admin/view_header',$data);
        $this->load->view('admin/currencies/view_forex_exchange',$data);
		$this->load->view('admin/view_footer');
	}


	// Add Currencies Data
	public function add_currencies_data() {

		$data['title'] = "Add Currency Data";
		$data['countries'] = $this->model_currencies->get_countries_data('tbl_countries');


		$this->form_validation->set_rules('insert_icon', 'Currency', 'required');
		$this->form_validation->set_rules('is_forex', 'Options', 'required');

		if($this->form_validation->run() === FALSE){

			$this->load->view('admin/view_header',$data);
			$this->load->view('admin/currencies/view_add_currency_data',$data);
			$this->load->view('admin/view_footer');

		}else{

			$data = $this->model_currencies->add_currencies_data('tbl_currencies');
			if($data == 0){
				redirect('admin/currencies/currency_sending');
			}elseif($data == 1){
				redirect('admin/currencies/forex_exchange');
			}else{
				redirect('admin');
			}
		}
		
	}

	// Delete Currency Data
	public function delete_currency_data($id, $is_forex){
		$this->load->model('model_currencies');
		$this->model_currencies->delete_currency_data("tbl_currencies", "currency_id", $id);

			if($is_forex == 0){
				redirect('admin/currencies/currency_sending');
			}elseif($is_forex == 1){
				redirect('admin/currencies/forex_exchange');
			}else{
				redirect('admin');
			}
		
	}

    
}