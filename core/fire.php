

<?php

include './HistorySearch.php';

   if(isset($_GET["search"])){

    $var = $_GET["search"];
    
    $save = new HistorySearchs();
    $save->SaveHistory($var);
    
}

     if(isset($_GET["GetHistory"])){
         $var2 = $_GET["GetHistory"];
         echo $var2;
         $save = new HistorySearchs();
      $save->GetHistorySearchs();
     }