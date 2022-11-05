<?php
class Targaryen
{
    function getBurned()
    {
        if(get_class($this) == "Viserys")
            return "burns alive";
        if(get_class($this) == "Daenerys")
            return "emerges naked but unharmed";
    }

    // we cane use this logic to solve this problem to
    /*
    	protected function resistsFire() {
			return false;
		}

		public function getBurned() {
			if (!$this->resistsFire()) {
				return "burns alive";
			} else {
				return "emerges naked but unharmed";
			}
		}
    */
}
 
?>