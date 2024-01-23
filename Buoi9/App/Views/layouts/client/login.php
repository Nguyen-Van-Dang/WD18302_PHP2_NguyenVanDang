<?
require_once "vendor/autoload.php";
include('../../../Public/link.php'); 
use App\Model\Database;
use App\Model\UserFunction;

$Data = new Database;
$user = new UserFunction();

if (isset($_POST["signin"])) {
  $user_account = $_POST["user_account"];
  $user_password = $_POST["user_password"];
  if (empty($user_account) && empty($user_password)) {
    echo "<script>alert('Vui lòng nhập tài khoản và mật khẩu!')</script>";
  } else {
    if (empty($user_account)) {
      echo '<script>alert("Tài khoản không hợp lệ !!!")</script>';
    } else {
      if ($user->checkAccount($user_account, $user_password)) {
        echo '<script>alert("Tài Khoản Đã Bị Vô hiệu hóa!!")</script>';
      } else {
        if ($user->checkUser($user_account, $user_password)) {
          foreach (($user->checkRole($user_account, $user_password)) as $row) {
            if ($row == "1") {
              $_SESSION['user_account'] = $user_account;
              setcookie("role", '1', time() + 3600, "/");
              $user_id = $user->get_Info_User_account($user_account, 'user_account');
              setcookie("userID", $user_id, time() + 3600, "/");
              header('location: ?url=HomeContronller/login');
            } else {
              $result = $user->user_id($user_account, $user_password);
              $_SESSION['user_account'] = $user_account;
              setcookie("role", '2', time() + 3600, "/");
              $user_id = $user->get_Info_User_account($user_account, 'user_account');
              setcookie("userID", $user_id, time() + 3600, "/");
              header('location: index.php?pages=user&action=Home');
            }
          }
        } else {
          echo '<script>alert("Sai mật khẩu !!!")</script>';
        }
      }
    }
  }
}
?>

