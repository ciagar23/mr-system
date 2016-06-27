<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT m_id, m_name, m_for, m_desc, m_qnty FROM tbl_medicine where m_name like '%$search%'
		ORDER BY m_name";
$result = dbQuery($sql);

?> 

  <div class="row-fluid">
                        <!-- START Basic Table -->
                        <div class="span12 widget dark stacked">
                            <header>
                                <h4 class="title">Medicine</h4>
                                <!-- START Toolbar -->

                                    </li>
                              </ul>
                                <!--/ END Toolbar -->
                            </header>
                            <section class="body">
                                <div class="body-inner no-padding">
                                
                                
                                
                                
                                
                                
                                
                                <form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">


 <table width="95%" border="0" align="center" cellpadding="2" cellspacing="1" class="table">
    
  
  <tr align="center" id="listTableHeader"> 
   <th>Med Name:</td>
   <th>For:</td>
   <th>Quantity:</td>
   <th width="120">Modify:</td>
   <th width="70">Delete:</td>
  </tr>
<?php
while($row = dbFetchAssoc($result)) {
	extract($row);
	
	if ($i%2) {
		$class = 'row1';
	} else {
		$class = 'row2';
	}
	
	$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td><?php echo $m_name; ?> </td>
   <td><?php echo $m_for; ?> </td>
   <td><?php echo $m_qnty; ?> </td>
   
   <td width="120" align="center"><a href="javascript:changePassword(<?php echo $user_id; ?>);" class="ico edit">Modify</a></td>
   <td width="70" align="center"><a href="javascript:deleteUser(<?php echo $user_id; ?>);" class="ico del">Delete</a></td>
  </tr>
<?php
} // end while

?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
   <td colspan="5" align="right">
   <div class="content"><input name="btnAddMedicine" type="button"  value="Add Medicine" class="add-button" onClick="addMedicine()"></div></td>
  </tr>
 </table>
                                </div>
                            </section>
                        </div>
                        <!--/ END Basic Table -->
                    </div>
                    <!--/ END Row -->

					<!-- Table -->
					<div class="table">

 <p>&nbsp;</p>
</form>
</div>