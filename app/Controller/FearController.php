<?php 

   class FearController extends AppController{
   	
   	var $components = array('mongodb','memcacheds');
//    		function __construct(){
   			
//    			echo "here";
//    			$this->uses = array('Anasayfa');
//    			parent::__construct();
//    		}
   		function index(){
   			
   			/*
   			 * Changing Model
   			 * */
   			
   			$this->uses = array('Anasayfa');//Change The Model !!!
   			
   			echo "Fear Kontroller";
   			
   			$this->set('firstone',$this->Anasayfa->sampleQuery());
   			
   			
   			
   			/*
   			 * Changing Model
   			* */
   			
   			
   			/*
   			 * Cache The Query 
   			 * 
   			 * */
   			
   			
   			
   			/*
   			 * Cache The Query
   			*
   			* */
   			
   			
   			if(!($cacheIt = Cache::read("CacheTry"))){
   				
   				$cacheIt = $this->Anasayfa->multiTableQuery();
   				
   				Cache::write('CacheTry',$cacheIt);
   				
   				echo "Cache YOK";
   				
   				
   				
   			}else {
   				
   				echo "Cache VAR";
   				
   			}
   			$this->set("veriFromcache",$cacheIt);
   			
   			
   			
   			/*
   			 * Cache The Query
   			 * 
   			 * */
   			
   		}
   		
   		function mongodbConnection(){
   			
   			$db = $this->mongodb->baglan();
   			$icerik = $db->yeniTablo;
   			$verigetir = $icerik->find();
   			foreach($verigetir as $veri){
   			
   				echo $veri['icerik']."  ".$veri['yazan']." ".$veri['yasi']."<br>";
   			}
   		}
   		
   		function realMemcache(){
   		
   			$mem = $this->memcacheds->baglan();
   			$tmp_object = new stdClass;
   			$tmp_object->str_attr = 'test';
   			$tmp_object->int_attr = 123;
   		
   			$mem->set('key', $tmp_object, false, 10) or die ("Failed to save data at the server");
   		
   			$get_result = $mem->get('key');
   			echo "Data from the cache:<br/>\n";
   			
   			var_dump($get_result);
   			
   			global $memcache;
   			
   			
   			$arrayme =array("id"=>"1",
   								"email"=>"emre@emre.com"		);
   			 
   			$memcache->set('veriler2', $arrayme, false, 10) or die ("Failed to save data at the server");
   			$memic = $memcache->get('veriler2');
   			pr($memic);
   			
   		}
   		
   	
   	
   	
   }

?>