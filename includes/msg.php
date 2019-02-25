<?php
    // include '../php_action/verif_login.php';
?>

<script>
    window.onload = function() {
        M.toast({html: '<?php echo $_SESSION['msg']; ?>'});
    };
</script>