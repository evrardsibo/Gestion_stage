        
        <header>
            <a href="../dashboard.php" class="logo">Gestion Stage</a>
            <ul class="header-menu">
                <?php if ($currentuser): ?>
                    <li>
                    <a href="./auth-logout.php">Logout</a>
                    </li>
                 <?php else: ?>
                    <li class=<?= $_SERVER['REQUEST_URI'] === './projet_blog/auth-login.php' ? 'active' : '' ?>>
                        <a href="./auth-login.php">Add</a>
                    </li>
                 <?php endif; ?>    
            </ul>
        </header>