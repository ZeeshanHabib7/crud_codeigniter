</div>
</div>
<div class="container"> 
    <h2>Crud Operations</h2>
    <h2>Edit User</h2>
    <input type="hidden" name="txt_hidden" value ="<?php echo $user->id ?>" >
    <a href="<?php echo base_url('Crud/crudController'); ?>" class="btn btn-default">Back </a>
    <form action="<?php echo base_url('Crud/update'); ?>" method="post" class="form-horizontal">
    <input type="hidden" name="txt_hidden" value="<?php echo $user->id; ?>">
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Name</label>
            <div class="col-md-4">
                <input type="text" name="uname" value ="<?php echo $user->name ?>" class="form=control" required >
            </div>
        </div>

        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Email Address</label>
            <div class="col-md-4">
                <input type="email" name="email" value ="<?php echo $user->email ?>" class="form=control" required >
            </div>
        </div>
        
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Contact No.</label>
            <div class="col-md-4">
                <input type="text" name="cno" value ="<?php echo $user->contactno ?>"class="form=control" required >
            </div>
        </div>

        <div class="form-group">
            <label for="title" class="col-md-2 text-right"></label>
            <div class="col-md-4">
                <input type="submit" name="btnUpdate" class="btn btn-primary" vlaue="Update" >
            </div>
        </div>

    </form>

