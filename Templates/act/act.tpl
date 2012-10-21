<div id="kayit_form">
            	<h2>Hesap Aktivasyon Bolumu</h2>
				<form action="#" method="post" id="giris">
                	<input type="hidden" value="act" id="key" name="key" />
               	  <div class="kayit_form">
                    	<h3>e-posta adresiniz</h3>
                        <input type="text" class="inputbox" name="email" id="email" value="" />
                        <h1><?php echo $hata->hata_Goster('email'); ?></h1>
                    </div>
                 <div class="kayit_form">
                   	<h3></h3>
                        <input type="submit" class="button medium green" value="Sonraki adim" />
                    <h1></h1>
                  </div>
                
                </form>
            </div>