<?php
$URL = "$_SERVER[REQUEST_URI]";

function get_title(){
	if((strpos($URL, '/projects/index') === 0) or $URL == '/projects/'){
		
		
		?>
		<script>
			console.log('projects');
		</script>
		
		<?
	}
	
	else if(strpos($URL, '/projects/about') === 0){
		return "Brian - About";
	}
	
	else if(strpos($URL, '/projects/todo') === 0){
		return "Brian - Todo";
	}
}


?>