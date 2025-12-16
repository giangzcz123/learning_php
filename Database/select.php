<?php
require_once "connectDB.php";

$sql = "SELECT id, HoTen, NgaySinh FROM sinhvien ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>
<!doctype html>
<html lang="vi">
<head>
  <meta charset="utf-8">
  <title>Danh sách sinh viên</title>
  <style>
    body{
      font-family: Arial, sans-serif;
      background:#f5f7fb;
      margin:0;
      padding:24px;
    }
    .container{
      max-width: 900px;
      margin: 0 auto;
    }
    .card{
      background:#fff;
      border-radius:14px;
      padding:18px 18px 8px;
      box-shadow: 0 8px 24px rgba(0,0,0,.08);
      border: 1px solid #e9edf5;
    }
    h2{
      margin: 0 0 14px;
      font-size: 20px;
    }
    .subtitle{
      color:#667085;
      margin: 0 0 18px;
      font-size: 14px;
    }
    table{
      width:100%;
      border-collapse: collapse;
      overflow: hidden;
      border-radius: 12px;
    }
    thead th{
      text-align:left;
      font-weight:700;
      font-size: 13px;
      letter-spacing: .2px;
      color:#344054;
      background:#f2f4f7;
      padding:12px 14px;
      border-bottom:1px solid #e5e7eb;
    }
    tbody td{
      padding:12px 14px;
      border-bottom:1px solid #eef2f7;
      color:#101828;
      font-size: 14px;
    }
    tbody tr:hover{
      background:#f9fafb;
    }
    .badge{
      display:inline-block;
      padding:4px 10px;
      border-radius:999px;
      font-size: 12px;
      background:#eef4ff;
      color:#1d4ed8;
      border:1px solid #dbeafe;
    }
    .empty{
      padding:14px;
      background:#fff6f6;
      border:1px solid #ffd7d7;
      color:#b42318;
      border-radius:12px;
    }
    .footer{
      margin-top: 12px;
      font-size: 12px;
      color:#667085;
      text-align:right;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <h2>Danh sách sinh viên</h2>
      <p class="subtitle">Bảng dữ liệu lấy từ MySQL (sinhvien: id, HoTen, NgaySinh)</p>

      <?php if ($result && mysqli_num_rows($result) > 0): ?>
        <table>
          <thead>
            <tr>
              <th style="width:90px;">ID</th>
              <th>Họ tên</th>
              <th style="width:160px;">Ngày sinh</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
              <tr>
                <td><span class="badge">#<?php echo $row["id"]; ?></span></td>
                <td><?php echo htmlspecialchars($row["HoTen"]); ?></td>
                <td><?php echo $row["NgaySinh"]; ?></td>
              </tr>
            <?php endwhile; ?>
          </tbody>
        </table>

        <div class="footer">
          Tổng: <?php echo mysqli_num_rows($result); ?> sinh viên
        </div>
      <?php else: ?>
        <div class="empty">Không có record nào</div>
      <?php endif; ?>

      <?php mysqli_close($conn); ?>
    </div>
  </div>
</body>
</html>
