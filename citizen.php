<?php

class Citizen{
	
	private $data;
	private $fitness;
	
	public function __construct()
	{
		$this->data = '';
		$this->fitness = -1;
	}
	
	public function getData()
	{
		return $this->data;
	}
	
	public function setData($newData = NULL)
	{
		try{
			if(!is_null($newData)){
				$this->data = $newData;
			}
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	
	public function getFitness()
	{
		return $this->fitness;
	}
	
	public function setFitness($newFitness = NULL)
	{
		try{
			if(!is_null($newFitness)){
				$this->fitness = $newFitness;
			}
		}catch(Exception $e){
			die($e->getMessage());
		}
			
	}
	
	public function calculateFitness($objective = NULL){
		try{
			if(is_null($objective)){
				throw new Exception('Error, no se ha especificado objetivo');
			}
			
			$fitness = 0;
			for($x=0;$x<strlen($objective);$x++){
				$fitness += abs(ord($objective[$x]) - ord($this->data[$x]));
			}
			
			$this->setFitness($fitness);
		}catch(Exception $e){
			die($e->getMessage());
		}
		
	}
	
}

?>