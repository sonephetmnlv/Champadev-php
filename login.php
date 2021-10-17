<?php
include 'include/header.php';

?> <div class="container-login">
    <div class="box-login">
        <div class="box-image">
            <img src="/asset/bg/learning.png" alt="">
        </div>
        <div class="box-form">
            <div class="btn-group ">
                <div id="btn-login" onclick="login()" class="btn-login active">ເຂົ້າສູ່ລະບົບ</div>
                <div id="btn-register" onclick="register()" class="btn-signUp ">ລົງທະບຽນ</div>
            </div>
            <div id="box-login" class="">
                <form action="" method="post">
                    <div class="mb-3">
                        <input name="email" class="form-control" type="email" required placeholder="ອີເມວ">
                    </div>
                    <div class="mb-3">
                        <input name="password" class="form-control" type="password" required placeholder="ລະຫັດຜ່ານ">
                    </div>
                    <div class="mb-3">
                        <button class="btn" name="btn-login" type="submit">ເຂົ້າສູ່ລະບົບ</button>
                    </div>
                </form>
            </div>
            <div id="box-register" class="box-register flex-none">
                <form action="" method="post">
                    <div class="mb-2">
                        <input type="text" name="firstname" class="form-control" placeholder="ຊື່ຈິງ" required>
                    </div>
                    <div class="mb-2">
                        <input type="text" name="lastname" class="form-control" placeholder="ນາມສະກຸນ" required>
                    </div>
                    <div class="mb-2">
                        <input type="number" min="0" name="phone" class="form-control" placeholder="20 XXXX XXXX"
                            required>
                    </div>
                    <div class="mb-2">
                        <input type="email" name="email" class="form-control" placeholder="ອີເມວ" required>
                    </div>
                    <div class="input-group">
                        <div class="mb-2">
                            <input type="password" name="password" class="form-control" placeholder="ລະຫັດຜ່ານ"
                                required>
                        </div>
                        <div class="mb-2">
                            <input type="password" name="Cpassword" class="form-control" placeholder="ຢືັນຢັນ ລະຫັດຜ່ານ"
                                required>
                        </div>
                    </div>
                    <div class="mb-2">
                        <button class="btn" name="btn-register" type="submit">ສະໝັກສະມາຊິກ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> <?php
include 'include/footer.php';

?>
