<?php
echo '
<div class="panel panel-default">
   <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
         Accounts Administration Panel
         </a>
      </h4>
   </div>
   <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
';
require 'adminAccountsTable.php';
echo '
      </div>
   </div>
</div>
<div class="panel panel-default">
   <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
         Reservation Administration Panel
         </a>
      </h4>
   </div>
   <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
';
require 'adminBookingsTable.php';
echo '
      </div>
   </div>
</div>
<div class="panel panel-default">
   <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
         Messages Administration Panel
         </a>
      </h4>
   </div>
   <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
';
require 'adminMessagesTable.php';
echo '
      </div>
   </div>
</div>
';
