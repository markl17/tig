<?php

class Page extends Frontend_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('page_m');
    }

    public function index() {
    	$pages = $this->page_m->get_by(array('slug' => 'hi'));
    	//var_dump($this);
    }
    public function save() {
    	$data = array(
	    	'order' => '3',
    	);
    	$id = $this->page_m->save($data, 3);
    	var_dump($id);
    }
	public function delete() {
    	$this->page_m->delete(3);
    }
	public function printing(){
		$pages = $this->page_m->get();
		//print_r($pages);
		foreach ($pages as $t=>$s ){echo '<br>';
			foreach ($s as $m => $l)
			echo($l) . '   ';
		}
	}
}