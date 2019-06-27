
           <div id="load_data"></div>
           <div id="load_data_message"></div>
 
     </body>
     </html>
     
     
      
 
 <script>
   $(document).ready(function(){
 
     var limit = 10;
     var start = 0;
     var action = 'inactive';
     var user_id = document.getElementById('user_id').value;
     //alert(user_id);
     function lazzy_loader(limit)
     {
       var output = '';
       for(var count=0; count<limit; count++)
       {
         output += '<div class="post_data">';
         output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
         output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
         output += '</div>';
       }
       $('#load_data_message').html(output);
     }
 
     lazzy_loader(limit);
 
     function load_data(limit, start)
     {
       $.ajax({
         url:"<?php echo base_url('users/Public_Profile/fetch_posts'); ?>",
         method:"POST",
         data:{limit:limit, start:start, user_id:user_id},
         cache: false,
         success:function(data)
         {
           if(data == '')
           {
             $('#load_data_message').html('<h3 class="text-center">No More Post Found</h3>');
             action = 'active';
           }
           else
           { 
             $('#load_data').append(data);
             $('#load_data_message').html("");
             action = 'inactive';
           }
         }
       })
     }
 
     if(action == 'inactive')
     {
       action = 'active';
       load_data(limit, start);
     }
 
     $(window).scroll(function(){
       if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
       {
         lazzy_loader(limit);
         action = 'active';
         start = start + limit;
         setTimeout(function(){
           load_data(limit, start);
         }, 10);
       }
     });
 
   });
 </script>
 
 