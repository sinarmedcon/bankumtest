<br>
    <br>
        <br>
    <br>

<div class="container">

    <div class="row">
    
        <div class="col-md-8 ml-auto mr-auto">
        
            <div class="alert alert-primary" role="alert">
                <p class="text-center" mt-3 mb-3><b>Write An Article</b></p>
            </div>

            <div class="card">
            
                <div class="container mt-3 mb-3">

                    <div class="text-center">
                        <h6 class="text-danger"><?= $error;?></h6>
                        <h6 class="text-success"><?= $success;?></h6>
                    </div>

                    <form action="update_process" method="post" enctype="multipart/form-data">
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Title</label>
                            <?php
                                if(form_error('title'))
                                {
                            ?>
                                    <div class="small alert alert-danger"><?= form_error('title');?></div>
                            <?php
                                }
                            ?>
                            <input type="text" name="title" class="form-control" placeholder="Article title..." value="<?= $title;?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Thumbnail</label>
                            <div class="custom-file">
                                <input type="file" name="thumbnail" class="custom-file-input" value="<?= $thumbnail;?>">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Content</label>
                            <?php
                                if(form_error('content'))
                                {
                            ?>
                                    <div class="small alert alert-danger"><?= form_error('content');?></div>
                            <?php
                                }
                            ?>
                            <textarea name="content" class="form-control ckeditor"><?= $content;?></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-outline-primary">Update</button>
                        </div>
                    
                    </form>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>

<script type="text/javascript" src="<?= base_url();?>assets/ckeditor/ckeditor.js"></script>

<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>

<script>

    $(function(){
        $('body').on('contextmenu', function(e){
            return false;
        })
    })

</script>