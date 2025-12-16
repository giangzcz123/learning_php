<?php
require_once "connectDB.php";

$hoTen = "Nguyễn Văn C";
$ngaySinh = "2005-05-10";

$sql = "INSERT INTO sinhvien (HoTen, NgaySinh)
        VALUES ('$hoTen', '$ngaySinh')";

if (mysqli_query($conn, $sql)) {
    $newId = mysqli_insert_id($conn);
    $msg = "✅ Thêm sinh viên thành công! ID mới = " . $newId;
} else {
    $msg = "❌ Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!doctype html>
<html lang="vi"><head><meta charset="utf-8"><title>Insert SinhVien</title></head>
<body><h2>INSERT sinhvien</h2><p><?php echo $msg; ?></p></body></html>
