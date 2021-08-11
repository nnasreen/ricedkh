<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('ProductsModel');
        $this->load->model('CategoriesModel');
		$this->load->model('SliderImagesModel');


    }

    /**
     * Display the list of resource.
     *
     *
     */
	public function index()
	{
        
		$data['categories'] = $this->CategoriesModel->get_all();
		$data['slider_images'] = $this->SliderImagesModel->get_all();
        //echo "<pre>"; print_r($this->SliderImagesModel);die();
        $data['title'] = "Home";
		$this->load->template('home',$data);
	}

    public function about()
	{
		$data['categories'] = $this->CategoriesModel->get_all();

		$data['slider_images'] = $this->SliderImagesModel->get_all();
       // print_r($data['categories']); die();
       // print_r($data['slider_images']); die();
        $data['title'] = "About";
	    $this->load->template('about',$data);
	}


}
