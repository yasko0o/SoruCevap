<div id="kayit_form">
            	<h2>Hesap Aktivasyon Bolumu - <?php echo $_SESSION['email']; ?></h2>
				<form action="#" method="post" id="aktivasyon_tamamla">
                	<input type="hidden" value="aktivasyon" id="key" name="key" />
               	  <div class="kayit_form">
                    	<h3>Aktivasyon kodunuz</h3>
                        <input type="text" class="inputbox" name="act_kod" id="act_kod" value="" />
                        <h1><?php echo $hata->hata_Goster('act_kod'); ?></h1>
                    </div>
                 <div class="kayit_form">
                   	<h3></h3>
                        <input type="submit" class="button medium green" value="Sonraki adim" />
                        <input type="submit" class="button medium red" value="Yeni aktivasyon kodu" />
                    <h1></h1>
                  </div>
                
                </form>
            </div>