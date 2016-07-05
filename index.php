<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Rest Browser</title>
       
         
               <script type="text/javascript"  src="./js/jquery-3.0.0.min.js"></script>
               <script type="text/javascript"  src="./js/myscript.js"></script>
        
       
    </head>
    
    
    <body>
    <!--<form id="SearchForm">-->
    <form id="SearchForm" method="GET"  action="http://localhost:8080/RestFull_service/app/Getlinks">
    
            <input type="text" name="search" id="search" />
            
            <input type="submit" id="send"/>
                
    </form>
        
        
    <div id="result">
        
    </div>
 
    </body>
</html>
