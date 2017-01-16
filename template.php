<?php
function open_charity_links__system_main_menu($variables) {
	if(isset($variables['attributes']['class'])) :
		$classes = "";
		foreach($variables['attributes']['class'] as $key => $class) :
			$classes .= "$class ";
		endforeach;
		$class = "class='$classes'";
	else:
		$class = "";
	endif;
	
	if(isset($variables['attributes']['id'])) :
		$id = $variables['attributes']['id'];
	endif;
	
	$html .= "<nav id='$id' $class>\n";
	foreach ($variables['links'] as $link) {
		$html .= "<li>".l($link['title'], $link['href'], $link)."</li>";
	}
	$html .= "</nav>\n";
	return $html;
}
?>