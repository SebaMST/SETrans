<?php
echo '
<div id="booking" class="section landmessage">
   <div class="section-center">
      <div class="container">
         <div class="row">
            <div class="booking-form">
               <div class="form-header">
                  <h1>Book a car</h1>
               </div>
               <form action="customer/booking.inc.php" method="post">
                  <div class="form-group">
                     <span class="form-label">Name</span>
                     <input class="form-control" name="booking-name" type="text" placeholder="Enter your name" value="'.$_SESSION['fullname'].'"';
                     if(isset($_SESSION['account_type']))
                      if($_SESSION['account_type']=='USER')
                        echo ' disabled';
                     echo '>
                  </div>
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group">
                           <span class="form-label">Email</span>
                           <input class="form-control" name="booking-email" type="email" placeholder="Enter your email" value="'.$_SESSION['email'].'"';
                           if(isset($_SESSION['account_type']))
                            if($_SESSION['account_type']=='USER')
                              echo ' disabled';
                           echo '>
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <span class="form-label">Phone</span>
                           <input class="form-control" name="booking-phone" type="tel" placeholder="Enter your phone number" value="'.$_SESSION['phone'].'"';
                           if(isset($_SESSION['account_type']))
                            if($_SESSION['account_type']=='USER')
                              echo ' disabled';
                           echo '>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <span class="form-label">Pickup Location</span>
                     <input class="form-control" name="booking-pickup" type="text" placeholder="Enter ZIP/Location" required>
                  </div>
                  <div class="form-group">
                     <span class="form-label">Destination</span>
                     <input class="form-control" name="booking-destination" type="text" placeholder="Enter ZIP/Location" required>
                  </div>
                  <div class="row">
                     <div class="col-sm-5">
                        <div class="form-group">
                           <span class="form-label">Pickup Date</span>
                           <input class="form-control" name="booking-date" type="date" min="'.date('Y-m-d').'" required>
                        </div>
                     </div>
                     <div class="col-sm-7">
                        <div class="row">
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <span class="form-label">Hour</span>
                                 <select name="booking-hour" class="form-control">
                                    <option value="00">00</option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                 </select>
                                 <span class="select-arrow"></span>
                              </div>
                           </div>
                           <div class="col-sm-6">
                              <div class="form-group">
                                 <span class="form-label">Min</span>
                                 <select name="booking-min" class="form-control">
                                    <option value="05">05</option>
                                    <option value="10">10</option>
                                    <option value="15">15</option>
                                    <option value="20">20</option>
                                    <option value="25">25</option>
                                    <option value="30">30</option>
                                    <option value="35">35</option>
                                    <option value="40">40</option>
                                    <option value="45">45</option>
                                    <option value="50">50</option>
                                    <option value="55">55</option>
                                 </select>
                                 <span class="select-arrow"></span>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-4">
                        <div class="form-group">
                           <span class="form-label">Seats</span>
                           <select name="booking-seats" class="form-control">
                              <optgroup label="Small car">
                                 <option value="1">1</option>
                                 <option value="2">2</option>
                                 <option value="3">3</option>
                                 <option value="4">4</option>
                              </optgroup>
                              <optgroup label="Minibus">
                                 <option value="5">5</option>
                                 <option value="6">6</option>
                                 <option value="7">7</option>
                                 <option value="8">8</option>
                              </optgroup>
                              <optgroup label="Large Minibus">
                                 <option value="9">9</option>
                                 <option value="10">10</option>
                                 <option value="11">11</option>
                                 <option value="12">12</option>
                                 <option value="13">13</option>
                                 <option value="14">14</option>
                                 <option value="15">15</option>
                                 <option value="16+">16-30</option>
                              </optgroup>
                              <optgroup label="Coach">
                                 <option value="31+">31+</option>
                              </optgroup>
                           </select>
                           <span class="select-arrow"></span>
                        </div>
                     </div>
                     <div class="col-sm-8">
                        <div class="form-group">
                           <span class="form-label">Comfort</span>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="booking-comfort" id="booking-comfort1" value="ECONOMY" checked>
                              <label class="form-check-label" for="booking-comfort1">
                              Economy
                              </label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="booking-comfort" id="booking-comfort2" value="STANDARD">
                              <label class="form-check-label" for="booking-comfort2">
                              Standard
                              </label>
                           </div>
                           <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="booking-comfort" id="booking-comfort3" value="PREMIUM">
                              <label class="form-check-label" for="booking-comfort3">
                              Premium
                              </label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="form-label" for="booking-details">Booking Details</label>
                     <textarea name="booking-details" id="booking-details" placeholder="Write your details here..." rows="3"></textarea>
                  </div>
                  <div class="form-btn">
                     <button name= "booking-submit" id="booking-submit" class="submit-btn">Book Now</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
';
