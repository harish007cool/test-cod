<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<div class="container">
<div class="row">
 
<div class="col-md-8">
 
<form id="form" >
<div class="form-group">
<label for="name">START DATE</label>
<input type="date" class="form-control" id="sdate" name="sdate"  required />
</div>
<div class="form-group">
<label for="email">END DATE</label>
<input type="date" class="form-control" onblur="DateCheck()" id="edate" name="edate"  required />
</div>
 
<input class="btn btn-success" type="submit" value="Upload">
</form>
 <hr>

</div>
</div>
</div>




<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
<script>
function DateCheck()
{
	alert("h2");
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

<?php
//$created = date('Y-m-d H:i:s');
?>