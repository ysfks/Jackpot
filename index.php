<?php

class Test {

	private $first = "";
	private $status, $say;
	private $threeJ = false;

	public function jackpot($array)
	{
		if(!is_array($array)) return false;		

		if(!in_array('J', $array))
			$this->first = $array[0];
		else
			if($array[0] !=  "J")
				$this->first = $array[0];
			else
				$this->first = "J";

		if($this->first!="J")
		{
			if($this->first != $array[2]) // third index is not equal to first one
			{				
				if($array[2]=="J") // if the third index is J
				{					
					if($this->first == $array[1] || $array[1]=="J") // Second index is equal to first one OR equal to J
						$this->status = true;
					else
					{
						$this->status = false;
						$this->say = 1;						
					}
				}
				else
				{
					if($this->first == $array[1])
						$this->say = 2;
					else
						$this->say = 1;

					$this->status = false;
				}
			}
			else
			{				
				if($this->first != $array[1] && $array[1]!="J") // if the second character is snot equal to first one OR not equal to J
				{
					$this->status = false;
					$this->say = 1;
				}
				else
					$this->status = true;
			}
		}
		else
		{
			if($array[1]!=$array[2]) // if the second index is not equal to third one
			{	
				if($array[1]!="J" && $array[2] == "J")
				{
					$this->first = $array[1];
					$this->status = true;
				}
				else if($array[2]!="J" && $array[1] == "J")
				{
					$this->first = $array[2];
					$this->status = true;
				}
				else
				{						
					$this->first = $array[1];
					$this->say = 1;
					$this->status = false;
				}
			}
			else
			{				
				if($array[1]!="J") // if second index is not J, assign it as the first character
				{
					$this->first = $array[1];
				}
				else if($array[2]!="J") // if third index is not J, assign it as the first character
				{
					$this->first = $array[2];
				}
				else
				{
					$this->threeJ = true; // first 3 characters are J
				}
				
				$this->status = true;
			}
		}

		if($this->status)
			$this->say = 3;

		// if the first 3 characters are J
		if($this->threeJ)
		{			
			if($array[3] != "J")
			{
				$this->first = $array[3];
				$this->say = 4;
			}
			else
			{				
				if($array[4] != "J")
				{
					$this->first = $array[4];
					$this->say = 5;
				}
				else
				{
					$this->first = "Jackpot";
					$this->say = 5;
				}
			}
		}
		else
		{
			if($this->status)
			{
				if($array[2]!="J")
				{
					if($array[3] == $this->first || $array[3] == "J")
					{
						if($array[4]=="J" || $this->first==$array[4])
							$this->say = 5;
						else
							$this->say = 4;
					}
				}
				else
				{
					if($array[3]==$this->first || $array[3] == "J")
					{
						if($array[4]=="J" || $this->first==$array[4])
							$this->say = 5;
						else
							$this->say = 4;
					}
				}
			}
		}

		$data = array(
			'Status' => $this->status ? "true" : "false",
			'Character' => $this->first,
			'Count'	=> $this->say
		);

		return $data;


	}

}

$array = array('H', 'H', 'H', 'D', 'J');
$test = new Test();
echo "<pre>";
print_r($test->jackpot($array));
echo "</pre>";


