<?php
echo '
<table id="adminBookingsTable" class="table table-sm table-hover landmessage table-striped table-dark">
   <thead>
      <tr>
         <th scope="col">#<span style="margin-left: 5px;"></span></th>
         <th scope="col">Order ID<span style="margin-left: 5px;"></span></th>
         <th scope="col">Price</th>
         <th scope="col">Name</th>
         <th scope="col">Email</th>
         <th scope="col">Phone</th>
         <th scope="col">Pickup</th>
         <th scope="col">Destination</th>
         <th scope="col">Date</th>
         <th scope="col">Seats<span style="margin-left: 5px;"></span></th>
         <th scope="col">Comfort<span style="margin-left: 5px;"></span></th>
         <th scope="col">Details</th>
         <th scope="col">Operation</th>
      </tr>
   </thead>
   <tbody id="adminBookingsTableBody">';
   require 'conectare.php';
   $sql = "SELECT * FROM bookings";
   $result = mysqli_query($conn,$sql);
   $x=1;
   while($row=mysqli_fetch_assoc($result))
   {
   $price=$row['seats']." * distance[km]";
   echo '
     <tr>
        <td>
           '.$x.'
           <form action="../customer/modifyBooking.php" target="_blank" method="post" id="formmodadm'.$x.'"></form>
           <form action="../customer/deleteBooking.inc.php" method="post" id="formdeladm'.$x.'"></form>
        </td>
        <td>'.$row['id'].'
          <input form="formmodadm'.$x.'" type="text" name="id" value="'.$row['id'].'" readonly hidden/>
          <input form="formdeladm'.$x.'" type="text" name="id" value="'.$row['id'].'" readonly hidden/>
        </td>
        <td>'.$price.'</td>
        <td>'.$row['name'].'
          <input form="formmodadm'.$x.'" type="text" name="name" value="'.$row['name'].'" readonly hidden/>
        </td>
        <td>'.$row['email'].'
          <input form="formmodadm'.$x.'" type="text" name="email" value="'.$row['email'].'" readonly hidden/>
        </td>
        <td>'.$row['phone'].'
          <input form="formmodadm'.$x.'" type="text" name="phone" value="'.$row['phone'].'" readonly hidden/>
        </td>
        <td>'.$row['pickup'].'</td>
        <td>'.$row['destination'].'</td>
        <td>'.$row['date'].'</td>
        <td>'.$row['seats'].'</td>
        <td>'.$row['comfort'].'</td>
        <td>'.$row['details'].'</td>
        <td><input form="formmodadm'.$x.'" class="btn btn-secondary bossbtn" style="padding: 0px 3px; margin: 0px" type="submit" value="Modify">
           <input form="formdeladm'.$x.'" class="btn btn-secondary bossbtn" style="padding: 0px 3px; margin: 0px" type="submit" value="Delete">
        </td>
     </tr>
   ';
   $x++;
   }
echo '
   </tbody>
</table>
';
