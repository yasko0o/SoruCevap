    <div id="kayit">
    
    	<ul>
        	<form method="post" action="kayit.php">
        	<input type="hidden" name="key" id="key" value="kayit" />
        	<li>Kullanici adi: <input type="text" name="email" id="email" /> <?php echo $hata->hata_Goster("email"); ?></li>
            <li>Sifreniz: <input type="text" name="pass" id="pass" /><?php echo $hata->hata_Goster("pass"); ?></li>
            <li><input type="submit" name='gonder' id="gonder"/></li>
            </form>
        </ul>
		
    </div>