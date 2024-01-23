<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="path/to/your/styles.css">
</head>

<body>
    <?php
    include 'src/View/ViewAdmin/Component/sidebar.php';
    include 'src/View/ViewAdmin/Component/header.php';
    ?>
    <div class="content">
        <main>
            <div class="header">
                <!-- End of Insights -->
                <div class="bottom-data">
                    <div class="orders">
                        <div class="header">
                            <i class='bx bx-receipt'></i>
                            <h3>Xếp loại Học sinh</h3>
                            <i class='bx bx-filter'></i>
                            <i class='bx bx-search'></i>
                        </div>
                        <table>
    <thead>
      <tr>
        <th>Họ và Tên</th>
        <th>Điểm Trung Bình</th>
        <th>Xếp Loại</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Nguyễn Văn A</td>
        <td>8.5</td>
        <td>Giỏi</td>
      </tr>
      <tr>
        <td>Trần Thị B</td>
        <td>7.2</td>
        <td>Khá</td>
      </tr>
      <tr>
        <td>Phạm Văn C</td>
        <td>6.0</td>
        <td>Trung Bình</td>
      </tr>
      <!-- Thêm các dòng khác tương ứng với học sinh khác -->
    </tbody>
  </table>
                    </div>
                    <!-- Reminders -->
                </div>
            </div>
        </main>
    </div>
    
</body>

</html>