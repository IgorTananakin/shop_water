
<html>
  <head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Ajax Example</title>
     
     
    
     
     <script>
       $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
        function getMessage(){
           $.ajax({
              type:'GET',
              url:'/getmsg',
              data:{id: '123'},
              success:function(data){
                 $("#msg").html(data.msg);
              }
           });
        }
     </script>

  </head>
  
  <body>
     <div id = 'msg'>This message will be replaced using Ajax. 
        Click the button to replace the message.</div>
     <?php
        echo Form::button('Replace Message',['onClick'=>'getMessage()']);
     ?>
  </body>
 <script src = "//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
</html>