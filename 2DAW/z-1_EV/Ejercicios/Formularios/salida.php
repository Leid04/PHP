<?PHP
    if($_SERVER['SERVER_METHOD'] == 'POST'){
        if(!empty($_POST['submit'])){
            if(!empty($_POST['name'])){
                if(!preg_match("/[A-Za-záéíóúñÁÉÍÓÚÑ]{2,20}/", $_POST['name'])){
                    $errors[] = "The name must contain letters from the English or Spanish alphabet";
                }                
            }else{
                $errors[] = "You have to provide a name";
            }
            if(!empty($_POST['password'])){
                if(!preg_match("/[0,9]/", $_POST['password'])){
                    $errors[] = "The password must contain numbers";
                }
            }else{
                $errors[] = "The password must contain between 5 to 10 numbers";
            }
            if(isset($errors)){
                foreach($errors as $error){
                    echo "<p style='color:red'>$error</p>";
                }
            } else {
                echo "<h2>Datos del Formulario:</h2>";
                echo "<p><strong>Name:</strong> ".$_POST['name']."</p>";
                echo "<p><strong>Gender:</strong> ".$_POST['gen']."</p>";
                echo "<p><strong>Subjects:</strong> ".implode(", ", $_POST['subjects'])."</p>";
                echo "<p><strong>Grade:</strong> ".$_POST['grade']."</p>";
                echo "<p><strong>Extra Activities:</strong> ".implode(", ", $_POST['activities'])."</p>";
                echo "<p><strong>Code:</strong> ".$_POST['code']."</p>";
                echo "<p><strong>Password:</strong> ".$_POST['password']."</p>";
                echo "<p><strong>Comments:</strong> ".$_POST['comments']."</p>";
                echo "<p><strong>Age:</strong> ".$_POST['age']."</p>";
                echo "<p><strong>Interest Level:</strong> ".$_POST['interest_level']."</p>";
                echo "<p><strong>Phone:</strong> ".$_POST['phone']."</p>";    
            }
        }
    }
?>