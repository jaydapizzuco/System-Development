<!DOCTYPE html>
<html lang="en">

<head>
    <title>Movie Theatre</title>
    <link href="movie.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>

<!-- Navigation Bar -->
<nav>
    <a href="account.html">Account</a> &nbsp&nbsp
    <a href="aboutus.html">About Us</a> &nbsp&nbsp
    <a class="active" href="movies.html">Movies</a>
</nav>

<body>

    <!-- Header Section-->
    <header>
        <h1>Account</h1>
    </header><br><br>

    <!-- Register Section -->
    <div class="container">
        <br><h2>Create an Account</h2><br>

        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" name="password" placeholder="Password" required>
            </div><br>

            <div class="form-group">
                <input type="text" class="form-control" name="confirmpassword" placeholder="Confirm password" required>
            </div><br>

            <div class="form-group">
                <input type="submit" name="action" value="Register"/><br><br>
                <a href="/User/register">Login</a>
            </div><br>
            
        </form>
    </div>

    <footer>
        <br>Copyright &copy 2024 
    </footer>
</body>

</html>