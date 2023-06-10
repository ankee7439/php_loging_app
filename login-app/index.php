<?php
include('header.php');
include('connection.php');
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);


  $sql = "SELECT * FROM `user` WHERE email='{$email}' AND password='{$password}'";
  $result = mysqli_query($conn, $sql) or die('Query Failed');

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

      $_SESSION['fullname'] = $row['fullname'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_role'] = $row['user_role'];

      header("Location: http://localhost/login-app/dashboard.php");
    }

  } else {
    echo "<div>Username and Password is incorrect!</div>";
  }
}
?>
<main class="flex item-center justify-center h-screen mb-5 ">
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <div class="bg-white w-96 p-6 rounded shadow-2xl bg-teal-400">
      <div class="flex item-center justify-center mb-4">
        <h1 class="text-3xl font-bold ">Login</h1>
      </div>
      <label for="" class="text-gray-700">Email</label>
      <input type="email" class="w-full py-2 bg-gray-50 text-gray-500 px-1 outline-none mb-4" name="email" required />
      <label for="" class="text-gray-700">Password</label>
      <input type="password" class="w-full py-2 bg-gray-50 text-gray-500 px-1 outline-none mb-4" name="password"
        required />
      <!-- <input type="checkbox" class="mb-6" id="remember" />
          <label for="remember" class="text-gray-700">Remember Me</label> -->
      <button type="submit"
        class="bg-cyan-500 shadow-lg shadow-cyan-500/50 w-full text-gray-100 py-2 rounded hover:bg-cyan-700 transition-colors"
        name="login">
        Login
      </button>
      <p class="mt-4">
        If you haven't registed yet
        <a href="http://localhost/login-app/register.php" class="underline decoration-blue-600">click here to
          register</a>
      </p>
    </div>
  </form>
</main>
<?php
include('header.php');
?>