<?php
$team = 'Tick-Tack-To';
$topic = 'ระบบจัดการข้อมูลนักเรียน';

$goals = [
    'จองห้องซ้อมดนตรีได้สะดวก',
    'ลดความซ้ำซ้อนในการจองห้องซ้อมดนตรี',
    'เลือกอุปกรณ์ที่ต้องการใช้ได้',
    'ตรวจสอบสถานะการจองได้',
];
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เกี่ยวกับโครงงาน</title>
</head>
<body>

    <nav>
        <a href="index.php">หน้าหลัก</a> |
        <a href="about.php">เกี่ยวกับโครงงาน</a> |
        <a href="server.php">ข้อมูลเซิร์ฟเวอร์</a>
    </nav>

    <h1><?php echo $topic; ?></h1>

    <p>ทีม: <?php echo $team; ?></p>

    <h2>เป้าหมายของระบบ</h2>

    <p>จำนวนเป้าหมายทั้งหมด: <?php echo count($goals); ?> ข้อ</p>

    <ol>
        <?php foreach ($goals as $goal): ?>
            <li><?php echo $goal; ?></li>
        <?php endforeach; ?>
    </ol>

</body>
</html>