<?php
class viewModel{
	public function getView($file='', $data=array()){
		include $file;
	}
}
?>