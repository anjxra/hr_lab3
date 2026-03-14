<form method="POST" action="/register">
    <?php echo csrf_field(); ?>
    <input name="name" placeholder="Name" required>
    <input name="email" type="email" placeholder="Email" required>
    <input name="password" type="password" placeholder="Password" required>
    <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
    <button type="submit">Register</button>
</form><?php /**PATH C:\Users\tomoe\Desktop\hr_lab3\resources\views/auth/register.blade.php ENDPATH**/ ?>