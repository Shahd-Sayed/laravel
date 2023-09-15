<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Login</title>
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
    <link rel='stylesheet' href='../bootstrap-4.0.0-dist/normalize.css'>
    <!-- bootstrap & file css -->
    <link rel='stylesheet' href='../bootstrap-4.0.0-dist/css/bootstrap.css'>
    <!-- main file css -->  
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

</head>
<style>
form {
    width: 500px;
    height: 280px;
}

p {
    padding-top: 8px !important;
    margin-left: 5px !important;
    color: rgb(13, 78, 70)
}

.files {
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.3em;
    margin: 30px 18px 4px;
    color: var(--background-color);
    transition: var(--transtion);
}

.files a {
    color: black !important;
    transition: var(--transtion);
    border: 1px solid transparent;
    border-radius: 15px;
    box-shadow: 0 0 0 2px rgba(161, 161, 161, 0.733);
    background-color: var(--section_two-color);
    padding: 8px;
    color: var(--background-color) !important;
}

.files a:hover {
    color: white !important;
    text-decoration: none !important;
    box-shadow: 0 0 0 2px rgba(25, 149, 134, 0.733);
    background-color: var(--background-color);
    border-radius: 30px;
}
</style>

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
    <div class='f'>
        <form action='login.php' method='post'>
            <header> Login</header>
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
            <div class='b'>
                <input type='submit' value='confrim' class='s'>
            </div>
        </form>
    </div>

    <script src='../bootstrap-4.0.0-dist/js/bootstrap.js'></script>
    <script src='../bootstrap-4.0.0-dist/js/cdnjs.cloudflare.com_ajax_libs_popper.js_1.11.0_umd_popper.min.js'></script>
    <script src='../bootstrap-4.0.0-dist/js/code.jquery.com_jquery-3.7.0.min.js'></script>
</body>

</html>