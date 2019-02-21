<ul class="collapse navbar-collapse navbar-nav" id="navbarTogglerDemo01">
    <?php
        foreach ($navItems as $item) {
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"$item[slug]\">$item[title]</a></li>";
        }
    ?>
</ul>