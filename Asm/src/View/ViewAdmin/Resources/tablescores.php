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
                            <h3>Bảng điểm</h3>
                            <i class='bx bx-filter'></i>
                            <i class='bx bx-search'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>tên</th>
                                    <th>ngữ văn</th>
                                    <th>địa</th>
                                    <th>sử</th>
                                    <th>anh văn</th>
                                    <th>hóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="src/Public/img/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th>tên</th>
                                    <th>ngữ văn</th>
                                    <th>địa</th>
                                    <th>sử</th>
                                    <th>anh văn</th>
                                    <th>hóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="src/Public/img/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th>tên</th>
                                    <th>ngữ văn</th>
                                    <th>địa</th>
                                    <th>sử</th>
                                    <th>anh văn</th>
                                    <th>hóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="src/Public/img/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                    <td>9</td>
                                </tr>
                                <!-- Add more rows as needed -->
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