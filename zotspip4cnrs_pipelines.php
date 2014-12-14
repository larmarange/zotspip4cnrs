<?php

// Sécurité
if (!defined("_ECRIRE_INC_VERSION")) return;

function zotspip4cnrs_insert_head($flux){
	$flux .= '<link rel="stylesheet" href="'.find_in_path('css/zotspip4cnrs.css').'" type="text/css" />';
	return $flux;
}

?>
