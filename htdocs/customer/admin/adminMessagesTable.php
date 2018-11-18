<?php
echo '
<table id="adminMessagesTable" class="table table-sm table-hover landmessage table-striped table-dark">
   <thead>
      <tr>
         <th scope="col">#<span style="margin-left: 5px;"></span></th>
         <th scope="col">Message ID<span style="margin-left: 5px;"></span></th>
         <th scope="col">From</th>
         <th scope="col">Email</th>
         <th scope="col">Phone</th>
         <th scope="col">Date sent</th>
         <th scope="col">Message</th>
         <th scope="col">Operation</th>
      </tr>
   </thead>
   <tbody id="adminMessagesTableBody">';
   require 'conectare.php';
   $sql = "SELECT * FROM contactus";
   $result = mysqli_query($conn,$sql);
   $x=1;
   while($row=mysqli_fetch_assoc($result))
   {
   echo '
     <tr>
        <td>
           '.$x.'
           <form action="../customer/deleteMessage.inc.php" method="post" id="formdelmes'.$x.'"></form>
        </td>
        <td>'.$row['messageid'].'
          <input form="formdelmes'.$x.'" type="text" name="messageid" value="'.$row['messageid'].'" readonly hidden/>
        </td>
        <td>'.$row['name'].'</td>
        <td>'.$row['email'].'</td>
        <td>'.$row['phone'].'</td>
        <td>'.$row['date'].'</td>
        <td>'.$row['message'].'</td>
        <td>
           <input form="formdelmes'.$x.'" class="btn btn-secondary bossbtn" style="padding: 0px 3px; margin: 0px" type="submit" value="Delete">
        </td>
     </tr>
   ';
   $x++;
   }
echo '
   </tbody>
</table>
';
