<div id="kayit_form">
            	<h2>Hesap Aktivasyon Bolumu</h2>
				<form action="#" method="post" id="giris">
	
               	  <div class="kayit_form">
               	  	<?php
               	  	if($_GET['durum'] == 'true') {
                    	 echo '<h3>Hesabiniz aktive edilmistir. '.$_SESSION['email'].'</h3>';
                    	} else {
                    	 echo '<h3>bir hata olustu....!</h3>';
                    	}
                    	?>
                    </div>
                </form>
            </div>