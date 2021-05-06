<?php
$user_id = 55; 
?>
<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type = "text/javascript">

function my_button ( $user_id ){
     $.ajax( { 
        type    : "POST",
        data    : { "my_id" : $user_id }, 
        url     : "update_value.php",
        success : function (data){
             alert( data );
                },
        error   : function (xhr){
             alert( "error" );
                }
        });
}
    </script>
  </head>
  <body>
    <button onclick="my_button('<?php echo $user_id;?>')">Click Here</button>
    <p><a href="/">Retour</a></p>
  </body>
</html>
