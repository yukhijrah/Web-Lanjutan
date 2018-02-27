<?php
namespace app\Model;

class Person
{
	public $id;
	public $nama;
	public $gender;
	public $alamat;

	public function_construct($id, $nama)
	{
		$this->id = $id;
		$this->nama = $nama;
	}

	public function sayHello(){
		echo "Hello".$this->nama;
	}
}