<body>
  <div id="app1">
    <div class="app2">
      <div class="topBar">
        <div class="topBarSection">
          <img src="../Asm/src/Public/img/logo.png" style="height: 7rem" />
          <div class="topBarGroup">
            <div class="homepageButtonGroup">
              <button class="homepageButton" onclick="openPopup('teacher')">Giảng Viên</button>
              <button class="homepageButton" onclick="openPopup('student')">Sinh viên</button>
            </div>
            <div id="studentPopup" class="popup">
              <h2>Đăng ký và Đăng nhập - Sinh viên</h2>
              <!-- Form Đăng nhập -->
              <form id="loginForm" method="post">
                <div class="form-group">
                  <label for="loginUsername">Tên đăng nhập:</label>
                  <input type="text" id="loginUsername" name="user_account">
                  <?
                  if (isset($_POST["signin"])) {
                    $user_account = $_POST["user_account"];
                    if ($user_account == "") {
                      echo "Xin vui lòng nhập tài khoản";
                    } else {
                      echo '';
                    }
                  }
                  ?>
                </div>
                <div class="form-group">
                  <label for="loginPassword">Mật khẩu:</label>
                  <input type="password" id="loginPassword" name="user_password">
                  <?
                  if (isset($_POST["signin"])) {
                    $user_password = $_POST["user_password"];
                    if ($user_password == "") {
                      echo "Xin vui lòng nhập mật khẩu";
                    } else {
                      echo '';
                    }
                  }
                  ?>
                </div>
                <button type="submit" onclick="login()" class="off" name="signin">Đăng nhập</button>
              </form>
              <!-- Form Đăng nhập -->

              <!-- Form Đăng ký -->
              <?
              function isValidPhoneNumber($user_phone)
              { // Biểu thức chính quy bắt lỗi SĐT
                $pattern = '/^0\d{9}$/';
                return preg_match($pattern, $user_phone);
              }
              if (isset($_POST["signup"])) {
                $pass1 = $_POST["pass1"];
                $pass2 = $_POST["pass2"];
                $user_account = $_POST["user_name1"];
                $user_phone = $_POST["user_phone"];
                if (!empty($pass1) && !empty($pass2) && !empty($user_account) && !empty($user_phone) && $pass1 == $pass2) {
                    if (isValidPhoneNumber($user_phone)) {
                      $user->user_create($user_account, $user_phone, $pass1);
                      echo '<script>alert("Chúc mừng bạn đã đăng ký thành công !!!")</script>';
                    } else {
                      echo '<script>alert("Vui lòng nhập đúng định dạng số điện thoại !!!")</script>';
                    }
                  }
                }
              ?>
              <form id="registerForm" style="display: none;" method="post">
                <div class="form-group">
                  <label for="registerUsername">Tên đăng nhập:</label>
                  <input type="text" id="registerUsername" name="user_name1">
                </div>
                <div class="form-group">
                  <label for="registerPassword">Số điện thoại:</label>
                  <input type="text" id="registerPassword" name="user_phone">
                </div>
                <div class="form-group">
                  <label for="registerPassword">Mật khẩu:</label>
                  <input type="password" id="registerPassword" name="pass1">
                </div>
                <div class="form-group">
                  <label for="registerPassword">Nhập lại mật khẩu:</label>
                  <input type="password" id="registerPassword" name="pass2">
                </div>
                <button type="submit" onclick="register()" class="off" name="signup">Đăng ký</button>
              </form>
              <!-- Form Đăng ký -->
              <p id="toggleText" style="padding-top: 5px;">Chưa có tài khoản? <a href="#" onclick="toggleForm()">Đăng ký ngay</a></p>
              <button onclick="closePopup('student')" class="off" style="margin: 0 auto; display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;">Đóng</button>
            </div>
            <div id="overlay1" class="overlay1" onclick="closePopup('student')"></div>
            <button class="hamburgerBtn">
              <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content-ress">
                  <a href="#" class="hover1" style="color: white;">Liên hệ</a>
                </div>
                <div class="overlay-content">
                  <a href="#" class="hover">Trường Cao Đẳng FPT Folytechnic</a>
                  <a href="#" class="hover">Trường Cao Đẳng FPT Folytechnic</a>
                </div>
              </div>
              <span style="font-size: 30px; cursor: pointer" onclick="openNav()">&#9776;</span>
            </button>
          </div>
        </div>
        <div class="separator"></div>
      </div>
      <!-- silder-->
      <div>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="../Asm/src/Public/img/1.png" class="img-fluid" alt="Slide 1" />
            </div>
            <div class="carousel-item">
              <img src="../Asm/src/Public/img/2.png" class="img-fluid" alt="Slide 2" />
            </div>
            <div class="carousel-item">
              <img src="../Asm/src/Public/img/3.png" class="img-fluid" alt="Slide 3" />
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!-- silder-->

      <!-- banner-->
      <div class="banner">
        <div class="spake" style="padding: 10px;"></div>
        <div class="intro">
          <div class="introContent">
            <img src="../Asm/src/Public/img/Logo.png" style="height: 5rem; width: auto; max-height: 100%; display: block; padding-bottom: 15px;" />
            <p>
              Trụ sở chính Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội
            </p>
          </div>
        </div>
        <div class="footer">
          <p>FPT Polytechnic © 2023, All Rights Reserved</p>
        </div>
      </div>
      <!-- banner-->

    </div>
  </div>
</body>
<script>
  function openPopup(type) {
    if (type === 'student') {
      document.getElementById('studentPopup').style.display = 'block';
      document.getElementById('overlay').style.display = 'block';
    }
  }

  function closePopup(type) {
    if (type === 'student') {
      document.getElementById('studentPopup').style.display = 'none';
      document.getElementById('overlay').style.display = 'none';
    }
  }

  function toggleForm() {
    var loginForm = document.getElementById('loginForm');
    var registerForm = document.getElementById('registerForm');
    var toggleText = document.getElementById('toggleText');

    if (loginForm.style.display === 'block') {
      loginForm.style.display = 'none';
      registerForm.style.display = 'block';
      toggleText.innerHTML = 'Đã có tài khoản? <a href="#" onclick="toggleForm()">Đăng nhập ngay</a>';
    } else {
      loginForm.style.display = 'block';
      registerForm.style.display = 'none';
      toggleText.innerHTML = 'Chưa có tài khoản? <a href="#" onclick="toggleForm()">Đăng ký ngay</a>';
    }
  }
</script>
<!-- saidbar-->
<script>
  function openNav() {
    document.getElementById("myNav").style.width = "20%";
  }

  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
  }
</script>
