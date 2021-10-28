<div class="container d-flex justify-content-center">
    <div class="container col-6 mt-5">
        <?php if(isset($info)) { ?>
        <div class="alert alert-info">
            <?php echo $info; ?>
        </div>
        <?php } ?>

        <?php if(isset($success)) { ?>
        <div class="alert alert-success">
            <?php echo $success; ?>
        </div>
        <?php } ?>

        <?php if(isset($error)) { ?>
        <div class="alert alert-danger">
            <?php echo $error; ?>
        </div>
        <?php } ?>
    </div>
</div>