<?php

$config = array(
	'zones' => array(
                'Bad'    => '192.168.2.70',
                'Kueche' => '192.168.2.71',
                'Buero'  => '192.168.2.72',
                'Wohnen' => '192.168.2.73',
	),
	'radiostations' => array(
		'DasDing'  => 'swr-mp3-m-dasding.akacast.akamaistream.net/7/588/137139/v1/gnl.akacast.akamaistream.net/swr-mp3-m-dasding',
                '1Live'    => '1live-diggi.akacast.akamaistream.net/7/965/119435/v1/gnl.akacast.akamaistream.net/1live-diggi',           
		'SWR3'     => 'mp3-live.swr3.de/swr3_m.m3u',
                'Donau3FM' => 'server1.webradiostreaming.de:2640',
	),
        'messagePath'   => '//nas1/music/_Sprachmeldungen/',
        'currentRadio'  => 'currentRadio.txt',
        'filePhpSonos'  => 'PHPSonos.inc.php',
        'logging'       => true,
        'logfile'       => 'log.txt',
);