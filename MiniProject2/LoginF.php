<?php  
                include 'Database.php';
                if(!$conn)
                {
                    die ("Error error".mysql_error());                
                }     
                if(isset($_POST['submit']))
                {
                    $Mobile =$_POST['mobile'];
                    $Pass=$_POST['pass'];
                    $sql="Select COUNT(mobile) from faculty where mobile='$Mobile' and password='$Pass';";
                   if($Res=mysqli_query($conn,$sql))
                   {
                        if(mysqli_num_rows($Res) == 1)
                        {
                            header("Location:FacultyO.php/");
                        }
                        else{
                            echo "Wrong Password Or Mobile Number";
                        }
                   }
                   else
                   {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                   }
                }  
                $conn->close(); 
 ?>