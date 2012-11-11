<div id="kayit_form">
            	<h2>Giris</h2>
				<form action="#" method="post" id="giris">
                	<input type="hidden" value="giris" id="key" name="key" />
               	  <div class="kayit_form">
                    	<h3>e-posta adresiniz</h3>
                        <input type="text" class="inputbox" name="email" id="email" value="" />
                        <h1><?php echo $Hata->Dondur('email'); ?></h1>
                    </div>
                  <div class="kayit_form">
                   	<h3>Sifreniz</h3>
                        <input type="text" class="inputbox" name="pass" id="pass" value="" />
                    <h1><?php echo $Hata->Dondur('pass'); ?></h1>
                  </div>
                 
                 <div class="kayit_form">
                   	<h3></h3>
                        <input type="submit" class="button medium green" value="gonder" />
                    <h1></h1>
                  </div>
                
                </form>
            </div>