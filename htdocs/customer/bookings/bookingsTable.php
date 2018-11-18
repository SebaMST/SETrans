<?php
echo '
<table id="bookingsTable" class="table table-sm table-hover landmessage table-striped table-dark">
   <thead>
      <tr>
         <th scope="col">#<span style="margin-left: 5px;"></span></th>
         <th scope="col">Order ID<span style="margin-left: 5px;"></span></th>
         <th scope="col">Price</th>
         <th scope="col">Pickup</th>
         <th scope="col">Destination</th>
         <th scope="col">Date</th>
         <th scope="col">Seats<span style="margin-left: 5px;"></span></th>
         <th scope="col">Comfort<span style="margin-left: 5px;"></span></th>
         <th scope="col">Details</th>
         <th scope="col">Operation</th>
      </tr>
   </thead>
   <tbody id="bookingTableBody">';
   require 'conectare.php';
   $sql = "SELECT * FROM bookings WHERE email='".$_SESSION['email']."'";
   $result = mysqli_query($conn,$sql);
   $x=1;
   while($row=mysqli_fetch_assoc($result))
   {
   $price=$row['seats']." * distance[km]";
   echo '
     <tr>
        <td>
           '.$x.'
           <form action="customer/modifyBooking.php" target="blank" method="post" id="formmod'.$x.'"></form>
           <form action="customer/deleteBooking.inc.php" method="post" id="formdel'.$x.'"></form>
        </td>
        <td>'.$row['id'].'
           <input form="formmod'.$x.'" type="text" name="id" value="'.$row['id'].'" readonly hidden/>
           <input form="formdel'.$x.'" type="text" name="id" value="'.$row['id'].'" readonly hidden/>
           <input form="formmod'.$x.'" type="text" name="name" value="'.$row['name'].'" readonly hidden/>
           <input form="formmod'.$x.'" type="text" name="email" value="'.$row['email'].'" readonly hidden/>
           <input form="formmod'.$x.'" type="text" name="phone" value="'.$row['phone'].'" readonly hidden/>
        </td>
        <td>'.$price.'</td>
        <td>'.$row['pickup'].'</td>
        <td>'.$row['destination'].'</td>
        <td>'.$row['date'].'</td>
        <td>'.$row['seats'].'</td>
        <td>'.$row['comfort'].'</td>
        <td>'.$row['details'].'</td>
        <td><input form="formmod'.$x.'" class="btn btn-secondary bossbtn" style="padding: 0px 3px; margin: 0px" type="submit" value="Modify">
           <input form="formdel'.$x.'" class="btn btn-secondary bossbtn" style="padding: 0px 3px; margin: 0px" type="submit" value="Delete">
        </td>
     </tr>
   ';
   $x++;
   }
echo '
   </tbody>
</table>
';
