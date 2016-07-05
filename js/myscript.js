

$(document).ready(function() {

    //alert("ready");
     
    //carga el historial
    
    /*    $("body").ready(function(){
           
         alert("body ready");   
      
        $.ajax({
            type        : 'GET',
            url         : 'fire.php',
            data        : 'GetHistory='+"get",                
            encode      : true
            
        })
        .done(function(data) {
              console.log(data);
        
            });
    })*/
       
      //guarda en la base de datos las palabras buscadas         
    
        $("#SearchForm").on("submit",function(e){
       
        //e.preventDefault(); 
        var searchs = $("#search").val();
           
           $.ajax({
            type        : 'GET',
            url         : './core/fire.php' ,
            data        :'search='+searchs,                
            encode      : true
            
        })
       
        .done(function(data) {
              console.log(data);
             
      
      //envia el formulario por ajax
       /*
       $.ajax({
            type        : 'GET',
            headers: {'Access-Control-Allow-Origin':'*'},
            url         : 'http://localhost:8080/RestFull_service/app/Getlinks' ,
            data        :'search='+searchs,                
            encode      : true,
            crossDomain: true
        })
                .done(function (data){
                    $("#result").append(data);
                    
                });*/
      
      
            });
            
        });
        
});


