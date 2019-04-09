
<h1>Read Article</h1>

<?php if($results): ?>
<?php foreach($results as $row): ?>

    <h3><?php echo $row->letter; ?></h3>
    <div class="alert alert-info">by <b><?php echo $row->username; ?></b></div>
    <div style="margin-bottom: 1rem;"><?php echo $row->description; ?></div>

    <?php if ($this->tank_auth->get_user_id() === $row->author_id) :?>
        <div style="margin-bottom: 1rem;"><a href="<?php echo base_url(); ?>article/edit/<?php echo $row->lid; ?>" class="btn btn-primary">Edit</a></div>
        <div style="margin-bottom: 1rem;"><a href="<?php echo base_url(); ?>article/delete/<?php echo $row->lid; ?>" class="btn btn-primary confirm">Delete</a></div>
    <?php endif; ?>

    

<?php endforeach; ?>
<?php endif; ?>