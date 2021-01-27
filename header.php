<?php
wp_head();
?>
<header>

<!--<h1>Hello World!8</h1>-->
<link href="https://fonts.googleapis.com/css2?family=Exo:ital,wght@1,700&family=Montserrat&display=swap" rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<?php include 'stage3/modules/userbar/userbar.php'; ?>
        <nav class= "navbar navbar-expand-md navbar-light bg-light border-topnav">
            <div class="container">
                <a class="navbar-brand mr-auto mainlogo" href="/">
                    <img src="http://localhost/wp-content/uploads/2020/09/ffg_logo.png" height="50">
                    Final Frontier Gaming</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navcol1" aria-controls="navcol1" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="navcol1 navbarsExample07" class="collapse navbar-collapse">
                <!-- TODO - wp_nav_menu requires custom walker class to modify a classes. -->
                    <!---<?php
                        wp_nav_menu (
                            array (
                                'menu' => 'primary',
                                'container' => '',
                                'theme_location' => 'primary',
                                'items_wrap' => '<ul class="nav navbar-nav ml-auto">%3$s</ul>'
                            )
                        );
                    ?>-->
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/forums">Forums</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/discord">Discord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/roster.php">Roster</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown07">
                                    <a class="dropdown-item" href="/rules.php">Rules</a>
                                    <a class="dropdown-item" href="/mission.php">Mission Statement</a>
                                    <a class="dropdown-item" href="/structure.php">Structure</a>
                                    <a class="dropdown-item" href="/about/awards">Awards</a>
                                    <a class="dropdown-item" href="/ranks.php">Ranks</a>
                                </div>
                        </li>
                    </ul>   
                </div>
            </div>
        </nav>
</header>