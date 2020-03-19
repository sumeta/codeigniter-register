<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading text-center">รายชื่อผู้เข้าอบรม</div>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>รูป</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>ชื่อเล่น</th>
                <th>เบอร์โทร</th>
                <th>อีเมล์</th>
                <th>facebook</th>
                <th>ที่อยุ่</th>
                <th>วันเกิด</th>
                <th>หน่วยงาน</th>
                <th>ตำ่แหน่ง</th>
                <th>โทรสาร</th>
                <th>Line</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rs as $r) { ?>
            <tr>
                <td><img src="<?php echo base_url("assets/pic/$r->tr_img")  ?>" class="img-responsive" alt="Image" width="100"/></td>
                <td><?php echo $r->tr_fname ?></td>
                <td><?php echo $r->tr_lname ?></td>
                <td><?php echo $r->tr_nname ?></td>
                <td><?php echo $r->tr_tel ?></td>
                <td><?php echo $r->tr_email ?></td>
                <td><?php echo $r->tr_facebook ?></td>
                <td><?php echo $r->tr_address ?></td>

                <td><?php echo $r->tr_birthday ?></td>
                <td><?php echo $r->tr_agency ?></td>
                <td><?php echo $r->tr_position ?></td>
                <td><?php echo $r->tr_fax ?></td>
                <td><?php echo $r->tr_line ?></td>

            </tr>
             <?php } ?>
        </tbody>
    </table>
</div>