<div class="topnav">
                
                
                <div class="search-container">
                <form action="upload.php" method="post" enctype="multipart/form-data">
                                
                                    
                                    <input type="file" name="file" >
                                    

                                    
                                    <input type="text" name="file" value="<?php echo $_SESSION['username']; ?>">
                               
                                   
                                    <input style="display:none;" type="text" name="id" value="<?php echo $_SESSION['UserID']; ?>">
                               
                              
                                    
                                    <input type="text" name="title" value="title">
                               
                               
                                    
                                    <input type="text" name="comment" value="comment">
                                                    
                                    <input name="submit" type="submit" value="submit">
                                    
                               
                            
                        </form>
                </div>
        </div>

<div class="" style=" text-align: center; ">
    
        
            <div id="customers">
               
                
                <?php include 'datamod.php';?>
            </div>    
            
      
        
</div>