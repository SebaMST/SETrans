<?php
echo '
<div id="accountUpdate" class="section landmessage">
   <div class="section-center">
      <div class="container">
         <div class="row">
            <div class="booking-form">
               <div class="form-header">
                  <h1>Account settings</h1>
                  <h4>(*)A blank field means it will remain unchanged</h4>
               </div>
               <form action="customer/accountUpdate.inc.php" method="post">
                  <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <span class="form-label">Username</span>
                          <input class="form-control" name="username" type="text" placeholder="Enter your username" value="'.$_SESSION['username'].'" readonly>
                       </div>
                    </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <span class="form-label">Email</span>
                           <input class="form-control" name="email" type="email" placeholder="Enter your email" value="'.$_SESSION['email'].'" readonly>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                         <span class="form-label">Old name</span>
                         <input class="form-control" name="oldname" type="text" placeholder="Enter your name" value="'.$_SESSION['fullname'].'" disabled>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                         <span class="form-label">New name</span>
                         <input class="form-control" name="fullname" type="text" placeholder="Enter your new name">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                       <div class="form-group">
                          <span class="form-label">Old phone</span>
                          <input class="form-control" name="oldphone" type="text" placeholder="Enter your phone" value="'.$_SESSION['phone'].'" disabled>
                       </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                         <span class="form-label">New phone</span>
                         <input class="form-control" name="phone" type="text" placeholder="Enter your new phone">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                         <span class="form-label">New Password</span>
                         <input class="form-control" name="newpassword" type="password" placeholder="Enter your new password">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                         <span class="form-label">Confirm New Passowrd</span>
                         <input class="form-control" name="confirm-newpassword" type="password" placeholder="Confirm your new passowrd">
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                       <span class="form-label">Current Password</span>
                       <input class="form-control" name="password" type="password" placeholder="Please enter your actual password for the account update validation" required>
                  </div>

                  <div class="form-btn">
                     <button name= "accountUpdate-submit" id="accountUpdate-submit" class="submit-btn">Update Account</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
';
