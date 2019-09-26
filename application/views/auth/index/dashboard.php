<br>
    <br>
        <br>
    <br>

<div class="container">

    <div class="row">

        <div class="col-md-12 ml-auto mr-auto">
        
            <div class="alert alert-primary" role="alert">
                <p class="text-center" mt-3 mb-3><b>Dashboard</b></p>
                <p class="small text-center">Here you can manage your post content by delete, update, or just read it.</p>
            </div>
        
        </div>

    </div>

</div>

<div class="container">

    <div class="row">
    
        <div class="col-md-12 ml-auto mr-auto">
        
            <div class="card">
            
                <div class="container mt-3 mb-3">
                
                    <?php

                        $this->db->select('*');
                        $query = $this->db->get('news');
                        if($query->num_rows() > 0)
                        {
                            foreach($query->result() as $row)
                            {
                                $keyid = $row->keyid;
                                $title = $row->title;
                    ?>

                            <table class="table">
                                <thead class="bg-dark text-white">
                                    <tr>
                                        <th scope="col">keyid</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><p class="small"><?= $keyid;?></p></td>
                                        <td><p class="small"><?= $title;?></p></td>
                                        <td>

                                            <div class="btn-group-vertical">

                                                <form action="readmore" method="get">
                                                    <input type="hidden" name="keyid" value="<?= $keyid;?>">
                                                    <button type="submit" class="btn btn-sm btn-primary"><img src="<?= base_url();?>assets/img/read.png" width="25" height="25" alt="read"></button>
                                                </form>

                                                <form action="update" method="post">
                                                    <input type="hidden" name="keyid" value="<?= $keyid;?>">
                                                    <button type="submit" class="btn btn-sm btn-success"><img src="<?= base_url();?>assets/img/edit.png" width="25" height="25" alt="edit"></button>
                                                </form>

                                                <form action="delete" method="post">
                                                    <input type="hidden" name="keyid" value="<?= $keyid;?>">
                                                    <button type="submit" class="btn btn-sm btn-danger"><img src="<?= base_url();?>assets/img/delete.png" width="25" height="25" alt="delete"></button>
                                                </form>

                                            </div>
                                          
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                    <?php
                            }
                        } else {
                    ?>

                            
                                <div class="container mt-3 mb-3">
                                
                                    <div class="text-center">
                                    
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

</div>

<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>

<script>

    $(function(){
        $('body').on('contextmenu', function(e){
            return false;
        })
    })

</script>