<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
		<style>
		.tokan_add{
		 width: 810px;
         margin-left: 278px;
         border: 1px #000000 solid;
		}
		</style>
		
    </head>
    <body>
	<div class="tokan_add">
	  <form id="form" action="test_get.php" method="post">
		<div class="form-group">
		<label for="name">NAME</label>
		<input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required />
		</div>
		<div class="form-group">
		<label for="email">EMAIL</label>
		<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
		</div>
		
		<div class="form-group">
		<div class="col-md-6">
		<label for="name">START DATE</label>
		<input type="date" class="form-control" id="sdate" name="sdate"  required />
		</div>
		<div class="col-md-6">
		<label for="email">END DATE</label>
		<input type="date" class="form-control" onblur="DateCheck()" id="edate" name="edate" onblur="DateCheck()" required />
		</div>
		</div>
		
        <div class="form-group">
		<label for="email">Descrption</label>
		<input type="textarea" class="form-control" id="discrption" name="discrption" placeholder="Enter discrption" required />
		</div>
		<div class="form-group">
		<label for="email">Tokan</label>
		<input type="button" class="form-control" id="tokan" value="Add Tokan" />
		</div>
		<div class="form-group" style="display: none;" id="show_tk">
		
		  <table class="table table-bordered" id="dynamiic_field">
		   <tr>
		   <td>Tokan No</td>
		   <td>Tokan Rs</td>
		   <td>Tokan Value</td>
		   <td>Actoin</td>
		   </tr>
		   <tr>
			<td>
			  <input name="tokan_noa[]" type="text" class="inputext" value=""  style="cursor: text" id="tokan_no" />
			</td>
			<td>
			  <input name="tokan_Rsa[]" type="text" class="inputext" value=""  style="cursor: text" id="tokan_Rs" />
			</td>
			<td>
			  <input name="tokan_valuea[]" type="text" class="inputext" value=""  style="cursor: text" id="tokan_value" />
			</td>
			<td>
			 <input name="Add" type="button" value="Save" id="add"/>
		   </td>
		   </tr>
		   </table>
		
		</div>
		
		<input class="btn btn-success" type="submit" value="Submit">
	</form>
	</div>
	
      
    </body>
<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script-->
<script src="jquery.js"></script>

<script>
function DateCheck()
{
  var StartDate= document.getElementById('sdate').value;
  var EndDate= document.getElementById('edate').value;
  var eDate = new Date(EndDate);
  var sDate = new Date(StartDate);
  if(StartDate!= '' && StartDate!= '' && sDate> eDate)
    {
    alert("Please ensure that the End Date is greater than or equal to the Start Date.");
    return false;
    }
}
</script>

<script>
$(document).ready(function(){
	$("#tokan").click(function(){
		
		$("#show_tk").show();
	});
	
});
</script>
       <script>
        $(document).ready(function(){
			var i = 1;
			$('#add').click(function(){
			i++;	
			//alert($("#name").val());
			
			$('#dynamiic_field').append('<tr id="row'+i+'"><td><input name="tokan_no[]" type="text" class="inputext" style="cursor: text" id="tokan_no'+i+'" required/></td><td><input name="tokan_Rs[]" type="text" class="inputext" style="cursor: text" id="tokan_Rs'+i+'" required/></td><td><input name="tokan_value[]" type="text" class="inputext" style="cursor: text" id="tokan_value'+i+'" required/></td><td><input name="remove" type="button" value="remove" class="btn_remove" id="'+i+'"/></td></tr>');
			
			$('#tokan_no'+i+'').val($("#tokan_no").val());
			$('#tokan_Rs'+i+'').val($("#tokan_Rs").val());
			$('#tokan_value'+i+'').val($("#tokan_value").val());
			
			$('#tokan_no').val("");
			$('#tokan_Rs').val("");
			$('#tokan_value').val("");
			
			   $(document).on('click', '.btn_remove', function(){
				  var button_id = $(this).attr("id");
				  $('#row'+button_id+'').remove();
				
			   });
				
			});
			
		});
       </script>
    </html>
	