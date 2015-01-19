<?php 
/*
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

*/
//ob_start(); 
/*
?>
<h2>Loan Application Form</h2>
<form name="loanapply_form" method="post" action="">
<input type="hidden" name="user_id" value="<?php echo get_current_user_id(); ?>">
<p><?php _e("First names: " ); ?><input type="text" name="first_name" value="" size="50"></p>
<p><?php _e("Middle names: " ); ?><input type="text" name="middle_name" value="" size="50"></p>
<p><?php _e("Last names: " ); ?><input type="text" name="last_name" value="" size="50"></p>
<p class="submit">
<input type="submit" name="loanapply" value="<?php _e('Apply', 'loanapp' ); ?>" />
</p>
</form>
<?php
//return ob_get_clean();
*/
?>



<!--<div class="container">-->
        <div class="row">
            <div class="col-sm-1"></div>
                <div class="col-sm-10">
                
                <h2>Application</h2>
                <hr>
                
                <h3>Primary Applicant</h3>
                <hr>

                <h4>Personal</h4>
                <hr>


                <form name="loanapply_form" method="post" action="" class="form-horizontal">
                    
                    <div class="form-group">    
                        
                        <div class="col-xs-3">
                            <select class="form-control" name="title">
                                <option selected="selected" value="">Select your title</option>
                                <option value="Mr">Mr</option>
                                <option value="Miss">Miss</option>
                                <option value="Dr">Dr</option>
                                <option value="Mis">Mis</option>
                            </select>
                        </div> 

                        <div class="col-xs-3">
                            <input name="fname" class="form-control" placeholder="First Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="mname" class="form-control" placeholder="Middle Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="lname" class="form-control" placeholder="Last Name" type="text">
                        </div>   

                    </div>


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <select class="form-control" name="marital">
                                <option selected="selected" value="">Marital Status</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Other">Other</option>
                                <option value="Separated">Separated</option>
                                <option value="Single">Single</option>
                                <option value="Widowed">Widowed</option>  
                            </select>
                        </div>

                        <div class="col-xs-4">
                            <input name="dateof_birth" class="form-control" placeholder="Date of birth" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="cell_phone" class="form-control" placeholder="Cell phone number" type="text">
                        </div>   

                    </div>   


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="email" class="form-control" placeholder="Email address" type="email">
                        </div>

                        <div class="col-xs-4">
                            <input name="sin_number" class="form-control" placeholder="Sin Number" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="driving_licence" class="form-control" placeholder="Driving licence number" type="text">
                        </div>   

                    </div>    

                    <div class="form-group"> 

                        <div class="col-xs-12">
                            <textarea name="comments" class="form-control" rows="3" placeholder="Your Comments"></textarea>
                        </div>  

                    </div> <!-- Personal info end here -->



                    <h4>Current Residence</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-12">
                            <select class="form-control" name="address_type">
                                <option selected="selected" value="">Address Type</option>
                                <option value="po box">PO Box</option>
                                <option value="rural route">Rural Route</option>
                                <option value="Standard">Standard</option>
                            </select>
                        </div>  

                    </div>   

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="apartment_num" class="form-control" placeholder="Apartment number" type="number">
                        </div>

                        <div class="col-xs-3">
                            <input value="0" name="houseno_boxno" class="form-control" placeholder="House No/ Box No" type="number">
                        </div>

                        <div class="col-xs-3">
                            <input name="street_name" class="form-control" placeholder="Street Name" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <select class="form-control" name="street_type">
                                <option selected="selected" value="">Street Type</option>
                            </select>
                        </div>  

                    </div>  


                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="city" class="form-control" placeholder="City" type="text">
                        </div>

                        <div class="col-xs-3">
                           <select class="form-control" name="province">
                                <option selected="selected" value="">Street Province</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="postal_code" class="form-control" placeholder="Postal Code" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <select class="form-control" name="direction">
                                <option selected="selected" value="">Street Direction</option>
                            </select>
                        </div>  

                    </div>  

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="home_phone" class="form-control" placeholder="Home phone number" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input value="1" name="years_add" class="form-control" placeholder="Years address" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="month_add" class="form-control" placeholder="Month Address" type="number">
                        </div>   

                    </div> <!-- Current resident end here -->



                    <h4>Previous Residence</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-12">
                            <select class="form-control" name="previous_address_type">
                                <option selected="selected" value="">Address Type</option>
                                <option value="po box">PO Box</option>
                                <option value="rural route">Rural Route</option>
                                <option value="Standard">Standard</option>
                            </select>
                        </div>  

                    </div>   

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="previous_apartment_num" class="form-control" placeholder="Apartment number" type="number">
                        </div>

                        <div class="col-xs-3">
                            <input name="previous_houseno_boxno" class="form-control" placeholder="House No/ Box No" type="number">
                        </div>

                        <div class="col-xs-3">
                            <input name="previous_street_name" class="form-control" placeholder="Street Name" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <select class="form-control" name="previous_street_type">
                                <option selected="selected" value="">Street Type</option>
                            </select>
                        </div>  

                    </div>  


                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="previous_city" class="form-control" placeholder="City" type="text">
                        </div>

                        <div class="col-xs-3">
                           <select class="form-control" name="previous_province">
                                <option selected="selected" value="">Street Province</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="previous_postal_code" class="form-control" placeholder="Postal Code" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <select class="form-control" name="previous_direction">
                                <option selected="selected" value="">Street Direction</option>
                            </select>
                        </div>  

                    </div>  

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="previous_home_phone" class="form-control" placeholder="Home phone number" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="previous_years_add" class="form-control" placeholder="Years address" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="previous_month_add" class="form-control" placeholder="Month Address" type="number">
                        </div>   

                    </div> <!-- Previous resident end here -->


                    <h4>Current Employment</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <select class="form-control" name="employee_type">
                                <option selected="selected" value="">Employee Type</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="occupetion" class="form-control" placeholder="Occupation" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="employee_name" class="form-control" placeholder="Employer Name" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <input name="employee_phone" class="form-control" placeholder="Employee Phone number" type="text">
                        </div>  

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="emp_add" class="form-control" placeholder="Employer address" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="emp_city" class="form-control" placeholder="Employer City" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="emp_province" class="form-control" placeholder="Employer Province" type="text">
                        </div>   

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-6">
                            <input name="year_emp" class="form-control" placeholder="Years with Employer" type="number">
                        </div>

                        <div class="col-xs-6">
                            <input name="month_emp" class="form-control" placeholder="Months with Employer" type="number">
                        </div> 

                    </div> <!-- Current employee end here -->



                    <h4>Previous Employment</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <select class="form-control" name="previous_employee_type">
                                <option selected="selected" value="">Employee Type</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="previous_occupetion" class="form-control" placeholder="Occupation" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="previous_employee_name" class="form-control" placeholder="Employer Name" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <input name="previous_employee_phone" class="form-control" placeholder="Employee Phone number" type="text">
                        </div>  

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="previous_emp_add" class="form-control" placeholder="Employer address" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="previous_emp_city" class="form-control" placeholder="Employer City" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="previous_emp_province" class="form-control" placeholder="Employer Province" type="text">
                        </div>   

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-6">
                            <input value="0" name="previous_year_emp" class="form-control" placeholder="Years with Employer" type="number">
                        </div>

                        <div class="col-xs-6">
                            <input value="0" name="previous_month_emp" class="form-control" placeholder="Months with Employer" type="number">
                        </div> 

                    </div> <!-- Previous Employment end here -->



                    <h4>Finance Summary</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="gross_salary" class="form-control" placeholder="Gross Monthly Salary" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input value="0" name="monthly_commission" class="form-control" placeholder="Monthly Commissions" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="car_allowance" class="form-control" placeholder="Monthly Car Allowance" type="number">
                        </div>   

                    </div> 


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="others_income" class="form-control" placeholder="Other Monthly Income" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="others_monthly" class="form-control" placeholder="Other Monthly Income Description" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="total_monthly" class="form-control" placeholder="Total Monthly Income" type="number">
                        </div>   

                    </div> 


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <select class="form-control" name="current_res">
                                <option selected="selected" value="">Current Residence</option>
                            </select>
                        </div>

                        <div class="col-xs-4">
                            <input name="holder_name" class="form-control" placeholder="Mortgage Holder's Name" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="monthly_rent" class="form-control" placeholder="Monthly Rent/Mortgage Payment" type="number">
                        </div>   

                    </div> 


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="home_market" class="form-control" placeholder="Home's Market Value" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="mortgage_balance" class="form-control" placeholder="Mortgage Balance" type="number">
                        </div>   

                        <div class="col-xs-4">
                            <select class="form-control" name="credit_card">
                                <option selected="selected" value="">Credit Card Type</option>
                            </select>
                        </div>

                    </div> 


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="credit_card_number" class="form-control" placeholder="Credit Card Number" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="others_monthly" class="form-control" placeholder="Other Monthly Obligations" type="number">
                        </div> 

                        <div class="col-xs-4">
                            <input name="others_monthly_obligation" class="form-control" placeholder="Other Monthly Obligation Description" type="text">
                        </div>

                    </div> <!-- end Finance Summary -->


                    <h4>Banking</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-6">
                            <input name="bank_name" class="form-control" placeholder="Bank Name" type="text">
                        </div>

                        <div class="col-xs-6">
                            <input name="years_bank" class="form-control" placeholder="Years At Bank" type="number">
                        </div> 

                    </div> <!-- end Banking -->

                    <h4>Additional Banking Information</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="bank_add" class="form-control" placeholder="Bank Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="bank_city" class="form-control" placeholder="Bank City" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="bank_province">
                                <option selected="selected" value="">Bank Province</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="bank_postal" class="form-control" placeholder="Postal Code" type="text">
                        </div> 

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="branch_number" class="form-control" placeholder="Branch Number" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="account_number" class="form-control" placeholder="Account Number" type="number">
                        </div>

                        <div class="col-xs-4">
                            <select class="form-control" name="current_bank_account_type">
                                <option selected="selected" value="">Current Bank Account Type</option>
                            </select>
                        </div>

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="date_account_opened" class="form-control" placeholder="Date Account Opened" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="bank_offer" class="form-control" placeholder="Bank Officer" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div>

                    </div> <!-- end Additional Banking Information -->


                    <h4>References</h4>
                    <hr>

                    <h5>References 1</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="ref1_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="ref1_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="ref1_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="ref1_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end References 1 -->

                    <h5>References 2</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="ref2_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="ref2_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="ref2_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="ref2_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end References 2 -->

                    <h5>References 3</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="ref3_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="ref3_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="ref3_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="ref3_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end References 3 -->

                    <h5>References 4</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="ref4_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="ref4_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="ref4_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="ref4_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end References 4 -->

                    <h5>References 5</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="ref5_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="ref5_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="ref5_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="ref5_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end References 5 -->



                <!-- Co Application form start here -->


                <h3 id="co-form-link" style="cursor:pointer;">Co Aplication <span id="feed"></span></h3>
                <hr>

                <div class="form-horizontal" style="display:none;" id="co-form">

                <h4>Personal</h4>
                <hr>
                    
                    <div class="form-group">    
                        
                        <div class="col-xs-3">
                            <select class="form-control" name="co_title">
                                <option selected="selected" value="">Select your title</option>
                                <option value="Mr">Mr</option>
                                <option value="Miss">Miss</option>
                                <option value="Dr">Dr</option>
                                <option value="Mis">Mis</option>
                            </select>
                        </div> 

                        <div class="col-xs-3">
                            <input name="co_fname" class="form-control" placeholder="First Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_mname" class="form-control" placeholder="Middle Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_lname" class="form-control" placeholder="Last Name" type="text">
                        </div>   

                    </div>


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <select class="form-control" name="co_marital">
                                <option selected="selected" value="">Marital Status</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Other">Other</option>
                                <option value="Separated">Separated</option>
                                <option value="Single">Single</option>
                                <option value="Widowed">Widowed</option>  
                            </select>
                        </div>

                        <div class="col-xs-4">
                            <input name="co_dateof_birth" class="form-control" placeholder="Date of birth" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_cell_phone" class="form-control" placeholder="Cell phone number" type="text">
                        </div>   

                    </div>   


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_email" class="form-control" placeholder="Email address" type="email">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_sin_number" class="form-control" placeholder="Sin Number" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_driving_licence" class="form-control" placeholder="Driving licence number" type="text">
                        </div>   

                    </div>    

                    <div class="form-group"> 

                        <div class="col-xs-12">
                            <textarea name="co_comments" class="form-control" rows="3" placeholder="Your Comments"></textarea>
                        </div>  

                    </div> <!-- Co Personal info end here -->



                    <h4>Current Residence</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-12">
                            <select class="form-control" name="co_address_type">
                                <option selected="selected" value="">Address Type</option>
                                <option value="po box">PO Box</option>
                                <option value="rural route">Rural Route</option>
                                <option value="Standard">Standard</option>
                            </select>
                        </div>  

                    </div>   

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_apartment_num" class="form-control" placeholder="Apartment number" type="number">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_houseno_boxno" class="form-control" placeholder="House No/ Box No" type="number">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_street_name" class="form-control" placeholder="Street Name" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <select class="form-control" name="co_street_type">
                                <option selected="selected" value="">Street Type</option>
                            </select>
                        </div>  

                    </div>  


                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_city" class="form-control" placeholder="City" type="text">
                        </div>

                        <div class="col-xs-3">
                           <select class="form-control" name="co_province">
                                <option selected="selected" value="">Street Province</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_postal_code" class="form-control" placeholder="Postal Code" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <select class="form-control" name="co_direction">
                                <option selected="selected" value="">Street Direction</option>
                            </select>
                        </div>  

                    </div>  

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_home_phone" class="form-control" placeholder="Home phone number" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input value="0" name="co_years_add" class="form-control" placeholder="Years address" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_month_add" class="form-control" placeholder="Month Address" type="number">
                        </div>   

                    </div> <!-- Co Current resident end here -->



                    <h4>Previous Residence</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-12">
                            <select class="form-control" name="co_previous_address_type">
                                <option selected="selected" value="">Address Type</option>
                                <option value="po box">PO Box</option>
                                <option value="rural route">Rural Route</option>
                                <option value="Standard">Standard</option>
                            </select>
                        </div>  

                    </div>   

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_previous_apartment_num" class="form-control" placeholder="Apartment number" type="number">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_previous_houseno_boxno" class="form-control" placeholder="House No/ Box No" type="number">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_previous_street_name" class="form-control" placeholder="Street Name" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <select class="form-control" name="co_previous_street_type">
                                <option selected="selected" value="">Street Type</option>
                            </select>
                        </div>  

                    </div>  


                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_previous_city" class="form-control" placeholder="City" type="text">
                        </div>

                        <div class="col-xs-3">
                           <select class="form-control" name="co_previous_province">
                                <option selected="selected" value="">Street Province</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_previous_postal_code" class="form-control" placeholder="Postal Code" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <select class="form-control" name="co_previous_direction">
                                <option selected="selected" value="">Street Direction</option>
                            </select>
                        </div>  

                    </div>  

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_previous_home_phone" class="form-control" placeholder="Home phone number" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_previous_years_add" class="form-control" placeholder="Years address" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_previous_month_add" class="form-control" placeholder="Month Address" type="number">
                        </div>   

                    </div> <!-- Co Previous resident end here -->


                    <h4>Current Employment</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <select class="form-control" name="co_employee_type">
                                <option selected="selected" value="">Employee Type</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_occupetion" class="form-control" placeholder="Occupation" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_employee_name" class="form-control" placeholder="Employer Name" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <input name="co_employee_phone" class="form-control" placeholder="Employee Phone number" type="text">
                        </div>  

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_emp_add" class="form-control" placeholder="Employer address" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_emp_city" class="form-control" placeholder="Employer City" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_emp_province" class="form-control" placeholder="Employer Province" type="text">
                        </div>   

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-6">
                            <input name="co_year_emp" class="form-control" placeholder="Years with Employer" type="number">
                        </div>

                        <div class="col-xs-6">
                            <input name="co_month_emp" class="form-control" placeholder="Months with Employer" type="number">
                        </div> 

                    </div> <!-- Co Current employee end here -->



                    <h4>Previous Employment</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <select class="form-control" name="co_previous_employee_type">
                                <option selected="selected" value="">Employee Type</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_previous_occupetion" class="form-control" placeholder="Occupation" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_previous_employee_name" class="form-control" placeholder="Employer Name" type="text">
                        </div>   

                        <div class="col-xs-3">
                            <input name="co_previous_employee_phone" class="form-control" placeholder="Employee Phone number" type="text">
                        </div>  

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_previous_emp_add" class="form-control" placeholder="Employer address" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_previous_emp_city" class="form-control" placeholder="Employer City" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_previous_emp_province" class="form-control" placeholder="Employer Province" type="text">
                        </div>   

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-6">
                            <input name="co_previous_year_emp" class="form-control" placeholder="Years with Employer" type="number">
                        </div>

                        <div class="col-xs-6">
                            <input name="co_previous_month_emp" class="form-control" placeholder="Months with Employer" type="number">
                        </div> 

                    </div> <!-- Co Previous Employment end here -->



                    <h4>Finance Summary</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_gross_salary" class="form-control" placeholder="Gross Monthly Salary" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_monthly_commission" class="form-control" placeholder="Monthly Commissions" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_car_allowance" class="form-control" placeholder="Monthly Car Allowance" type="number">
                        </div>   

                    </div> 


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_others_income" class="form-control" placeholder="Other Monthly Income" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_others_monthly" class="form-control" placeholder="Other Monthly Income Description" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_total_monthly" class="form-control" placeholder="Total Monthly Income" type="number">
                        </div>   

                    </div> 


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <select class="form-control" name="co_current_res">
                                <option selected="selected" value="">Current Residence</option>
                            </select>
                        </div>

                        <div class="col-xs-4">
                            <input name="co_holder_name" class="form-control" placeholder="Mortgage Holder's Name" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_monthly_rent" class="form-control" placeholder="Monthly Rent/Mortgage Payment" type="number">
                        </div>   

                    </div> 


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_home_market" class="form-control" placeholder="Home's Market Value" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_mortgage_balance" class="form-control" placeholder="Mortgage Balance" type="number">
                        </div>   

                        <div class="col-xs-4">
                            <select class="form-control" name="co_credit_card">
                                <option selected="selected" value="">Credit Card Type</option>
                            </select>
                        </div>

                    </div> 


                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_credit_card_number" class="form-control" placeholder="Credit Card Number" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_others_monthly" class="form-control" placeholder="Other Monthly Obligations" type="number">
                        </div> 

                        <div class="col-xs-4">
                            <input name="co_others_monthly_obligation" class="form-control" placeholder="Other Monthly Obligation Description" type="text">
                        </div>

                    </div> <!-- Co end Finance Summary -->


                    <h4>Banking</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-6">
                            <input name="co_bank_name" class="form-control" placeholder="Bank Name" type="text">
                        </div>

                        <div class="col-xs-6">
                            <input value="0" name="co_years_bank" class="form-control" placeholder="Years At Bank" type="number">
                        </div> 

                    </div> <!-- Co end Banking -->

                    <h4>Additional Banking Information</h4>
                    <hr>

                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_bank_add" class="form-control" placeholder="Bank Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_bank_city" class="form-control" placeholder="Bank City" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="co_bank_province">
                                <option selected="selected" value="">Bank Province</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_bank_postal" class="form-control" placeholder="Postal Code" type="text">
                        </div> 

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input value="0" name="co_branch_number" class="form-control" placeholder="Branch Number" type="number">
                        </div>

                        <div class="col-xs-4">
                            <input value="0" name="co_account_number" class="form-control" placeholder="Account Number" type="number">
                        </div>

                        <div class="col-xs-4">
                            <select class="form-control" name="co_current_bank_account_type">
                                <option selected="selected" value="">Current Bank Account Type</option>
                            </select>
                        </div>

                    </div> 

                    <div class="form-group"> 

                        <div class="col-xs-4">
                            <input name="co_date_account_opened" class="form-control" placeholder="Date Account Opened" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_bank_offer" class="form-control" placeholder="Bank Officer" type="text">
                        </div>

                        <div class="col-xs-4">
                            <input name="co_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div>

                    </div> <!-- end Co Additional Banking Information -->


                    <h4>References</h4>
                    <hr>

                    <h5>References 1</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_ref1_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref1_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="co_ref1_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref1_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end Co References 1 -->

                    <h5>References 2</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_ref2_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref2_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="co_ref2_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref2_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end Co References 2 -->

                    <h5>References 3</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_ref3_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref3_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="co_ref3_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref3_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end Co References 3 -->

                    <h5>References 4</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_ref4_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref4_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="co_ref4_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref4_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end Co References 4 -->

                    <h5>References 5</h5>
                    <hr>
                    <div class="form-group"> 

                        <div class="col-xs-3">
                            <input name="co_ref5_full_name" class="form-control" placeholder="Full Name" type="text">
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref5_address" class="form-control" placeholder="Address" type="text">
                        </div>

                        <div class="col-xs-3">
                            <select class="form-control" name="co_ref5_ralation">
                                <option selected="selected" value="">Relationship</option>
                            </select>
                        </div>

                        <div class="col-xs-3">
                            <input name="co_ref5_phone_number" class="form-control" placeholder="Phone Number" type="text">
                        </div> 

                    </div> <!-- end Co References 5 -->                        

                    <!-- end co Application form -->

                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <!--<button type="submit" class="btn btn-default">Submit</button>-->
            <input type="submit" name="loanapply" value="<?php echo _e('Apply', 'loanapp' ); ?>" class="btn btn-default"/>
                    </div>
                </div>

                </form></div>
            <div class="col-sm-1"></div>
        </div>
    <!--</div>-->
    
     <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#co-form-link').click(function(){
                jQuery('#co-form').slideToggle();
            });
        });
    </script>