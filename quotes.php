<?php include("partials-front/header.php") ;?>      


    <div class="container text-center my-5 quotes-flex">
        <?php
        
            if(isset($_SESSION['quote']))
            {
                foreach($_SESSION['quote'] as $key => $value)
                {
                    ?>
                    <div class="card mb-3">        
              
                        <div class="card-body" style=" font-family: 'Arizonia', cursive;">                            
                            <p class="card-text">"<?php echo $value['quote'];?>"</p>
                            <p class="card-text"><small class="text-muted"><?php echo $value['source'];?></small></p>
                            <p class="card-text"><small class="text-muted"><?php echo $value['date'];?></small></p>
                            <form action="manage-form.php" method="POST">
                                 <button class="btn btn-outline-danger btn-sm" name="remove"><i class="fa-solid fa-trash"></i></button>
                                 <input type="hidden" name="quote" value="<?php echo $value['quote'];?>">
                                 <input type="hidden" name="key" value="<?php echo $key;?>">
                            </form>
                        </div> 
                        
                    </div>
                    <?php  

                }
            }
            if(empty($_SESSION['quote'])){
                ?>
                <div class="card mb-3" style="width:40%;"> 
                    <div class="card-body" style=" font-family: 'Arizonia', cursive;">                            
                            <p class="card-text">"Here you can view the quotations you wrote. Now there are no any quotations. Try by writing some in a given form at homepage."</p>
                            <p class="card-text"><small class="text-muted">Thank you!</small></p>                         
                            
                    </div> 
                </div>
                <?php
            }         
        ?>
        
    </div>
    
    
<?php include("partials-front/footer.php") ?>