<?php
 echo '
 <h1 class="landmessage display-3">ACCOUNT PANEL</h1>
 <div id="accountpanel">
    <div class="row">
       <div class="col-md-4"></div>
       <div class="col-md-4">
          <h3 class="landmessage">Username: '.$_SESSION['username'].'</h3>
          <h3 class="landmessage">Full name: '.$_SESSION['fullname'].'</h3>
          <h3 class="landmessage">Email: '.$_SESSION['email'].'</h3>
          <h3 class="landmessage">Phone: '.$_SESSION['phone'].'</h3>
          <h3 class="landmessage">Account Type: '.$_SESSION['account_type'].'</h3>
          <br>
       </div>
       <div class="col-md-4"></div>
    </div>
 </div>
 <div class="row">
    <div class="col-md-12">
       <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
         <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="BookNow">
               <h4 class="panel-title">
                  <a id="linkCollapseZero" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                  Update Your Account
                  </a>
               </h4>
            </div>
            <div id="collapseZero" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="BookNow">
               <div class="panel-body">
  ';
  require 'accountUpdateForm.php';
  echo '
               </div>
            </div>
         </div>
          <div class="panel panel-default">
             <div class="panel-heading" role="tab" id="BookNow">
                <h4 class="panel-title">
                   <a id="linkCollapseOne" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                   Reservation Form
                   </a>
                </h4>
             </div>
             <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="BookNow">
                <div class="panel-body">
';
require 'bookings/bookingForm.php';
echo '
                </div>
             </div>
          </div>
          <div class="panel panel-default">
             <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                   <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                   View Your Reservations
                   </a>
                </h4>
             </div>
             <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
';
require 'bookings/bookingsTable.php';
echo '
                </div>
             </div>
          </div>
';
if((isset($_SESSION['account_type']))&&($_SESSION['account_type']=='ADMIN'))
require 'admin/adminpanel.php';
echo '
       </div>
    </div>
 </div>
';
