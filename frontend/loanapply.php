<?php 

$data='<h2>Loan Application Form</h2>
<form name="loanapply_form" method="post" action="">
<input type="hidden" name="user_id" value="'.get_current_user_id().'">
<p>'.__("First names: " ).'<input type="text" name="first_name" value="" size="50"></p>
<p>'.__("Middle names: " ).'<input type="text" name="middle_name" value="" size="50"></p>
<p>'.__("Last names: " ).'<input type="text" name="last_name" value="" size="50"></p>
<p class="submit">
<input type="submit" name="loanapply" value="'.__('Apply', 'loanapp' ).'" />
</p>
</form>';


?>