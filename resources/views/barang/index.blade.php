<h3>Daftar barang</h3>

<ol>
	<?php 
	foreach ($list as $brg) {
		echo '<li>'.$brg->id.' - '.$brg->nama.'</li>';
	}
	
	?>

</ol>