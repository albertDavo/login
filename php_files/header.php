<!-- Header -->
<header>

    <div class="container-fluid">
        <!-- Menu -->
        <nav class="menu">
            <form action="/php_files/login.php" method="POST">
                <!-- Input field -->
                <ul class="d-flex justify-content-end align-items-center m-0">
                    <li><input type="email" name="email" placeholder="Email" class="form-control" id="email" required>
                    </li>
                    <li class="d-flex flex-row"><input type="password" name='password' placeholder="password"
                            class="form-control" id="password" required>
                        <div class="d-flex"> <i class="far fa-eye" id="togglePassword"></i></div>
                    </li>
                    <li><button type="submit" name='login' class="btn btn-info" id="log-in">Log in</button></li>
                </ul>
            </form>
            <ul class="d-flex justify-content-end align-items-center m-0">
                <li><a href="">Forgot password?</a></li>
                <li><a href="/php_files/register.php">Register</a></li>
            </ul>

        </nav>
    </div>

</header>