<?php

$config = array(
	'zones' => array(
                '115'   => '192.168.1.161', /* Office, 115 is IDX in Domoticz */
		'116'   => '192.168.1.196', /* Kitchen, 116 is IDX in Domoticz */
	),
	'radiostations' => array(
		'Radio 538'      	=> 'vip-icecast.538.lw.triple-it.nl/RADIO538_MP3',
		'QMusic'		=> 'icecast-qmusic.cdp.triple-it.nl/Qmusic_nl_live_96.mp3',
		'QMusic Non Stop'	=> 'icecast-qmusic.cdp.triple-it.nl/Qmusic_nl_nonstop_96.mp3',
		'QMusic Foute Uur'	=> 'icecast-qmusic.cdp.triple-it.nl/Qmusic_nl_fouteuur_96.mp3',
		'3FM'			=> 'icecast.omroep.nl/3fm-bb-aac',
		'Freeze FM'		=> '178.19.127.9:80',
		'Radio 1'		=> 'icecast.omroep.nl/radio1-bb-aac',
		'Skyradio'		=> '8563.live.streamtheworld.com:80/SKYRADIOAAC_SC?TGT=TuneIn&DIST=TuneIn',
		'Zappelin'		=> 'icecast.omroep.nl/zappelinradio-bb-aac',
	),
        'messagePath'   		=> 'x-file-cifs://<yourpath>/sonos/spraak/',
        'messageStorePath'   		=> 'x-file-cifs://<yourpath>/sonos/spraak/',
//        'messagePath'   		=> 'http://<your rpi IP>/sonos/spraak/',  // for f.e. a RPI
//        'messageStorePath'   		=> 'http://<your rpi IP>/sonos/spraak/',        
	'messageRelativePath'		=> './spraak/',
        'messageLang'   		=> 'nl-nl',
        'currentRadio'  		=> 'currentRadio.txt',
        'filePhpSonos'  		=> 'PHPSonos.inc.php',
        'logging'       		=> false,
        'logfile'       		=> 'log.txt',
	'tssapikey'			=> '<fill with apikey from voicerrs.org>',
);
