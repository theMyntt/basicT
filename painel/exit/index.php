<?php
session_start();

$_SESSION["NAME"] = null;
$_SESSION["ID"] = null;

session_destroy();

echo "Saindo em alguns segundos...";
echo "<script>
setTimeout(() => {
  location.href='../../'
}, 2000)
</script>";
?>