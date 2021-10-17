 <?php
require_once 'include/header.php';
require_once 'include/server.php';


if(isset($_POST['btn-register'])){
    $firtname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpass = $_POST['Cpassword'];
    $created_at = date('h:i d/m/Y');

    

    if(empty( $firtname || $lastname || $phone || $email ||  $password ||  $cpass ))
    {
        $error = "ກະລຸນາໃສ່ຂໍ້ມູນໃຫ້ຄົບຖ້ວນ";
    } else
    {
        if($password != $cpass)        {
            $error  = "ລະຫັດຜ່ານບໍ່ກົງກັນ";
        }else {
            $password = password_hash( $password, PASSWORD_BCRYPT);
            
            $query = "INSERT INTO `member`(`first_name`, `last_name`, `phone`, `email`, `password`, `rdmy`) 
                                   VALUES (?, ?, ?, ?, ?, ?)";
             
             
             $bind = $conn->prepare($query);
             
             $bind->bindParam(1, $firtname);
             $bind->bindParam(2, $lastname);
             $bind->bindParam(3, $phone);
             $bind->bindParam(4, $email);
             $bind->bindParam(5, $password);
             $bind->bindParam(6, $created_at);
             
             $stmt = $bind->execute();

            if($stmt){
                $success = "ລົງທະບຽນສຳເລັດແລ້ວ";
                header('refresh:2 home.php');
                $_SESSION['aut'] = $firtname;
            }else{
                $error = "ລົງທະບຽນບໍ່ສຳເລັດ";
            }
    
        }
    }
    
   
   
}
?> <div class="container-login">
     <div class="box-login">
         <div class="box-image">
             <img src="asset/bg/learning.png" alt="">
         </div>
         <div class="box-form">
             <div class="btn-group ">
                 <div id="btn-login" onclick="login()" class="btn-login active">ເຂົ້າສູ່ລະບົບ</div>
                 <div id="btn-register" onclick="register()" class="btn-signUp ">ລົງທະບຽນ</div>
             </div> <?php if(isset($success)){?> <div class="alert-success"> <?php echo $success;  ?> </div> <?php  } ?>
             <?php if(isset($error)){?> <div class="alert-warning"> <?php echo $error; ?> </div> <?php  } ?> <div
                 id="box-login" class="">
                 <form action="" method="post">
                     <div class="mb-3">
                         <input autocomplete="off" name="email" class="form-control" type="email" required
                             placeholder="ອີເມວ">
                     </div>
                     <div class="mb-3">
                         <input autocomplete="off" name="password" class="form-control" type="password" required
                             placeholder="ລະຫັດຜ່ານ">
                     </div>
                     <div class="mb-3">
                         <button class="btn" name="btn-login" type="submit">ເຂົ້າສູ່ລະບົບ</button>
                     </div>
                 </form>
             </div>
             <div id="box-register" class="box-register flex-none">
                 <form action="" method="post">
                     <div class="mb-2">
                         <input autocomplete="off" type="text" name="firstname" class="form-control"
                             placeholder="ຊື່ຈິງ" required>
                     </div>
                     <div class="mb-2">
                         <input autocomplete="off" type="text" name="lastname" class="form-control"
                             placeholder="ນາມສະກຸນ" required>
                     </div>
                     <div class="mb-2">
                         <input autocomplete="off" type="number" min="0" name="phone" class="form-control"
                             placeholder="20 XXXX XXXX" required>
                     </div>
                     <div class="mb-2">
                         <input autocomplete="off" type="email" name="email" class="form-control" placeholder="ອີເມວ"
                             required>
                     </div>
                     <div class="input-group">
                         <div class="mb-2">
                             <input autocomplete="off" type="password" name="password" class="form-control"
                                 placeholder="ລະຫັດຜ່ານ" required>
                         </div>
                         <div class="mb-2">
                             <input autocomplete="off" type="password" name="Cpassword" class="form-control"
                                 placeholder="ຢືັນຢັນ ລະຫັດຜ່ານ" required>
                         </div>
                     </div>
                     <div class="mb-2">
                         <button class="btn" name="btn-register" type="submit">ສະໝັກສະມາຊິກ</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>
 <script src="asset/js/script.js"></script> <?php
include 'include/footer.php';
?> </body>

 </html>
