<?php include("partials-front/header.php") ?>

  <div class="container text-center my-5 quotes-flex">        
        <div class="card mb-3">                      
            <div class="card-body" style=" font-family: 'Arizonia', cursive;">                            
                <p class="card-text">"Write and save your best quotations about inspiration and motivation for yourself to go through sometimes. Only you can view them. They are not shared."</p>
                <p class="card-text"><small class="text-muted">Thank you!</small></p>                         
                
            </div>                    
        </div>         
  </div>

  <div class="container mb-5">
    <form class="write" action="manage-form.php" method="POST">
        <div class="mb-3">
            <div class="form-floating">
                <textarea class="form-control" name="quote" style="height: 125px" maxlength="255" required></textarea>
                <label for="floatingTextarea2">Write a quotaion.</label>
              </div>
          <div class="form-text" style=" font-family: 'Arizonia', cursive; font-size:1rem;">You are amazing!</div>
        </div>
        <div class="mb-3">
          <label class="form-label">By</label>
          <input type="text" class="form-control" name="source">
        </div>            
        <input type="hidden" name="date" value="<?php echo date('d-m-y'); ?>">
        <button type="submit" class="btn btn-primary" name="add-quote">Save</button>
    </form>
  </div>
<?php include("partials-front/footer.php") ?>



      