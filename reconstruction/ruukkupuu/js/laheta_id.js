
$(function(){
 $('#yes').on('click', function(e){
   e.preventDefault();
   $('#yes').fadeOut(300);

   $.ajax({
     url: 'arvosteluohjelma/arvostele.php',
     type: 'post',
     data: {'action': 'follow', 'tuotenumero': '<?php echo $ed->tuotenumero; ?>','tuotenimi': '<?php echo $ed->tuotenimi; ?>'},
     success: function(data, status) {
       if(data) {
         console.log(data);
       }
     },
     error: function(xhr, desc, err) {
       console.log(xhr);
       console.log("Details: " + desc + "\nError:" + err);
     }
   }); // end ajax call
 });
});
