<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
<script>

var emre = '{"veriler":[{"ogrencibilgileri":{"isim":"emre","soyisim":"karatasoglu","bilgiler":[{"id":"10","resim":"1212"},{"id":"10","resim":"1212"},{"id":"10","resim":"1212"}]}}]}';
emre = JSON.parse(emre);
//alert(emre.veriler[0].ogrencibilgileri.isim);

//$.each(emre.ogrencibilgileri,function(index,value){

//alert(emre.ogrencibilgileri[index].isim);

//});


</script>

Fear view'I kardaşşş<br><br><br><br>
<table>
<tr><td>id</td><td>email</td></tr>

<?php 
		
		foreach ($firstone as $data) {
			
		echo "<tr><td>".$data['Anasayfa']['ID']."</td><td>".$data['Anasayfa']['EMAIL']."</td></tr>";	
			
		}
		

?>



</table>
<?php 
echo "<hr><br><br><br><br>";
   			echo "<hr><br><br><br>";
   			echo "<hr><br><br>";
?>

<?php 
//pr($veriFromcache);

?>