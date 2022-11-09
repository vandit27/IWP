<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <form action="" method="POST">
        <div class="relative flex min-h-screen flex-col justify-center overflow-hidden bg-gray-50 py-6 sm:py-12">
            <div class="relative bg-white pt-10 pb-8 px-10 shadow-xl mx-auto w-96 rounded-lg">
                <div class="divide-y divide-gray-300/50 w-full">
                    <div class="space-y-6 py-8 text-base  text-gray-600">

                        <?php if (isset($_GET['message'])) : ?>
                            <p class="text-sm text-red-500"><?= $_GET['message']; ?></p>
                        <?php endif; ?>

                        <p class="text-xl font-medium leading-7">PHP Login System</p>
                        <div class="space-y-4 flex flex-col">
                            <input type="text" name="username" placeholder="Username" class="border border-gray-300/50 p-1 rounded focus:outline-none" />

                            <input type="password" name="password" placeholder="Password" class="border border-gray-300/50 p-1 rounded focus:outline-none" />
                        </div>
                    </div>
                    <div class="pt-8 text-base font-semibold leading-7">
                        <input type="submit" value="Login" name="submit">
                    </div>
                </div>
            </div>
        </div>
    </form>

    <?php
    if (isset($_POST["submit"])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $conn = new mysqli('localhost', 'root', '', 'adminpanel') or die("Connect failed: %s\n" . $conn->error);
        $q = mysqli_query($conn, "SELECT * from login WHERE username='$username' and password='$password'");
        if (mysqli_num_rows($q) > 0) {
            echo "Success";
            header('location:loginform.php');
        } else {
            header('location:../index.php');
        }
    }
    ?>
</body>

</html>