<?php
include '../../Component/sidebar.php';
include '../../Component/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Dashboard</title>
</head>
<body>
    <!-- Main Content -->
    <div class="content">
        <!-- End of Navbar -->
        <main>
            <!-- End of Insights -->
            <div class="bottom-data">
                <div class="orders">
                    <div class="header">
                        <i class='bx bx-receipt'></i>
                        <h3>Danh Sách Học Sinh</h3>
                        <i class='bx bx-filter'></i>
                        <i class='bx bx-search'></i>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Hình</th>
                                <th>Tên</th>
                                <th>Ngày Sinh</th>
                                <th>Quê Quán</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="../../images/profile-1.jpg"></td>
                                <td><p>Abc</p></td>
                                <td>14-08-2023</td>
                                <td>CM</td>
                                <td><span class="status completed">Completed</span><span class="status pending">Pending</span><span class="status process">Processing</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <script src="../../js/index.js"></script>
</body>
</html>