<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse border border-right">
    <div class="position-sticky pt-3">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-dark-emphasis<?php echo e(Request::is('dashboard') ? 'active' : ''); ?>" aria-current="page" href="/dashboard">
                    <i class="bi bi-buildings-fill"></i>Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-dark-emphasis<?php echo e(Request::is('dashboard/user*') ? 'active' : ''); ?>" aria-current="page" href="/dashboard/user">
                    <i class="bi bi-person-circle"></i>User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-dark-emphasis<?php echo e(Request::is('dashboard/contact*') ? 'active' : ''); ?>" aria-current="page" href="/dashboard/contact">
                    <i class="bi bi-person-lines-fill"></i>Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 text-dark-emphasis<?php echo e(Request::is('dashboard/address') ? 'active' : ''); ?>" aria-current="page" href="/dashboard/addresss">
                    <i class="bi bi-houses"></i>Address</a>
                </li>
            </ul>
            <hr class="my-7">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="nav-link d-flex align-items-center gap-2 text-dark-emphasis"><i class="bi bi-door-closed"></i>Logout</button>
                    </form>
                </li>
            </ul>
    </div>
</nav>
<?php /**PATH D:\DATA CODE\PHP\01-laravel\tugasapi\resources\views/dashboard/layouts/sidebar.blade.php ENDPATH**/ ?>