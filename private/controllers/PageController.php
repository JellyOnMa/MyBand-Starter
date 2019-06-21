<?php

 class PageController {

 	function about() {

 		$article = about_text();
 		$template_engine = get_template_engine();



 		echo $template_engine->render('about', ['article' => $article]);
 	}


  function gallery() {
    $gallery = gallery();
 		$template_engine = get_template_engine();



 		echo $template_engine->render('gallery', ['gallery' => $gallery]);
 	}

  function contact() {
    $contact = contact();
 		$template_engine = get_template_engine();



 		echo $template_engine->render('contact', ['contact' => $contact]);
 	}
 }
?>
