<?php
require_once "connectDB.php";

$id = 1;

$sql = "DELETE FROM sinhvien WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    if (mysqli_affected_rows($conn) > 0) {
        $msg = "✅ Xóa sinh viên thành công (ID = $id)";
    } else {
        $msg = "⚠️ Không có sinh viên nào để xóa (ID = $id không tồn tại)";
    }
} else {
    $msg = "❌ Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!doctype html>
<html lang="vi"><head><meta charset="utf-8"><title>Delete SinhVien</title></head>
<body><h2>DELETE sinhvien</h2><p><?php echo $msg; ?></p></body></html>
