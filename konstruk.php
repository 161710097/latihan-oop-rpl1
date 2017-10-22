<?php 
class data{
	public $nama;
	public $ttl;
	public $kelas;
	public $status;

public function __construct($nama,$ttl,$kelas,$status)
{
	$this->namanya = $nama;
	$this->ttl = $ttl;
	$this->kelas = $kelas;
	$this->status = $status;
}

public function get_nama()
{
	return $this->nama;
}
public function get_ttl()
{
	return $this->ttl;
}
public function get_kelas()
{
	return $this->kelas;
}
public function get_status()
{
	return $this->status;
}
}
 ?>