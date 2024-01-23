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
                            <h3>Học sinh</h3>
                            <i class='bx bx-filter'></i>
                            <i class='bx bx-search'></i>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="src/Public/img/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status process" onclick="showAddPopup()">thêm</span></td>
                                    <td><span class="status process" onclick="showEditPopup()">sửa</span></td>
                                    <td><span class="status process" onclick="showDeletePopup()">xóa</span></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="src/Public/img/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status process" onclick="showAddPopup()">thêm</span></td>
                                    <td><span class="status process" onclick="showEditPopup()">sửa</span></td>
                                    <td><span class="status process" onclick="showDeletePopup()">xóa</span></td>
                                </tr>
                                <!-- Add more rows as needed -->
                            </tbody>
                        </table>
                        <table>
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Order Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="src/Public/img/profile-1.jpg">
                                        <p>John Doe</p>
                                    </td>
                                    <td>14-08-2023</td>
                                    <td><span class="status process" onclick="showAddPopup()">thêm</span></td>
                                    <td><span class="status process" onclick="showEditPopup()">sửa</span></td>
                                    <td><span class="status process" onclick="showDeletePopup()">xóa</span></td>
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

    <!-- Add Popup -->
    <div id="add-popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hideAddPopup()">&times;</span>
            <form action="process_student.php" method="post">
                <label for="name">Họ và Tên:</label>
                <input type="text" id="name" name="name" required>

                <label for="dob">Ngày Sinh:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="grade">Khối Lớp:</label>
                <input type="text" id="grade" name="grade" required>

                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" name="address" required>

                <button type="submit">Thêm Học Sinh</button>
            </form>

        </div>
    </div>

    <!-- Edit Popup -->
    <div id="edit-popup" class="popup">
        <div class="popup-content">
            <span class="close" onclick="hideEditPopup()">&times;</span>
            <p>Popup Sửa</p>
            <form action="process_student.php" method="post">
                <label for="name">Họ và Tên:</label>
                <input type="text" id="name" name="name" required>

                <label for="dob">Ngày Sinh:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="grade">Khối Lớp:</label>
                <input type="text" id="grade" name="grade" required>

                <label for="address">Địa Chỉ:</label>
                <input type="text" id="address" name="address" required>

                <button type="submit">Sửa Học Sinh</button>
            </form>

        </div>
    </div>

    <!-- Delete Popup -->
    <div id="delete-popup" class="popup">
        <div class="popup-content">
            <!-- <span class="close" onclick="hideDeletePopup()">&times;</span> -->
            <p>Popup Xóa</p>
        </div>
    </div>

    <script>
        function showAddPopup() {
            var addPopup = document.getElementById("add-popup");
            addPopup.style.display = "block";
        }

        function hideAddPopup() {
            var addPopup = document.getElementById("add-popup");
            addPopup.style.display = "none";
        }

        function showEditPopup() {
            var editPopup = document.getElementById("edit-popup");
            editPopup.style.display = "block";
        }

        function hideEditPopup() {
            var editPopup = document.getElementById("edit-popup");
            editPopup.style.display = "none";
        }


        function hideDeletePopup() {
            var deletePopup = document.getElementById("delete-popup");
            deletePopup.style.display = "none";
        }
    </script>
    
</body>

</html>