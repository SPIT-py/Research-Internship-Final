<!-- <html>
   <head>
     <title>Submit Button Redirect</title>  
   </head>    
    <body>     
     <form method="POST" action="inputimage.blade.php">  
       <input type="submit"/>  
     </form>    
    </body>    
</html> -->
<!-- <html>    
   <body> 
    
     <a href="C:\Users\sidev\Desktop\Text&Speech_analysis\resources\views\inputimage.blade.php">  
      <input type="submit"/>  
     </a>
    
   </body>    
</html> -->
<html>
    
    <body> 
    <div>
    <form action="image_inp" method="POST" class="form">
                    @csrf
                    
                    <input type="submit" class="label " name="submit" id="submit"><hr id="hr">

                </form> 
    </div>
    <!--
    <form action="memes" method="POST">  
       @csrf
        <input type="submit"/>  
     </form>
-->
    </body>
    
  </html>
