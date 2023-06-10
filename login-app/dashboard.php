<?php
include "header.php";
include 'connection.php';
if (!isset($_SESSION['fullname'])) {
    header('Location: http://localhost/login-app/');
}
?>
<h2>Hello</h2>
<br>
<?php echo $_SESSION['fullname']; ?>
<a href="http://localhost/login-app/logout.php"
    class="bg-red-500 shadow-lg shadow-red-500/50 w-full text-gray-100 py-2 rounded hover:bg-red-700 transition-colors">Logout</a>
<?php
include "footer.php";
?>