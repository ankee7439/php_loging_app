<?php
include('header.php');
include('connection.php');
if (isset($_POST['signup'])) {
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $sql = "INSERT INTO `user`( `fullname`, `email`, `password`) VALUES ('{$fullname}','{$email}','{$password}')";

  $query = mysqli_query($conn, $sql);
  if ($query) {
    header('Location: http://localhost/login-app/');

  }

}
?>
<main class="flex item-center justify-center h-screen mb-5">
  <form action="" method="post">
    <div class="bg-white w-96 p-6 rounded shadow-2xl">
      <div class="flex item-center justify-center mb-4">
        <h1 class="text-3xl font-bold">Register</h1>
      </div>
      <label for="" class="text-gray-700">Fullname</label>
      <input type="text" class="w-full py-2 bg-gray-50 text-gray-500 px-1 outline-none mb-4" name="fullname" required />
      <label for="" class="text-gray-700">Email</label>
      <input type="email" class="w-full py-2 bg-gray-50 text-gray-500 px-1 outline-none mb-4" name="email" required />
      <label for="" class="text-gray-700">Password</label>
      <input type="password" class="w-full py-2 bg-gray-50 text-gray-500 px-1 outline-none mb-4" name="password"
        required />
      <!-- <input type="checkbox" class="mb-6" id="remember" />
          <label for="remember" class="text-gray-700">Remember Me</label> -->
      <button type="submit"
        class="bg-cyan-500 shadow-lg shadow-cyan-500/50 w-full text-gray-100 py-2 rounded hover:bg-cyan-700 transition-colors"
        name="signup">
        Register
      </button>
      <p class="mt-4">
        If you already register
        <a href="http://localhost/login-app/" class="underline decoration-blue-600">click here to sign in</a>
      </p>
    </div>
  </form>
</main>





<?php
include('footer.php');
?>