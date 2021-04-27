<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        MYVOCAB
    </title>
    <link
        rel="stylesheet"
        href="style.css"
    />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;900&display=swap"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="//use.fontawesome.com/releases/v5.0.7/css/all.css"
    />
</head>

<body>
    <header>
        <!-- Navigation -->
        <nav class="top-menu-container">
            <div class="logo-header">
                <a href="">
                    <img
                    src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                    alt="Logo personal portfolio"
                    title="Logo personal portfolio"
                    />
                </a>
            </div>

            <ul>
                <li>
                    <a href="">About</a>
                </li>
                <li>
                    <a href="">Portfolio</a>
                </li>
                <li>
                    <a href="">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="container-footer">
            <img
                src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                alt="Logo personal portfolio"
                title="Logo personal portfolio"
                />
            <p>
                This website is created by Code With Dary
            </p>
    </footer>
</body>
</html>
