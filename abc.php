<?php

for ($i = 1 ;  $i <=100; $i++){
	
	if(($i % 3== 0)&&($i%5 == 0)){
		echo 'fizzbuz';
		}
	else if($i %3 == 0){
		echo 'fizz';
		}
	
	else if($i %5 == 0){
		echo 'buzz';
		}
	
	else if($i %7 == 0){
		echo 'git';
		}
	else if($i %11 == 0){
		echo 'fun!';
		}
	
	
	else{
		echo $i;
		}
	
	
	}