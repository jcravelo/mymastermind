<?php 
class Mastermind{

	public $rownds = 1;
	public $randon = 0; 
	public $colors = ["#ec0f0c","#45d666","#4937fb","#eace16","#b6874c","#f56752","#000","#fff"];
	public $table = [];
	public $game_values = [3];

	// create the game is begin and the colors are setting randon
	public function start(){

		$i = 0;
		while ( $i <= 3 ) {
			
			randon:
			$this->randon = mt_rand(1,8);

			if(in_array($this->randon,$this->game_values)){

				goto randon;

			}

			$this->game_values[$i] = $this->randon;
 		 	
			$i ++;

		}

		return $this->game_values;

	}

	// compare the selection with the random start values
	public function review($look){
		
		$response = array();
		
		for ($i=0; $i < 4; $i++) { 
			
 			$response["position"][$i] = 0;
			$response["return"][$i] = null;

			if (in_array($look[$i], $_SESSION["START_VALUES"])) {
				
				$response["return"][$i] = "fff";
		 			
		 		if($_SESSION["START_VALUES"][$i] == $look[$i]){
		 			
 					$response["return"][$i] = "000";
		 			$response["position"][$i] = 1;
		 		
		 		}

			}

		 }

		return $response;

	}
	
}

