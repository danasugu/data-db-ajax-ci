<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}


	function show_customers()
    {
        // load table library
        $this->load->library('table');
        
        // set heading
        $this->table->set_heading('#', 'First Name', 'Last Name', 'Email-ID', 'Credits');
    
        // set template
        $style = array('table_open'  => '<table class="table table-striped table-hover">');
		
        $this->table->set_template($style);
    
        echo $this->table->generate($this->db->get('customers'));

        // $this->table->set_template();
    }
	
}


