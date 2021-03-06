<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo $config['title']; ?></a>

    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/index.php">Home</a>
        </li><!-- /nav-item -->

        <?php if (isset($_SESSION['user'])) : ?>
            <li class="nav-item">
                <a class="nav-link" href="/post.php">Post</a>
            </li><!-- /nav-item -->
            <li class="nav-item">
                <a class="nav-link" href="/myPosts.php">My Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/app/users/logout.php">Logout</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/settings.php">Settings</a>
            </li>
            <img src="<?php if (isset($id)) {
                            echo getUserById($id, $pdo)['avatar'];
                        } ?>" class="avatar-navigation">
        <?php else : ?>
            <li class="nav-item">
                <a class="nav-link" href="/login.php">Login</a>
            </li>
            <li>
                <a class="nav-link" href="/register.php">Register</a>
            </li>
        <?php endif; ?>
    </ul><!-- /navbar-nav -->
</nav><!-- /navbar -->
