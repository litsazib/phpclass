<?php 
spl_autoload_register(function($class){
	include "classes/".$class.".php";
});
 ?>
 <?php 
 $user = new Student();	//object create 

//for insert 
 if(isset($_POST['create'])){
 	$name=$_POST['name'];
 	$dep=$_POST['dep'];
 	$age=$_POST['age'];
 }
	$user->setName($name);
	$user->setDep($dep);
	$user->setAge($age);

	if($user->insert()){
		echo 'Data Insert Sucesfully';
	}

	if($user->update()){
		echo 'Data update Sucesfully';
	}

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PDO CLASS </title>
</head>
<body>
	<?php 
		foreach ($user->readAll() as $key => $value) {
			echo $value['post_text'];
		}
	 ?>


	 <a href="index.php?action=edit&id=".$value['id']."'></a>
	  <a href="index.php?action=edit&id=".$value['id']."'></a>
</body>
</html>

<!-- update data show  -->
<?php 
	//update
	if(isset($_GET['action']) && $_GET['action']=='edit'){
			$id=(int)$_GET['id'];
			$result=$user->readById($id);			
	}

 ?>
 <?php echo $result['name']; ?>
 <?php echo $result['dpt']; ?>
 <?php echo $result['age']; ?>