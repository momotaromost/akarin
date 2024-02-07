<?php 
session_start();
        if(isset($_POST['m_username'])) {
				//connection
                  include("condb.php");
				//รับค่า user & m_password
                  $m_username = mysqli_real_escape_string($conn,$_POST['m_username']);
                  $m_password = mysqli_real_escape_string($conn,md5($_POST['m_password']));
				//query 
                  $sql="SELECT * FROM tbl_member 
                  WHERE  m_username='".$m_username."' 
                  AND  m_password='".$m_password."' ";

                  // echo $sql;

                  // exit;

                  $result = mysqli_query($conn,$sql);

                  // echo mysqli_num_rows($result);

                  // exit;
				
                  if(mysqli_num_rows($result)==1) {
                      $row = mysqli_fetch_array($result);
                 
                      // echo '<pre>';
                      // var_dump($row); // or print_r($row);
                      // echo '</pre>';
                      // exit;
                      $_SESSION["m_id"] = $row["m_id"];
                      $_SESSION["m_name"] = $row["m_fname"].' '.$row["m_name"].' '.$row["m_lname"];
                      $_SESSION["m_level"] = $row["m_level"];
                      $_SESSION["m_address"] = $row["m_address"];
                      $_SESSION["m_email"] = $row["m_email"];
                      $_SESSION["m_phone"] = $row["m_phone"];


                      if($_SESSION["m_level"]=="ADMIN") { //ถ้าเป็น admin ให้กระโดดไปหน้า admin_page.php
                        echo 'R U ADMIN';
                        Header("Location: admin/");
                      }

                      if($_SESSION["m_level"]=="MEMBER" || $_SESSION["m_level"]=="") {  //ถ้าเป็น member ให้กระโดดไปหน้า user_page.php
                        echo 'R U MEMBER';

                        //insert login log
                        
                 $ref_m_id = $_SESSION["m_id"];  
                 
                 // echo 'ref_m_id = '.$ref_m_id;
                 // exit;     

                $sql2 = "INSERT INTO tbl_login_log
                (
                ref_m_id
                )
                VALUES
                (
                $ref_m_id
                )
                ";

                // echo $sql2;

                // exit; 

          $result2 = mysqli_query($conn, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

          
                       Header("Location: index.php");

                      }

                  }else{
                    echo "<script>";
                        echo "alert(\"ขื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{


             Header("Location: login.php"); //user & m_password incorrect back to login again

        }
?>