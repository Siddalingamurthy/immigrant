<?PHP
   if(isset($_POST['pass1'])){
     if($_POST['pass1'] == $_POST['pass2']){
        echo '<p style="color:green">Password matched</p>';
     }else{
       echo '<p style="color:red">Password do not matches the above</p>';
     }

   }
?>