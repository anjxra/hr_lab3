<h1>Welcome, <?php echo e(auth()->user()->name); ?>!</h1>
<p>You are logged in as <?php echo e(auth()->user()->email); ?></p>

<form method="POST" action="/logout">
    <?php echo csrf_field(); ?>
    <button type="submit">Logout</button>
</form><?php /**PATH C:\Users\tomoe\Desktop\hr_lab3\resources\views/dashboard.blade.php ENDPATH**/ ?>