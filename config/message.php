<?php if(isset($_SESSION['error'])): ?>
    <div class="alert bg-danger">
        <p class="text-center text-white pt-3">
            <strong><?php echo $_SESSION['error'] ?></strong>
        </p>
    </div>
<?php endif; unset($_SESSION['error'])?>

<?php if(isset($_SESSION['warning'])): ?>
    <div class="alert bg-warning">
        <p class="text-center text-white pt-3">
            <strong><?php echo $_SESSION['warning'] ?></strong>
        </p>
    </div>
<?php endif; unset($_SESSION['warning'])?>

<?php if(isset($_SESSION['success'])): ?>
    <div class="alert bg-success">
        <p class="text-center text-white pt-3">
            <strong><?php echo $_SESSION['success'] ?></strong>
        </p>
    </div>
<?php endif; unset($_SESSION['success'])?>