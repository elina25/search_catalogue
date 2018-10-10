<?php
$PAGE_SIZE = 20;

//if (session_id() == '')
//    session_start();
//require_once("lib/config.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/elarisa/application/Config.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/elarisa/application/DB_Connect.php");

require_once ($_SERVER['DOCUMENT_ROOT']."/elarisa/models/Category.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/elarisa/models/Store.php");



require_once ($_SERVER['DOCUMENT_ROOT']."/elarisa/controllers/ControllerCategory.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/elarisa/controllers/ControllerCustomer.php");




function strip_param_from_url( $url, $param )
{
    $base_url = strtok($url, '?');              // Get the base url
    $parsed_url = parse_url($url);              // Parse it 
    $query = $parsed_url['query'];              // Get the query string
    parse_str( $query, $parameters );           // Convert Parameters into array
    unset( $parameters[$param] );               // Delete the one you want
    $new_query = http_build_query($parameters); // Rebuilt query string
    if ($new_query==null) return $base_url; // Delete ? if new query is empty
    return $base_url.'?'.$new_query;            // Finally url is ready
}

function GetPageUrl($strip_param) {
  return strip_param_from_url( 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], $strip_param );
}



function makeLinks($str) {
	$reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";
	$urls = array();
	$urlsToReplace = array();
	if(preg_match_all($reg_exUrl, $str, $urls)) {
		$numOfMatches = count($urls[0]);
		$numOfUrlsToReplace = 0;
		for($i=0; $i<$numOfMatches; $i++) {
			$alreadyAdded = false;
			$numOfUrlsToReplace = count($urlsToReplace);
			for($j=0; $j<$numOfUrlsToReplace; $j++) {
				if($urlsToReplace[$j] == $urls[0][$i]) {
					$alreadyAdded = true;
				}
			}
			if(!$alreadyAdded) {
				array_push($urlsToReplace, $urls[0][$i]);
			}
		}
		$numOfUrlsToReplace = count($urlsToReplace);
		for($i=0; $i<$numOfUrlsToReplace; $i++) {
			$str = str_replace($urlsToReplace[$i], "<a href=\"".$urlsToReplace[$i]."\" target='_blank'>".$urlsToReplace[$i]."</a> ", $str);
			$linkk = strip_tags($str);
		}
		return $linkk;
	} else {
		return $linkk;
	}
}




//pagination
	function IsNeighbourPage($curPage, $idx, $allPages) //$curPage = h selida pou vriskomai kathe fora  $allPages = h teleutea selida kathe fora
	{
		$visibleChoices = 11;
		//Eimaste sto prwto stoixeio
		if ($curPage == 1)
			if($idx <= $visibleChoices)
				return true;

		//Eimaste sto telefteo stoixeio
		if($allPages == $curPage)
			if($idx >= ($allPages - $visibleChoices) + 1)
				return true;

		//Eimaste sto kapou anamesa
		if ($curPage > $visibleChoices && $curPage < $allPages - $visibleChoices)
			if(($idx >= $curPage - $visibleChoices/2 && $idx <= $curPage) || ($idx <= $curPage + $visibleChoices/2) && $idx >= $curPage)
				return true;

		//Eimaste sta geitonika tis arxis
		if ($curPage <= $visibleChoices)
			if($idx >= $curPage - $visibleChoices/2 && $idx <= $curPage + ($visibleChoices - $curPage ) || $idx <= $curPage + $visibleChoices/2 && $idx >= $curPage)
				return true;
		
		//if ($curPage <= $visibleChoices )
			//if($idx >= $curPage - $visibleChoices/2 && $idx <= $curPage + $visibleChoices/2)
				//return true;


		//Eimaste sta geitonika tou telous
		if ($curPage >= $allPages - $visibleChoices)
		{
			if($idx >= (($curPage - ($visibleChoices - ($allPages - $curPage)))+1)  || $idx >= ($curPage - ($visibleChoices - ($allPages - $curPage) )) && $idx >= $curPage)
				return true;
		
			
	//if ($curPage <= $visibleChoices)
			//if($idx >= $curPage - $visibleChoices/2 && $idx <= $curPage + ($visibleChoices - $curPage ) || $idx <= $curPage + $visibleChoices/2 && $idx >= $curPage)
				//return true;



	//if($idx >= ($curPage - ($visibleChoices - ($allPages - $curPage) ))) 
				//return true;
			//else if($curPage <= $allPages - $visibleChoices/2 && $idx >= $allPages - $visibleChoices)
				//return true;

	//if($idx >= ($allPages - $visibleChoices ) + ($visibleChoices - ($allPages - $curPage)))
			//	return true;
		}

		return false;
	}







?>