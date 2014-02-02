<?php
    function menuitem($relative, $text)
    {
        $isCurrent = basename($_SERVER["PHP_SELF"]) == ($relative . ".php");
        printf('<li%s><a href="%s.php">%s</a>', $isCurrent ? ' class="active"' : '', $relative, $text);
    }
?>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img src="logo-nav.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav">
        <?php
            menuitem("index", "Inicio");
            menuitem("jardin", "Jardín");
            menuitem("primaria", "Primaria");
            menuitem("templo", "Templo");
            menuitem("donaciones", "Donaciones");
        ?>
        </ul>
    </div>
</nav>
