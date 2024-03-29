<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand nav-link" href="/home">LARAVEL 11 | API</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <?php if(auth()->guard()->check()): ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Welcome, <?php echo e(auth()->user()->name); ?>

                            </a>
                        </li>
                    </ul>
                <?php else: ?>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="/login" class="btn btn-secondary mx-2"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH D:\DATA CODE\PHP\01-laravel\tugasapi\resources\views/partials/navbar.blade.php ENDPATH**/ ?>