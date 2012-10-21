<div id="kayit_form">
            	<h2>Kayit</h2>
				<form action="#" method="post" id="kayit">
                <input type="hidden" value="kayit" id="key" name="key" />
               	  <div class="kayit_form">
                    	<h3>e-posta adresiniz</h3>
                        <input type="text" class="inputbox" name="email" id="email" value="" />
                        <h1><?php echo $hata->hata_Goster('email'); ?></h1>
                    </div>
                  <div class="kayit_form">
                   	<h3>Ad, Soyad</h3>
                        <input type="text" class="inputbox" name="isimsoyisim" id="isimsoyisim" value="" />
                    <h1><?php echo $hata->hata_Goster('isim'); ?></h1>
                  </div>
                  <div class="kayit_form">
                   	  <h3>Sifreniz</h3>
                        <input type="text" class="inputbox" name="pass" id="pass" value="" />
                        <h1><?php echo $hata->hata_Goster('pass'); ?></h1>
                    </div>
                    <div class="kayit_form">
                   	  <h3>Sifreyi tekrarla</h3>
                        <input type="text" class="inputbox" name="pass2" id="pass2" value="" />
                        <h1><?php echo $hata->hata_Goster('pass2'); ?></h1>
                    </div>
                	
                	<div class="kayit_form">
                   		<h3></h3>
                       		 <input type="submit" class="button medium green" value="gonder" />
                    	<h1></h1>
                  </div>
                	
                </form>
            </div>