<?php

class AnasayfaController extends AppController{
	
	var $components = array('newcompo');	
	var $helpers = array('Html', 'Form','Cache' );

	
	function index(){
		
		echo "Anasayfa indexim";
		$this->newcompo->herewego();
		$this->deneme();
		
	
	}
	function basicDataInsert(){
		
	$data = $this->Anasayfa->sampleData();
	$this->set('data',$data);
	}
	function basicDataFind(){

	$homePageQ = $this->Anasayfa->sampleQuery();
	$this->set('data',$homePageQ);
	
		
		
	}
	function multiTableQuery(){
		$arme =     array(
				'conditions' => array('ID >' => '2' ), 
				'fields' => array('ID', 'EMAIL'), 
				'order' => array('USER_CREATE_DATE DESC'), 
				'limit' => 20, //int
				'callbacks' => true 
		)  ;
		
		
		
		$deyta = $this->Anasayfa->multiTableQuery();
		$this->set('veriler',$deyta);	
		
	}
	function  cacheQuery(){
		//First of all enable the cache from core.php in app  config directory
		$this->set('title_for_layout', 'cache title');
		$this->set('description_for_layout', 'cache desc');
		$this->set('keywords_for_layout', 'cache keyword');
		if(!($deyta = Cache::read('cachingme'))){
		$deyta = $this->Anasayfa->sampleQuery();
		Cache::write('cachingme', $deyta);
		echo "cache yok";
	}else {
		echo "cache war";
	}
	echo "<pre>";	
	print_r($deyta);
	
	echo "</pre>";
		
	}
	function sessionControl(){
	  $this->autoRender = false;
	  
	  $this->Session->write(array('hehe'=>'deger',
	  							'finish'=>'it'	)); 
	  		
	if(!($a = $this->Session->read("hehe"))){
		$this->Session->write("sessionornek['emre']","verisi");
	}	
	echo $a ;	
	echo $this->Session->read("finish");
	}
	
	
	

}

?>