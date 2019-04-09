<div class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
        <div class="col-12 text-center">
            <h1 class="heading-font">Articles</h1>
        </div>
        </div>
    </div>
</div>


</div>

<div class="container layout mb-5">
<?php if($results): ?>
<?php foreach($results as $row): ?>
    
    <div class="row">
        <div class="col">
            <div class="card mt-4" style="width: 18rem;">
                <img class="card-img-top" src="../pictures/mamba.jpg" alt="Card image cap">
                <div class="card-body">
                <h3><?php echo $row->letter; ?></h3>
                <a href="<?php echo base_url(); ?>article/detail/<?php echo $row->lid; ?>" class="btn btn-success btn-sm">Read More....</a>
                </div>
            </div> 
        </div>
    </div>
    

<?php endforeach; ?>
<?php endif; ?>
</div>