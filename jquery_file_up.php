<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<div class="container">
<div class="row">
 
<div class="col-md-8">
 
<form id="form" >
<div class="form-group">
<label for="name">NAME</label>
<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required />
</div>
<div class="form-group">
<label for="email">EMAIL</label>
<input type="text" class="form-control" id="sir" name="sir" placeholder="Enter sir" required />
</div>
 
<input id="uploadImage" type="file" accept="image/*" name="image" />
<input class="btn btn-success" type="submit" value="Upload">
</form>
 <hr>

</div>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<script>
$(document).ready(function (e) {
 $("#form").on('submit',(function(e) {
  e.preventDefault();
  $.ajax({
         url: "test_get.php",
         type: "POST",
         data:  new FormData(this),
         contentType: false,
         cache: false,
         processData:false,
   
         success: function (data) {
				  
				  console.log(data);
				}
   
               
    });
 }));
});
</script>


<!-- 
<script>
       jQuery(document).ready(function($){
	
		jQuery(document).on('click','#contact', function(){
			alert('test2');
			var Name = $('input[name="Name"]').val();
			  var Email = $('input[name="Email"]').val();
			  var Subject = $('input[name="Subject"]').val();
			  var Message = $('textarea[name="Message"]').val();
			  $.ajax({
				url: "<?php echo get_stylesheet_directory_uri(); ?>/contact_get_data.php",
				type: "post",
				data: { 'Name': Name, 'Email': Email, 'Subject': Subject, 'Message': Message },
				success: function (data) {
				  
				  console.log(data);
				}
			  });
		});
      });

    </script>
  -->