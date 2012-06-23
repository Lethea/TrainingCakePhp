<?php 

		class mongodbComponent extends Component {
			function baglan(){
				$m = new Mongo();
				$db = $m->yeniVt;
				return $db;
				
			}
}
   
?>