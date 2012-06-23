<?php 

		class memcachedsComponent extends Component {
			function baglan(){
				global $memcache;
				 $memcache = new Memcache;
				$memcache->connect('localhost', 11211) or die ("Could not connect");
				
				return $memcache;
			}
}
   
?>