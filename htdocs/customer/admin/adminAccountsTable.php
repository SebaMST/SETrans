<?php
echo '
<table id="adminAccountsTable" class="table table-sm table-hover landmessage table-striped table-dark">
   <thead>
      <tr>
         <th scope="col">#<span style="margin-left: 5px;"></span></th>
         <th scope="col">Account ID<span style="margin-left: 5px;"></span></th>
         <th scope="col">Fullname</th>
         <th scope="col">Username</th>
         <th scope="col">Email</th>
         <th scope="col">Phone</th>
         <th scope="col">Time Created</th>
         <!-- <th scope="col">Operation</th> -->
      </tr>
   </thead>
   <tbody id="adminAccountsTableBody">';
   require 'conectare.php';
   $sql = "SELECT * FROM accounts";
   $result = mysqli_query($conn,$sql);
   $x=1;
   while($row=mysqli_fetch_assoc($result))
   {
   echo '
     <tr>
        <td>
           '.$x.'
           <form action="../customer/modifyAccount.php" target="_blank" method="post" id="formmodaccadm'.$x.'"></form>
           <form action="../customer/deleteAccount.inc.php" method="post" id="formdelaccadm'.$x.'"></form>
        </td>
        <td>'.$row['account_id'].'
          <input form="formmodaccadm'.$x.'" type="text" name="account-id" value="'.$row['account_id'].'" readonly hidden/>
          <input form="formdelaccadm'.$x.'" type="text" name="account-id" value="'.$row['account_id'].'" readonly hidden/>
        </td>
        <td>'.$row['fullname'].'
          <input form="formmodaccadm'.$x.'" type="text" name="fullname" value="'.$row['fullname'].'" readonly hidden/>
        </td>
        <td>'.$row['username'].'
          <input form="formmodaccadm'.$x.'" type="text" name="name" value="'.$row['username'].'" readonly hidden/>
        </td>
        <td>'.$row['email'].'
          <input form="formmodaccadm'.$x.'" type="text" name="email" value="'.$row['email'].'" readonly hidden/>
        </td>
        <td>'.$row['phone'].'
          <input form="formmodaccadm'.$x.'" type="text" name="phone" value="'.$row['phone'].'" readonly hidden/>
        </td>
        <td>'.$row['time_created'].'</td>
        <!-- <td><input form="formmodaccadm'.$x.'" class="btn btn-secondary bossbtn" style="padding: 0px 3px; margin: 0px" type="submit" value="Modify">
           <input form="formdelaccadm'.$x.'" class="btn btn-secondary bossbtn" style="padding: 0px 3px; margin: 0px" type="submit" value="Delete">
        </td> -->
     </tr>
   ';
   $x++;
   }
echo '
   </tbody>
</table>
';
