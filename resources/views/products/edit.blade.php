<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <!-- font google main -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Oxygen:wght@300;400;700&family=Princess+Sofia&family=Roboto:wght@100&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- font google secondary -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&family=Lobster&family=Noto+Sans:wght@100;200;300;400;500;600;700;800;900&family=Open+Sans:wght@300;400;500;600;700;800&family=Oxygen:wght@300;400;700&family=Princess+Sofia&family=Roboto:wght@100&family=Work+Sans:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!--fontawesome -->
    <script src="https://kit.fontawesome.com/306f44334f.js" crossorigin="anonymous"></script>
    <!-- normalize css -->
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/normalize.css">
    <!-- bootstrap & file css -->
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.css">
    <!-- main file css -->
    <link rel="stylesheet" href="../main/main.css">
    <link rel="stylesheet" href="../main/secondary.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light navbar-light sticky-top">
        <a class="navbar-brand " href="#">Bondi</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fa-solid fa-bars" style="color: #ffffff"></i>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <div class="p">
                    <li class="nav-item active">
                        <a class="nav-link" href="./index.php">Products</a>
                    </li>
                </div>
                <div class="p">
                    <li class="nav-item">
                        <a class="nav-link" href="../clients/register.php">Register</a>
                    </li>
                </div>
                <div class="l">
                    <li class="nav-item">
                        <a class="nav-link" href="../clients/login.php">Login</a>
                    </li>
                </div>
            </ul>
        </div>
    </nav>
    <div class="f">
        <form action="/product/<?=$products->id?>" method="post">
            @csrf()
            @method("PUT")
            <header>Update products</header>
            <div class="in">
                <label for="n">
                    <input type="text" name="name" id="n" placeholder="name" value=<?=$products->name?> required>
                </label>
            </div>
            <div class="in">
                <label for="f">
                    <input type="text" name="color" id="f" placeholder="color" value=<?=$products->color?> required>
                </label>
            </div>
            <div class="in">
                <label for="p">
                    <input type="text" name="size" id="p" placeholder="size" value=<?=$products->size?> required>
                </label>
            </div>
            <div class="in">
                <label for="c">
                    <input type="number" name="count_in_stock" id="c" placeholder="count_in_stock"
                        value=<?=$products->count_in_stock?> required>
                </label>
            </div>
            <div class="for">
                <a href="./index.php">All products</a>
            </div>
            <hr style="opacity:10%">
            <div class="b">
                <input type="submit" value="Save" class="s">
            </div>
        </form>
    </div>
    <h4 style="font-size:28px">DELETE"</h4>
    <form action="/product/<?=$products->id?>" method="post">
        @csrf()
        @method("DELETE")
        <input type="submit" value="save">
    </form>
</body>

</html>