<?php 
class Student{
	private $table='tbl_post';

	private $name;
	private $dep;
	private $age;
//Seter Geter function 
	public function setName($name){
		$this->name=$name;
	}

	public function setDep($dep){
		$this->dep=$dep;
	}
	public function setName($age){
		$this->age=$age;
	}

	public function update($id){
		$sql = "";
		$stmt=DB::process($sql);
		$stmt->bindParam(':name',$this->name);
		$stmt->bindParam(':dep',$this->dep);
		$stmt->bindParam(':age',$this->age);
		$stmt->bindParam(':id',$id);
		return $stmt->execute();
	}



	public function update($id){
		$sql = "UPDATE $this->table SET name=:name,dep=:dep,age=:age WHERE id=:id";
		$stmt=DB::process($sql);
		$stmt->bindParam(':name',$this->name);
		$stmt->bindParam(':dep',$this->dep);
		$stmt->bindParam(':age',$this->age);
		$stmt->bindParam(':id',$id);
		return $stmt->execute();
	}

	public function insert(){
		$sql="INSERT INTO $this->table(name,dep,age) VALUES(:name,:dep,:age)";
		$stmt=DB::process($sql);
		$stmt->bindParam(':name',$this->name);
		$stmt->bindParam(':dep',$this->dep);
		$stmt->bindParam(':age',$this->age);
		return $stmt->execute();
	}
	

	public function readById($id){
		$sql  = "SELECT * FROM $this->table wHERE id=:id";
		$stmt =DB::process($sql);
		$stmt->bindParam(':id',$id);
		$stmt->execute();
		return $stmt->fetch();
	}

	public function readAll(){
		$sql = "SELECT * FROM $this->table";
		$stmt= DB::process($sql);
		$stmt->execute();
		return $stmt->fetchAll();
	}

}
?>