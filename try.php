<?php 
spl_autoload_register(function($class){
	include "classes/".$class.".php";
});
 ?>
<?php 
 $user = new Student();

 // if($user->Delete('17')){
	// 	echo 'Data update Sucesfully';
	// }

 	if($user->insert()){
		echo 'Data Insert Sucesfully';
	}

 ?>