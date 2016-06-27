<?php
if (!defined('WEB_ROOT')) {
	exit;
}

?> 
<p class="errorMessage">&nbsp;</p>
<form action="processMedicine.php?action=add" method="post" enctype="multipart/form-data" name="frmAddMedicine" id="frmAddMedicine">

 <table width="100%" border="1" align="center" cellpadding="5" cellspacing="1" class="entryTable">
  <tr> 
   <td >Medicine Name:</td>
   <td class="content"> <input name="txtName" type="text" class="box" id="txtName" size="50" maxlength="50"></td>
  </tr>
  
  <tr> 
   <td >For:</td>
   <td class="content"> <input name="txtFor" type="text" class="box" id="txtFor" size="50" maxlength="50"></td>
  </tr>
    <tr> 
   <td valign="top">Description:</td>
   <td class="content"> <textarea name="mtxDescription" cols="100" rows="10" class="box" id="mtxDescription"></textarea></td>
  </tr>
  <tr> 
  <tr> 
   <td >Quantity:</td>
   <td class="content"> <input name="txtQnty" type="text" id="txtQnty" size="10" maxlength="10" class="box" onKeyUp="checkNumber(this);">
</td>
  </tr>

      
 
 </table>
                       <br>
                       <br>
                       <br>
                       <br>     
 
 <div align="center" class="content"> 
  <input name="btnAddMedicine" type="button" id="btnAddMedicine" value="Add Medicine" onClick="checkAddMedicineForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </div>
</form>