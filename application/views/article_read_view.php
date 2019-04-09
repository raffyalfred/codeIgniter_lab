<div class="container mt-5">
<div class="col">
    <div class="row d-flex justify-content-center">
    <h1>Articles</h1>
    </div>
</div>

</div>

<?php if($results): ?>
<?php foreach($results as $row): ?>

    <h3><?php echo $row->letter; ?></h3>
    <a href="<?php echo base_url(); ?>article/detail/<?php echo $row->lid; ?>" class="btn btn-success btn-sm">Read More....</a>

<?php endforeach; ?>
<?php endif; ?>