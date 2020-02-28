<?php
	if(isset($_POST['myData']) && !empty($_POST['myData'])) {
    $data = $_POST['myData'];
    
    for ($i=1; $i <= $data ; $i++) { 
    	
    	echo '<div><label for="text"> Team Member '; 
    	echo $i; 
    	echo': </label> <br>
                  <label for="text"> First Name: </label>
                  <input type="text" placeholder="Danny" id="first_name';
        echo $i;
        echo'">
                  <label for="text"> Second Name:</label> 
                  <input type="text" placeholder="Roberts" id="second_name';
        echo $i;          
        echo '"><br>
                  <label for="text">GRE Username:</label> 
                  <input type="text" placeholder="dr3344j" id="user"></div><br>';
    }
    echo '<button type="submit" class="btn btn-primary mb-2">Submit</button>';

}
?>