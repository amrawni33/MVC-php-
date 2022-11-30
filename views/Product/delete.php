<?php include(VIEWS . 'inc' . DS . 'header.php'); ?>

<?php if (isset($success)) : ?>
    <h3 class="alert alert-success text-center"><?php echo $success; ?></h3>
<?php endif; ?>

<?php include(VIEWS . 'inc' . DS . 'footer.php') ?>