<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$search = (isset($_GET['search']) && $_GET['search'] > '') ? $_GET['search'] : '';

$sql = "SELECT user_id, user_name, user_regdate, user_last_login, user_fname, user_lname, user_position, user_department
        FROM tbl_user where user_name like '%$search%'
		ORDER BY user_name";
$result = dbQuery($sql);

?> 

  <div class="row-fluid">
                        <!-- START Basic Table -->
                        <div class="span12 widget dark stacked">
                            <header>
                                <h4 class="title">User</h4>
                                <!-- START Toolbar -->
                                <ul class="toolbar pull-right">
                                    <li><a href="./tables_files/tables.htm" class="link"><span class="icon icone-cog"></span></a></li>
                              <li class="">
                                        <a href="./tables_files/tables.htm" class="link" data-toggle="dropdown"><span class="icon icone-ellipsis-vertical"></span></a>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="./tables_files/tables.htm"><span class="icon icone-pencil"></span> Edit</a></li>
                                            <li><a href="./tables_files/tables.htm"><span class="icon icone-trash"></span> Delete</a></li>
                                            <li><a href="./tables_files/tables.htm"><span class="icon icone-cog"></span> Setting</a></li>
                                        </ul>
                                    </li>
                              </ul>
                                <!--/ END Toolbar -->
                            </header>
                            <section class="body">
                                <div class="body-inner no-padding">
                                
                                
                                
                                
                                
                                
                                
                                <form action="processUser.php?action=addUser" method="post"  name="frmListUser" id="frmListUser">


 <table width="95%" border="0" align="center" cellpadding="2" cellspacing="1" class="table">
    
  
  <tr align="center" id="listTableHeader"> 
   <th>User Name</td>
   <th width="120">Modify</td>
   <th width="70">Delete</td>
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
   <td><?php echo $user_fname; ?> <?php echo $user_lname; ?></b>,<?php echo $user_position; ?>, <?php echo $user_department; ?></td>
   
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
   <div class="content"><input name="btnAddUser" type="button"  value="Add User" class="add-button" onClick="addUser()"></div></td>
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