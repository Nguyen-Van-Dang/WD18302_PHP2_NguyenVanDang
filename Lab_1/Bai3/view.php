<!-- view -->
<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Animated Search Bar </title>
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <form method="post">
        <?
        if (!empty($user)){
            echo 'Name:'.$user['name'];
            echo 'Email:'.$user['email'];
        }
        ?>
    <div class="input-box">
        <input type="text" placeholder="Search..." name="email">
        <span class="icon">
            <i class="uil uil-search search-icon"></i>
        </span>
        <i class="uil uil-times close-icon"></i>
        <button type="submit" name="submit"></button>
    </div>
    </form>

    <script>
        let inputBox = document.querySelector(".input-box"),
            searchIcon = document.querySelector(".icon"),
            closeIcon = document.querySelector(".close-icon");
        searchIcon.addEventListener("click", () => inputBox.classList.add("open"));
        closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
    </script>

</body>

</html>