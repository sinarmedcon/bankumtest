<br>
    <br>
        <br>
    <br>
<div class="container">

    <div class="row">
    
        <!-- side bar menu -->
    
        <div class="col-md-3 ml-auto">

            <div class="card">
            
                <div class="card-header bg-dark">
                
                    <div class="text-center">
                    
                        <h5 class="text-white">Privacy</h5>
                    
                    </div>
                
                </div>
            
            </div>

            <div class="container">
                
                <ul class="list-group list-group-flush">

                    <!-- data policy -->
                    <li class="list-group-item" id="data-policy"><a href="#data-policy-card">Data Policy <img src="<?= base_url();?>assets/img/next.png" alt="next" width="25" height="25"></a></li>

                    <!-- using anglernap -->
                    <li class="list-group-item" id="using-anglernap"><a href="<?= base_url();?>help/D66276873">Using AnglerNap <img src="<?= base_url();?>assets/img/next.png" alt="next" width="25" height="25"></a></li>

                    <!-- manage your account -->
                    <li class="list-group-item" id="manage"><a href="<?= base_url();?>help/B8884784">Manage your account <img src="<?= base_url();?>assets/img/next.png" alt="next" width="25" height="25"></a></li>

                    <!-- problem solving and entry assistance -->
                    <li class="list-group-item" id="problem"><a href="<?= base_url();?>help/M98987487">Problem solving and entry assistance <img src="<?= base_url();?>assets/img/next.png" alt="next" width="25" height="25"></a></li>

                </ul>
            
            </div>
        
        </div>

        <!-- content side bar -->
        <div class="col-md-5 mr-auto">
        
            <div class="card">
            
                <div class="container">
                
                    <div class="text-center">
                    
                        <h6 class="text-primary mt-3 mb-3"><b>I can't SignIn</b></h6>

                    </div>

                    <div class="text-justify">
                    
                        <ul class="list-group list-group-flush">

                            <!-- forget password -->
                            <li class="list-group-item" id="forget-password">
                                <a href="#"><img src="<?= base_url();?>assets/img/next.png" alt="next" width="25" height="25"> What should i do if i forget my password ?</a>

                                <div class="card" id="forget_password">
                                
                                    <div class="container">
                                    
                                        <p class="small">If you forget your password you can reset your password using your email or get your password via email by send a request to us.</p>
                                    
                                    </div>
                                
                                </div>
                            </li>

                            <!-- reset password -->
                            <li class="list-group-item" id="reset-password">
                                <a href="#"><img src="<?= base_url();?>assets/img/next.png" alt="next" width="25" height="25"> What should i do if i forget my password ?</a>

                                <div class="card" id="reset_password">
                                
                                    <div class="container">
                                    
                                        <p class="small">Here are the steps if you want to reset your password.</p><br>
                                        <p class="small">1. click change password button <button class="btn btn-primary btn-sm">Change Password</button></p>
                                        <p class="small">2. fill the form we provided.</p>
                                        <p class="small">3. click send</p><br>
                                        <p class="small">your password have been changed</p>
                                    
                                    </div>
                                
                                </div>
                            </li>

                               <!-- send password -->
                               <li class="list-group-item" id="send-password">
                                <a href="#"><img src="<?= base_url();?>assets/img/next.png" alt="next" width="25" height="25"> How to send password request ?</a>

                                <div class="card" id="send_password">
                                
                                    <div class="container">
                                    
                                        <p class="small">We will send you an email containt your old password, but this option is not recomended. Here are the steps to do that.</p><br>
                                        <p class="small">1. click send password button <button class="btn btn-primary btn-sm">Send Password</button></p>
                                        <p class="small">2. input your email address to the form we provide.</p>
                                        <p class="small">3. click send button.</p>
                                    
                                    </div>
                                
                                </div>
                            </li>

                        </ul>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>
    
    </div>

</div>

<script type="text/javascript" src="<?= base_url();?>assets/js/jquery.js"></script>

<script>

    $(function(){
        $('#forget_password').hide();
        $('#forget-password').click(function(){
            $('#forget_password').show();
        })
    })

</script>

<script>

    $(function(){
        $('#reset_password').hide();
        $('#reset-password').click(function(){
            $('#reset_password').show();
        })
    })

</script>

<script>

    $(function(){
        $('#send_password').hide();
        $('#send-password').click(function(){
            $('#send_password').show();
        })
    })

</script>