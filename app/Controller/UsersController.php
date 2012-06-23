<?php

class UsersController extends AppController{
	
	var $components = array('newcompo');	
	var $helpers = array('Html', 'Form','Cache' );

	public $uses ;
	
	function index(){
		
		echo "Anasayfa indexim";
		$this->newcompo->herewego();
		$this->deneme();
		
	
	}
	function basicDataInsert(){
		$this->uses = array('Anasayfa');
	
		
	$data = $this->Anasayfa->sampleData();
	$this->set('data',$data);
	}
	function basicDataFind(){
		$this->uses = array('Anasayfa');
	$homePageQ = $this->Anasayfa->sampleQuery();
	
	return 	$this->set('data',$homePageQ);
	

	
		
		
	}
	function returnit($a =NULL){
		
		return $a ;
		
	}
	
	function smartyuses(){
	
		
		//$a = $this->Users->index();
		echo $this->returnit("emreeee");
		$this->set("data",array('key'=>'hahaha'));
		$this->render("basicdatafind");
		
	 	
			
		
		
	}
	
	
	

}

?>