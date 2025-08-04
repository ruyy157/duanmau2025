<?php include "./header.php" ?>
<div class="boxcenter">
    <div class="form-control">
        <h1>Danh sách người dùng</h1>
    </div>

    <div class="boxcenter">
        <div class="form-control">
            <table class="table" border="1" cellpadding="10" cellspacing="0" width="100%">
                <tr>
                    <th></th>
                    <th>STT</th>
                    <th>Tên Người Dùng</th>
                    <th>Email Người Dùng</th>
                    <th>Mật Khẩu</th>

                </tr>


                <?php foreach ($listtaikhoan as $key => $taikhoan): ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?= $key + 1 ?></td>
                        <td> <?= $taikhoan['hoten'] ?></td>
                        <td> <?= $taikhoan['email'] ?></td>
                        <td><?= $taikhoan['matkhau'] ?></td>



                    </tr>

                <?php endforeach ?>

            </table>
        </div>

    </div>
</div>