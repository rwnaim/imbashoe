<div class="alert alert-<?php echo $success === true ? 'success' : 'danger'; ?>">
    <?php echo $message; ?>
</div>

<?php echo $this->tag->linkTo(['Produk/list', 'Go back', 'class' => 'btn btn-primary']); ?>