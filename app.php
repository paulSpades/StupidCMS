<?php

class Data{
	private $dataName;
	private $dataFile;

	public function __construct($name){
		$this->dataName = $name;
		$this->dataFile = $this->dataName .".json";

		if (!file_exists($this->dataFile) ){
			$data = array();
			$this->put($data);
		}
	}
	public function fetch(){
		$data = json_decode(file_get_contents($this->dataFile));
		return $data;
	}
	public function fetchif($property,$value){
		$data = json_decode(file_get_contents($this->dataFile));
		$filteredData = array();

		foreach ($data as $item) {
			if ($item->$property == $value){
				array_push($filteredData, $item);	
			}
		}
		return $filteredData;
	}
	private function put($data){
		$dataString = json_encode($data);
		$handle = fopen($this->dataFile, 'w');
		fwrite($handle, $dataString);
		fclose($handle);
	}
	public function add($object){
		$data = $this->fetch();
		array_push($data, $object);
		$this->put($data);
	}
	public function erase($key){
		$data = $this->fetch();
		unset($data[$key]);
		$this->put($data); 
	}
	public function update($key, $object){
		$data = $this->fetch();
		$data[$key] = $object;
		$this->put($data);
	}
}


// classes for types of data

class Page{
	public $pub;
	public $title;
	public $keywords = array();
	public $content;
}
class Post{
	public $pub;
	public $postType;
	public $title;
	public $keywords = array();
	public $content;
	public $author;
	public $date;

	function __construct(){
		$this->date = time();
	}
}
class User{
	public $role;
	public $name;
	public $email;
	public $fname;
	public $password;
}

// echo "app.php";
	
?>