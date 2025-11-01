<?php
$Current_Page = basename($_SERVER['PHP_SELF']);
// $Current_Page = $_SERVER['PHP_SELF'];

$text = 0;
if ($Current_Page == "index.php") {
    $text = "Home";
} elseif ($Current_Page == "about.php") {
    $text = "About";
} elseif ($Current_Page == "contact.php") {
    $text = "Contact";
}

?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="padding:15px">
    <a class="navbar-brand" href="index.php">
        <?php echo $text ?>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?php if ($Current_Page == "index.php") echo "active" ?>" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($Current_Page == "about.php") echo "active" ?> " href="about.php">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?php if ($Current_Page == "contact.php") echo "active" ?> " href="contact.php">Contact</a>
            </li>
        </ul>
    </div>
</nav>