<?php
include '../../Component/sidebar.php';
include '../../Component/header.php';
?>
<body>
    <div  class="content">
    <main>
        <div class="header">
            <div class="left">
                <h1>Dashboard</h1>
            </div>
            <!-- <a href="#" class="report">
                    <i class='bx bx-cloud-download'></i>
                    <span>Download CSV</span>
                </a> -->
        </div>
        <!-- Insights -->
        <ul class="insights">
            <li>
                <i class='bx bx-calendar-check'></i>
                <span class="info">
                    <h3>
                        1
                    </h3>
                    <p>A</p>
                </span>
            </li>
            <li><i class='bx bx-show-alt'></i>
                <span class="info">
                    <h3>
                        2
                    </h3>
                    <p>B</p>
                </span>
            </li>
            <li><i class='bx bx-line-chart'></i>
                <span class="info">
                    <h3>
                        3
                    </h3>
                    <p>C</p>
                </span>
            </li>
            <li><i class='bx bx-dollar-circle'></i>
                <span class="info">
                    <h3>
                        4
                    </h3>
                    <p>D</p>
                </span>
            </li>
        </ul>
        <!-- End of Insights -->
        <div class="bottom-data">
            <div class="orders">
                <div class="header">
                    <i class='bx bx-receipt'></i>
                    <h3>Recent Orders</h3>
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
                                <img src="../../images/profile-1.jpg">
                                <p>John Doe</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status completed">Completed</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../images/profile-1.jpg">
                                <p>John Doe</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status pending">Pending</span></td>
                        </tr>
                        <tr>
                            <td>
                                <img src="../../images/profile-1.jpg">
                                <p>John Doe</p>
                            </td>
                            <td>14-08-2023</td>
                            <td><span class="status process">Processing</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Reminders -->
            <div class="reminders">
                <div class="header">
                    <i class='bx bx-note'></i>
                    <h3>Remiders</h3>
                    <i class='bx bx-filter'></i>
                    <i class='bx bx-plus'></i>
                </div>
                <ul class="task-list">
                    <li class="completed">
                        <div class="task-title">
                            <i class='bx bx-check-circle'></i>
                            <p>Start Our Meeting</p>
                        </div>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                    <li class="completed">
                        <div class="task-title">
                            <i class='bx bx-check-circle'></i>
                            <p>Analyse Our Site</p>
                        </div>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                    <li class="not-completed">
                        <div class="task-title">
                            <i class='bx bx-x-circle'></i>
                            <p>Play Footbal</p>
                        </div>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                </ul>
            </div>
            <!-- End of Reminders-->
        </div>
    </main>
    </div>
</body>