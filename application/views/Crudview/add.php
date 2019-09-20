</div>
</div>
<div class="container"> 
    <h2>Crud Operations</h2>
    <a href="<?php echo base_url('Crud/crudController'); ?>" class="btn btn-default">Back </a>
    <h2>Add New User</h2>
    <form action="<?php echo base_url('Crud/submit'); ?>" method="post" class="form-horizontal">
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Name</label>
            <div class="col-md-4">
                <input type="text" name="uname" class="form=control" required >
            </div>
        </div>

        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Email Address</label>
            <div class="col-md-4">
                <input type="email" name="email" class="form=control" required >
            </div>
        </div>
        
        <div class="form-group">
            <label for="title" class="col-md-2 text-right">Contact No.</label>
            <div class="col-md-4">
                <input type="text" name="cno" class="form=control" required >
            </div>
        </div>

        <div class="form-group">
            <label for="title" class="col-md-2 text-right"></label>
            <div class="col-md-4">
                <input type="submit" name="btnSave" class="btn btn-primary" vlaue="Save" >
            </div>
        </div>

    </form>

