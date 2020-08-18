<head>
    <link rel="stylesheet" href="/css/header.css" />
    <link rel="stylesheet" href="/css/nav.css">
</head>

<body>
    <div class='header_background'>
        <?php

        $page = $_SESSION['page'];

        /* adds is_active class to menu item if the current page name matches menu item*/

        function is_active($item)
        {
            $active = 'active_item';
            if ($item == $_SESSION['page']) {
                echo $active;
            }
        }

        ?>
        <div class="nav_bar">
            <ul>
                <li><a class="nav_item <?php $item1 = 'contact';
                                        is_active($item1) ?>" href="Contact.php">Contact</a></li>
                <li><a class="nav_item <?php $item2 = 'code';
                                        is_active($item2) ?>" href="Code.php">{Code}</a></li>
                <li><a class="nav_item <?php $item3 = 'resume';
                                        is_active($item3) ?>" href="Resume.php">Resume</a></li>

            </ul>
        </div>

        <div class="text">
            <h2>
                Simon Lowther
                Portfolio
            </h2>
        </div>
    </div>
</body>

</html>