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
                            <h3>Thêm điểm</h3>
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
            <form action="/path/to/your/processing/script" method="post">
    <label for="monToan">Toán:</label>
    <input type="text" id="monToan" name="monToan" required>

    <label for="monVan">Ngữ Văn:</label>
    <input type="text" id="monVan" name="monVan" required>

    <label for="monNgoaiNgu">Ngoại Ngữ:</label>
    <input type="text" id="monNgoaiNgu" name="monNgoaiNgu" required>

    <!-- Thêm các trường nhập điểm cho các môn khác -->

    <button type="submit">Thêm Điểm</button>
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