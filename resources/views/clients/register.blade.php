<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Register</title>
    <!-- font google main -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link
        href='https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Oxygen:wght@300;400;700&family=Princess+Sofia&family=Roboto:wght@100&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap'
        rel='stylesheet'>
    <!-- font google secondary -->
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link
        href='https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Lobster&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Oxygen:wght@300;400;700&family=Princess+Sofia&family=Roboto:wght@100&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap'
        rel='stylesheet'>
    <!--fontawesome -->
    <script src='https://kit.fontawesome.com/306f44334f.js' crossorigin='anonymous'></script>
    <!-- normalize css -->
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/normalize.css">
    <!-- bootstrap & file css -->
    <link rel='stylesheet' href='../bootstrap-4.0.0-dist/css/bootstrap.css'>
    <link rel='stylesheet' href='../filesCss/register.css'>
    <!-- main file css -->
    <link rel='stylesheet' href='../main/main.css'>
</head>

<body>
    <nav class='navbar navbar-expand-lg bg-light navbar-light sticky-top'>
        <a class='navbar-brand ' href='#'>Bondi</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#collapsibleNavbar'>
            <i class='fa-solid fa-bars' style='color: #ffffff'></i>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='collapsibleNavbar'>
            <ul class='navbar-nav'>
                <div class='p'>
                    <li class='nav-item active'>
                        <a class='nav-link' href='../products/index.php'>Products</a>
                    </li>
                </div>
                <div class='p'>
                    <li class='nav-item'>
                        <a class='nav-link' href='./register.php'>Register</a>
                    </li>
                </div>
                <div class='l'>
                    <li class='nav-item'>
                        <a class='nav-link' href='./login.php'>Login</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
    <div class='f' style='padding-top:100px'>
        <form action='register.php' method='post' enctype='multipart/form-data' style='width:500px; height:600px; '>
            <header>clients register</header>
            <div class='in'>
                <label for='n'>
                    <input type='text' name='name' id='n' placeholder='name' required>
                </label>
            </div>
            <div class='in'>
                <label for='u'>
                    <input type='text' name='username' id='u' placeholder='username' required>
                </label>
            </div>
            <div class='in'>
                <label for='e'>
                    <input type='email' name='email' id='e' placeholder='email' required>
                </label>
            </div>
            <div class='in'>
                <label for='p'>
                    <input type='password' name='password' id='p' placeholder='password' required>
                </label>
            </div>
            <div class='in'>
                <label for='t'>
                    <input type='tel' name='phone_number' id='t' placeholder='phone number' required>
                </label>
            </div>
            <div class='in'>
                <label for='f'>
                    <input type='text' name='full_address' id='f' placeholder='Full address' required>
                </label>
            </div>
            <div class='in'>
                <label for='f'>
                    <input type='file' name='image' style='border-bottom:none' required>
                </label>
            </div>
            <div class='b'>
                <input type='submit' value='confrim' class='s' style='margin-top:-8px'>
            </div>
        </form>
    </div>
    <script src='../bootstrap-4.0.0-dist/js/bootstrap.js'></script>
    <script src='../bootstrap-4.0.0-dist/js/cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js'></script>
    <script src='../bootstrap-4.0.0-dist/js/code.jquery.com_jquery-3.7.0.min.js'></script>
</body>

</html>