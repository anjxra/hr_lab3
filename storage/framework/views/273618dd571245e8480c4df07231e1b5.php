<form method="POST" action="/login">
    <?php echo csrf_field(); ?>
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form><?php /**PATH C:\Users\tomoe\Desktop\hr_lab3\resources\views/auth/login.blade.php ENDPATH**/ ?>