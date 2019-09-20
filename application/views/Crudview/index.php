    </div>
</div>
<div class="container"> 
    <h2>Crud Operations</h2>
    <?php 
        if($this->session->flashdata('success_msg')){
    ?>
        <div class="alert alert-success">
            <?php echo $this->session->flasdata('success_msg');?>
        </div>
        <?php 
                }
        ?>
    <a href="<?php echo base_url('Crud/add'); ?>" class="btn btn-primary">Add New </a>

    <table class="table table-border table-responsive">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Contact</td>
                <td>Action</td>
            </tr>
        </thead>
        <?php 
        if($users){
            foreach($users as $user){
        ?>
        <tbody>
            <tr>
                <td><?php echo $user->id;?></td>
                <td><?php echo $user->name;?></td>
                <td><?php echo $user->email;?></td>
                <td><?php echo $user->contactno;?></td>
                <td>
                <a href="<?php echo base_url('Crud/edit/'.$user->id); ?>" class="btn btn-info">Edit </a>
                <a href="<?php echo base_url('Crud/delete/'.$user->id); ?>" class="btn btn-danger" onclick="return confirm('Do you really want to delete?')">Delete </a>

                </td>
            </tr>
            <?php 
                        }
                    }
            ?>

        </tbody>
</table>
</div>

    
</body>
</html>