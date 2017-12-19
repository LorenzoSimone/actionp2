<?php  if ( ! defined('BASEPATH')) trigger_error('No direct script access allowed');
/**
 * Simple CRM
 *
 * @package		Simple CRM
 * @author		karlkori
 * @copyright	Copyright (c) 2012, karlkori.name.
 * @license		
 * @link		https://github.com/karlkori/Simple-CRM
 * @since		Version 1.0
 */

// ------------------------------------------------------------------------

/**
 * Layout Class
 */
class Layout {

	
	public function render($data = array())
	{
		$data['page_title'] = 'Your title';
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('content', $data);
		$this->load->view('footer');
	}

}


/* End of file layout.php */
/* Location: ./application/libraries/layout.php */