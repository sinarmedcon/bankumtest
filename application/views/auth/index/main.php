<br>
    <br>
        <br>
    <br>

<div class="container">

    <div class="row">
    
        <div class="col-md-8 ml-auto mr-auto">
        
            <div class="alert alert-primary" role="alert">
                <p class="text-center" mt-3 mb-3><b>Welcome to Bankumtest</b></p>
            </div>
        
        </div>
    
    </div>

</div>

<div class="container">

    <div class="row">
    
        <div class="col-md-8 ml-auto mr-auto">
        
            <div class="card mb-3">
            
                <?php

                    $this->db->select('*');
                    $query = $this->db->get('news');
                    if($query->num_rows() > 0)
                    {
                        foreach($query->result() as $row)
                        {
                            $title = $row->title;
                            $content = substr($row->content,0, 250);
                            $thumbnail = $row->thumbnail;
                            $time = time_ago($row->time);
                            $keyid = $row->keyid;
                ?>

                            
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                
                                    <div class="container">
                                    
                                        <div class="mt-3 mb-3">
                                            <p class="text-primary"><b><?= $title;?></b></p>
                                            <p class="text-muted small"><?= $time;?></p>
                                        </div>
                                    
                                    </div>

                                    <img src="<?= base_url();?>thumbnail/<?= $thumbnail;?>" class="img-fluid" alt="Responsive image">

                                    <div class="container">
                                    
                                        <div class="text-justify small mt-3 mb-3">
                                        
                                            <p class="small"><?= $content;?>...</p>
                                            <form action="auth/readmore" method="get">
                                            
                                                <input type="hidden" name="keyid" value="<?= $keyid;?>">
                                                <button type="submit" class="btn btn-dark">Readmore...</button>
                                            
                                            </form>
                                        
                                        </div>
                                    
                                    </div>
                                
                                </li>
                            </ul>
                            

                <?php
                        }
                    } else {
                ?>

                        <div class="card">
                        
                            <div class="text-center mt-3 mb-3">
                            
                                <h5 class="text-muted">No post yet.</h5>
                            
                            </div>
                        
                        </div>

                <?php
                    }

                ?>
            
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