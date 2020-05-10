<?php

$myclasses = get_declared_classes();

foreach ($myclasses as $myclass){ 
	$mymethods = get_class_methods($myclass);
	echo "Magic Methods For Class".$myclass."\n";
	foreach ($mymethods as $method) {
		if(substr($method,0,2) === "__"){
			echo $method."\n";
		}
	}
	echo "================="."\n";
} 
