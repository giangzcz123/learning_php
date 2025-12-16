<?php
require_once "connectDB.php";

$id = 2;
$hoTenMoi = "Trần Thị B";
$ngaySinhMoi = "2001-09-21";

$sql = "UPDATE sinhvien
        SET HoTen = '$hoTenMoi',
            NgaySinh = '$ngaySinhMoi'
        WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    if (mysqli_affected_rows($conn) > 0) {
        $msg = "✅ Cập nhật sinh viên thành công (ID = $id)";
    } else {
        $msg = "⚠️ Không có sinh viên nào để cập nhật (ID = $id không tồn tại) hoặc dữ liệu không đổi";
    }
} else {
    $msg = "❌ Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
<!doctype html>
<html lang="vi"><head><meta charset="utf-8"><title>Update SinhVien</title></head>
<body><h2>UPDATE sinhvien</h2><p><?php echo $msg; ?></p></body></html>
