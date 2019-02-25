<?php
session_start();

include_once 'includes/header.php';

if (!empty($_SESSION['vmsg'])) {
    include_once 'includes/msg.php';
    $_SESSION['vmsg'] = false;
}
?>

<section>

</section>

<?php
include_once 'includes/footer.php';
?>