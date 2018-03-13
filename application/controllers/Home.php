<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model("m_ecommerce");
	}

	public function index()
	{
		$data['sql1'] = $this->m_ecommerce->getecommerce();
		$this->load->view('header');
		$this->load->view('ecommerce', $data);
		$this->load->view('footer');
	}

	public function add(){
		$this->load->view('header');
		$this->load->view('form');
		$this->load->view('footer');
	}

	public function save(){
		$prdctname = $this->input->post('prdctname');
		$prdctcode = $this->input->post('prdctcode');
		$stock = $this->input->post('stock');
		$image = $this->input->post('image');
		$price = $this->input->post('price');
		$data = array(
			'prdctname' => $prdctname,
			'prdctcode' => $prdctcode,
			'stock' => $stock,
			'image' => $image,
			'price' => $price,
			);

           $this->m_ecommerce->save($data);
		   redirect('home');
        }
 
	 }