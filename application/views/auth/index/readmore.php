<br>
    <br>
        <br>
    <br>

<div class="container">

    <div class="row">
    
        <div class="col-md-8 ml-auto mr-auto">
        
            <div class="card">
            
                <div class="container">
                
                    <div class="mt-3 mb-3">
                    
                        <p class="text-primary"><?= $title;?></p>
                        <p class="small text-muted"><?= $time;?></p>
                    
                    </div>

                    <div class="text-center mb-3">
                        <img src="<?= base_url();?>thumbnail/<?= $thumbnail;?>" class="img-fluid" alt="Responsive image">
                    </div>

                    <div class="text-justify small">
                        <p><?= $content;?></p>
                    </div>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>

<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>

<script>

    $(function(){
        $('body').on('contextmenu', function(e){
            return false;
        })
    })

</script>