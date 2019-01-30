<html>
    <head>
        <title></title>
        
    </head>
    <body>
      <form name="form">
	  <table class="table table-bordered" id="dynamiic_field">
	  <tr>
	  <td>
        <input name="name[]" type="text" class="inputext" value=""  style="cursor: text" id="name" />
		</td>
		<td>
        
        <input name="Add" type="button" value="Add" id="add"/>
       </td>
	   </tr>
	   </table>
	</form>
    </body>
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
<script src="jquery.js"></script>
       <script>
        $(document).ready(function(){			
			var i = 1;
			$('#add').click(function(){
			i++;	
			alert($("#name").val());
			
			$('#dynamiic_field').append('<tr id="row'+i+'"><td><input name="name[]" type="text" class="inputext" style="cursor: text" id="name_ad'+i+'"/></td><td><input name="remove" type="button" value="remove" class="btn_remove" id="'+i+'"/></td></tr>');
			$('#name_ad'+i+'').val($("#name").val());
			   $(document).on('click', '.btn_remove', function(){
				  var button_id = $(this).attr("id");
				  $('#row'+button_id+'').remove();
				
			   });
				
			});
			
		});
       </script>
    </html>
	