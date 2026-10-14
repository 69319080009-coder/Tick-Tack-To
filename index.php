<?php
$team = 'Tick-Tack-To';
$topic = 'Reserve Remember';
$problem = 'เวลาจะไปจองห้องซ้อมดนตรี ส่วนมากจำเป็นต้องโทร ทักไปทางช่องทางติดต่อ หรือเข้าไปหน้าร้าน และไม่มีวิธีอื่นในการเช็กว่าห้องว่างมั้ย หรือมีอุปกรณ์ไหนว่างอยู่';
$members = ['Nathaphol (Developer A)', 'Tae (Developer B)'];
?>
<!DOCTYPE html>
<html lang="th">
<head><meta charset="UTF-8"><title><?php echo $topic; ?></title></head>
<body>
  <h1><?php echo $topic; ?></h1>
  <p>ทีม: <?php echo $team; ?></p>
  <p>ปัญหาที่แก้: <?php echo $problem; ?></p>
  <h2>สมาชิก</h2>
  <ul>
    <?php foreach ($members as $m): ?>
      <li><?php echo $m; ?></li>
    <?php endforeach; ?>
  </ul>
  <p>อัปเดตล่าสุด: <?php echo date('d/m/Y H:i'); ?></p>
</body>
</html>
