<?php
//Display IceCast Server Stats

	$server = get_option('icestats_server');
     	$iceport = get_option('icestats_port');
	$iceurl = get_option('icestats_url');
        $online = "<font color=green><b>ONLINE</b> </font><br />";
        $offline = "<font color=red><b>OFFLINE</b></font><br />";

        if($fp = @fsockopen($server, $iceport, $errno, $errstr, '1')) {
                fclose($fp);
                $ice_status=$online;
                echo "<br /><p><b>&nbsp&nbsp Stream Status:</b> $ice_status";
                $stats = file("http://" . $server . ":" . $iceport . "/status-json.xsl");
		$json_a=json_decode($stats[0],true);
		$artist = $json_a['icestats']['source']['artist']; 
		$song = $json_a['icestats']['source']['title']; 
		$listeners = $json_a['icestats']['source']['listeners'];
		$streamurl = $json_a['icestats']['source']['listenurl'];
                echo "<p>";
                echo "<b>&nbsp&nbsp Artist:</b> " . $artist;
                echo "<br />";
                echo "<b>&nbsp&nbsp Song:</b> " . $song;
                echo "<br />";
		echo "<b>&nbsp&nbsp Listeners:</b> " . $listeners;
                echo "</p>";
		//echo "<p>&nbsp&nbsp <a href=http://" . $server . ":" . $iceport . "/" . $iceurl . " target=new>Click here</a> to listen!</p>";
		echo "<p>&nbsp&nbsp <a href=" . $streamurl . " target=new>Click here</a> to listen!</p>";

         } else {

                $ice_status=$offline;
                echo "<p><b>Stream Status:</b> $ice_status";
        }
?>
