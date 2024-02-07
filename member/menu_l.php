<img src="../mimg/<?php echo $m_img;?>" alt="" width="100%">
<br><br>
เข้าสู่ระบบล่าสุด : 
<?php echo date('d/m/Y H:i:s', strtotime($lastlogin));?>
<br>
<div class="list-group">
	<a href="../index.php" class="list-group-item active">
		ซื้อสินค้า
	</a>
	<a href="index.php" class="list-group-item">
		ประวัติการสั่งซื้อ
	</a>
	<a href="index.php?act=edit" class="list-group-item">
		แก้ไขโปรไฟล์
	</a>
	<a href="index.php?act=pwd" class="list-group-item">
		แก้ไขรหัสผ่าน
	</a>
	<a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่?');" class="list-group-item list-group-item-danger">ออกจากระบบ</a>
</div>