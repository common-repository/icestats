<?php
if($_POST['icestats_hidden'] == 'Y') {
	//Form data sent
	$server = $_POST['icestats_server'];  
       	update_option('icestats_server', $server);  
 
      	$iceport = $_POST['icestats_port'];  
       	update_option('icestats_port', $iceport);  

       	$iceurl = $_POST['icestats_url'];  
       	update_option('icestats_url', $iceurl);  


?>
<div class="updated"><p><strong><?php _e('Options saved.' ); ?></strong></p></div>

<?php
	} else {
		//Normal page display
		$server = get_option('icestats_server');
		$iceport = get_option('icestats_port');
		$iceurl = get_option('icestats_url');
	}
?>

<div class="wrap">
	<?php    echo "<h2>" . __( 'IceStats Options', 'icestats_trdom' ) . "</h2>"; ?>

	<!-- IceStats Admin Form -->
	<form name="icestats_form" method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<input type="hidden" name="icestats_hidden" value="Y">
		<p><?php _e("Server Name: " ); ?><input type="text" name="icestats_server" value="<?php echo $server; ?>" size="20"><?php _e(" ex: my.icestats-server.com" ); ?></p>
		<p><?php _e("Server Port: " ); ?><input type="text" name="icestats_port" value="<?php echo $iceport; ?>" size="20"><?php _e(" ex: 8000" ); ?></p>
		<p><?php _e("Stream Mount: " ); ?><input type="text" name="icestats_url" value="<?php echo $iceurl; ?>" size="20"><?php _e(" ex: somestream.ogg.m3u" ); ?></p>
		<hr />
		<p class="submit">
		<input type="submit" name="Submit" value="<?php _e('Update Options', 'icestats_trdom' ) ?>" />
		</p>
	</form>
</div>
	
