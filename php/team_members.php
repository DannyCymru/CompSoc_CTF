<?php
	if(isset($_POST['myData']) && !empty($_POST['myData'])) {
    $data = $_POST['myData'];
    
    for ($i=1; $i <= $data ; $i++) { 
    	
    	echo '<div class="member><label for="text"> Team Member '; 
    	echo $i; 
    	echo': </label>
                  <label for="text"> First Name: </label>
                  <input type="text" placeholder="Danny" id="first_name';
        echo $i;
        echo'">
                  <label for="text"> Second Name:</label> 
                  <input type="text" placeholder="Roberts" id="second_name';
        echo $i;          
        echo '">
                  <label for="text"> GRE Email:</label> 
                  <input type="text" placeholder="Roberts" id="second_name"></div>';
    }
}
?>