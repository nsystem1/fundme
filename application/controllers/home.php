<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home extends CI_Controller {
	function __construct() {
		parent::__construct();
	}

	public function index() {
		redirect('fundme');
	}
}