<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trường Cao đẳng FPT Polytechnic</title>
  <?
include('../Asm/src/Public/link.php');
?>
</head>
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
              <form id="loginForm">
                <div class="form-group">
                  <label for="loginUsername">Tên đăng nhập:</label>
                  <input type="text" id="loginUsername" name="loginUsername">
                </div>
                <div class="form-group">
                  <label for="loginPassword">Mật khẩu:</label>
                  <input type="password" id="loginPassword" name="loginPassword">
                </div>
                <button type="button" onclick="login()" class="off" name="signin">Đăng nhập</button>
              </form>
              <!-- Form Đăng nhập -->

              <!-- Form Đăng ký -->
              <form id="registerForm" style="display: none;">
                <div class="form-group">
                  <label for="registerUsername">Tên đăng nhập:</label>
                  <input type="text" id="registerUsername" name="registerUsername">
                </div>
                <div class="form-group">
                  <label for="registerPassword">Mật khẩu:</label>
                  <input type="password" id="registerPassword" name="registerPassword">
                </div>
                <button type="button" onclick="register()" class="off" name="signup">Đăng ký</button>
              </form>
                <!-- Form Đăng ký -->
              <p id="toggleText" style="padding-top: 5px;">Chưa có tài khoản? <a href="#" onclick="toggleForm()">Đăng ký ngay</a></p>
              <button onclick="closePopup('student')" class="off" 
              style="margin: 0 auto; display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;">Đóng</button>
            </div>
            <div id="overlay1" class="overlay1" onclick="closePopup('student')"></div>
            <button class="hamburgerBtn">
              <div id="myNav" class="overlay">
                <a href="javascript:void(0)"class="closebtn"onclick="closeNav()">&times;</a>
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
              <img
                src="../Asm/src/Public/img/1.png"
                class="img-fluid"
                alt="Slide 1"
              />
            </div>
            <div class="carousel-item">
              <img
                src="../Asm/src/Public/img/2.png"
                class="img-fluid"
                alt="Slide 2"
              />
            </div>
            <div class="carousel-item">
              <img
                src="../Asm/src/Public/img/3.png"
                class="img-fluid"
                alt="Slide 3"
              />
            </div>
          </div>
          <button class="carousel-control-prev"type="button"data-bs-target="#myCarousel"data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next"type="button"data-bs-target="#myCarousel"data-bs-slide="next">
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
            <img src="../Asm/src/Public/img/Logo.png" style="height: 5rem; width: auto; max-height: 100%; display: block; padding-bottom: 15px;"/>
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
</html>

