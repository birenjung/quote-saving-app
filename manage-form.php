<?php
    session_start();   
   // session_destroy(); 
    if(isset($_POST['add-quote']))
    {
        $quote = $_POST['quote'];
        $source = $_POST['source'];    
        $date = $_POST['date'];

        if(isset($_SESSION['quote']))
        {
            $count = count($_SESSION['quote']);
            $_SESSION['quote'][$count] = array('quote'=>$quote, 'source'=>$source, 'date'=>$date) ;
           echo "<script>alert('Thanks! Your quote is added.');window.location.href='quotes.php'</script>";
           

        }
        else
        {
            $_SESSION['quote'][0] = array('quote'=>$quote, 'source'=>$source, 'date'=>$date) ;
           echo "<script>alert('Thanks! Your quote is added.');window.location.href='quotes.php'</script>";
          
           

        }       
        
    }

    if(isset($_POST['remove']))
    {
        foreach($_SESSION['quote'] as $key => $value)
        {
            if($_POST['quote'] == $value['quote'])
            {
                unset($_SESSION['quote'][$_POST['key']]) ;
                echo "<script>alert('Card Removed!!'); window.location.href='quotes.php'</script>";
            }
        }

    }

    
   
    

?>
