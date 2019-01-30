@extends('backend.layouts.master')

@section('css')
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,500i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('allscript')}}/css/c.css">
    <link href="{{ asset('allscript')}}/gig/css/font-awesome.min.css" rel="stylesheet"> 
    <link href="{{ asset('allscript')}}/gig/css/multistep.min.css" rel="stylesheet">

@endsection
@section('content')

<!--Multi Step Wizard Start-->
   <div id="rms-wizard" class="rms-wizard">
           <!--Wizard Step Navigation Start-->
            <div class="rms-step-section" data-step-counter="false" data-step-image="false">
                <ul class="rms-multistep-progressbar"> 
                    <li class="rms-step rms-current-step">
                        <span class="step-icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
                        <span class="step-title">Account Information</span>
                       
                    </li> 
					
					<li class="rms-step ">
                        <span class="step-icon "><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <span class="step-title">Payment Information</span>
                       
                    </li>
					
                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <span class="step-title">Personal Information</span>
                       
                    </li>

                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <span class="step-title">Personal Information</span>
                       
                    </li>

                    <li class="rms-step ">
                        <span class="step-icon ml10"><i class="fa fa-credit-card" aria-hidden="true"></i></span>
                        <span class="step-title">Payment Information</span>
                        
                    </li>
                    <li class="rms-step ">
                        <span class="step-icon"><i class="fa fa-file-text" aria-hidden="true"></i></span>
                        <span class="step-title">Confirm Your Details</span>
                        
                    </li>
                </ul>
            </div>
            <!--Wizard Navigation Close-->
            <!--Wizard Content Section Start-->
            <div class="rms-content-section">
                <div class="rms-content-box rms-current-section">
                    <div class="rms-content-area"> 
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-lock" aria-hidden="true"></i> Account</b> Information</div>
                            <div class="step-label">Step 1 - 4 </div> 
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label for="username">Username</label>
                                            <div class="inpt-group">


										<textarea style="font-size: 38px;height: 115px;" class="inpt-control gig-title-text" type="text" placeholder="do something I'm really good at"></textarea>
										
									
                                                

                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. Lorem Ipsum has been the industry's
														standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>  
                                                 <div class="char-count"><em>0</em> / 80 max</div>
										<div class="char-count-desc"></div>
										<span class="gig-before-title">I will</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label for="password">Password</label>
                                                <div class="inpt-group">
                                                    <input type="password" name="password" min="5" max="20" id="password" class="inpt-control required" placeholder="Password">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label for="confirmpassword">Confirm Password</label>
                                                <div class="inpt-group">
                                                    <input type="password" name="cpassword" id="cpassword" class="inpt-control required" placeholder="Password">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="Email">Email</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                   <input type="text" name="email" id="email" class="inpt-control required" placeholder="Please Enter your mail ID">
                                                   <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div>
				
				<div class="rms-content-box">
                    <div class="rms-content-area"> 
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-lock" aria-hidden="true"></i> Account</b> Information</div>
                            <div class="step-label">Step 1 - 4 </div> 
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                                <label for="username">Username</label>
                                            <div class="inpt-group">
                                                <span class="inpt-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span> 
                                                <input type="text" name="username" id="username" class="inpt-control required" placeholder="John_Doe"> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
														typesetting industry. Lorem Ipsum has been the industry's
														standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    
                                </div> 
                            </div> 
                        </div> 
                    </div>
                </div>
                <div class="rms-content-box">
                     <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-user" aria-hidden="true"></i> Personal</b> Information</div>
                            <div class="step-label">Step 2 - 4 </div> 
                        </div>
                         <div class="rms-content-body"> 
                             <div class="row">
                                 <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="Salutation">Salutation</label>
                                               <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="salutation" id="salutation" class="inpt-control select required">
                                                       <option value="null" disabled selected>Select</option>
								    				    <option value="1">Mr</option>
								    				    <option value="2">Mrs</option>
								                    </select> 
                                                </div>
                                            </div>
                                         </div>
                                        <div class="col-md-8">
                                            <div class="inpt-form-group"> 
                                               <label for="gender">Gender</label>
                                               <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="gender" id="gender" class="inpt-control select required">
                                                       <option value="null" disabled selected>Select Gender</option>
								    				    <option value="1">Male</option>
								    				    <option value="2">Female</option>
								                    </select> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                       <div class="col-md-6">
                                           <div class="inpt-form-group"> 
                                               <label for="firstname">First Name</label>
                                               <div class="inpt-group">
                                                   <input type="text" name="firstname" id="firstname" class="inpt-control required" placeholder="First Name">
                                                   <div class="form-tooltip">
                                                       <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
                                                           typesetting industry. Lorem Ipsum has been the industry's
									   					standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="inpt-form-group"> 
                                                <label for="lastname">Last Name</label>
                                                <div class="inpt-group">
                                                    <input type="text" name="lastname" id="lastname" class="inpt-control required" placeholder="Last name">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
                                                            typesetting industry. Lorem Ipsum has been the industry's
									   					standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div> 
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="Email">Email</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                                                   <input type="text" name="email" id="email" class="inpt-control required" placeholder="Please Enter your mail ID">
                                                   <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="phone">Phone</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-phone fa-rotate-270" aria-hidden="true"></i></span>
                                                   <input type="text" name="phone" id="phone" class="inpt-control required" placeholder="Please Enter your Phone Number">
                                                   <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="zipcode">Zip Code</label>
                                               <div class="inpt-group">  
                                                   <input type="text" name="zipcode" id="zipcode" class="inpt-control required" placeholder="Code"> 
                                                </div>
                                            </div>
                                         </div>
                                        <div class="col-md-8">
                                            <div class="inpt-form-group"> 
                                               <label for="state">State Select</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="state" id="state" class="inpt-control select required">
                                                       <option value="" disabled selected>Select State</option>
								    				    <option value="1">Delhi</option>
								    				    <option value="2">Noida</option>
								    				    <option value="2">Himachal Pradesh</option>
								    				    <option value="2">Punjab</option>
								                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="address">Home Address</label>
                                               <div class="inpt-group">  
                                                   <input type="text" name="address" id="address" class="inpt-control required" placeholder="Please Enter your Home Address">
                                                   <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="country">Select Country</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="country" id="country" class="inpt-control select required">
                                                       <option value="" disabled selected>Select Country</option>
								    				    <option value="1">USA</option>
								    				    <option value="2">INDIA</option>
								    				    <option value="2">UK</option> 
								                    </select> 
                                                    <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div>
                                </div> 
                             </div> 
                        </div> 
                    </div> 
                </div>
                <div class="rms-content-box">
                     <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-credit-card" aria-hidden="true"></i> Payment</b> Information</div>
                            <div class="step-label">Step 3 - 4 </div>
                           
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                <div class="row"> 
                                     <div class="col-md-12">
                                         <div class="inpt-form-group"> 
                                            <label for="cardtype">Card Type</label>
                                             <div class="inpt-group dropdown-select-icon"> 
                                                <select name="cardtype" id="cardtype" class="inpt-control select required">
                                                    <option value="" disabled selected>Select Credit Card type</option>
								    				    <option value="1">Visa Card</option>
								    				    <option value="2">Master Card</option> 
								                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="inpt-form-group"> 
                                                <label for="cardnum">Card Number</label>
                                                <div class="inpt-group">
                                                    <input type="text" name="cardnum" id="cardnum" class="inpt-control required" placeholder="123-456-789">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>
                                        <div class="col-md-3">
                                            <div class="inpt-form-group"> 
                                                <label for="cvc">CVC</label>
                                                <div class="inpt-group">
                                                    <input type="text" name="cvc" id="cvc" class="inpt-control required" placeholder="***">
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                        <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                    </div> 
                                                </div> 
                                            </div>
                                         </div>
                                    </div> 
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="inpt-form-group"> 
                                               <label for="holdername">Card Holder Name</label>
                                               <div class="inpt-group"> 
                                                   <span class="inpt-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                   <input type="text" name="holdername" id="holdername" class="inpt-control required" placeholder="John Doe">
                                                   <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
								    						typesetting industry. Lorem Ipsum has been the industry's
								    						standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="row"> 
                                        <div class="col-md-4">
                                            <div class="inpt-form-group"> 
                                               <label for="exmonth">Expiry Month</label>
                                                <div class="inpt-group dropdown-select-icon"> 
                                                   <select name="exmonth" id="exmonth" class="inpt-control select required">
                                                       <option value="" disabled selected>Expiry Month</option>
									   			    <option value="1">01</option> 
									   			    <option value="1">02</option> 
									   			    <option value="1">03</option> 
									   			    <option value="1">04</option> 
									   			    <option value="1">05</option> 
									   			    <option value="1">06</option> 
									   			    <option value="1">07</option> 
									   			    <option value="1">08</option> 
									   			    <option value="1">09</option> 
									   			    <option value="1">10</option> 
								                    </select> 
                                                    <div class="form-tooltip">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
									   					typesetting industry. Lorem Ipsum has been the industry's
									   					standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                           <div class="inpt-form-group"> 
                                              <label for="exyear">Expiry Year</label>
                                               <div class="inpt-group dropdown-select-icon"> 
                                                  <select name="exyear" id="exyear" class="inpt-control select required">
                                                      <option value="" disabled selected>Expiry Year</option>
										  		    <option value="1">2017</option>  
										  		    <option value="1">2018</option>  
										  		    <option value="1">2019</option>  
										  		    <option value="1">2020</option>  
										  		    <option value="1">2021</option>  
								                    </select> 
                                                    <div class="form-tooltip tooltip-edge">
                                                        <span class="tooltip-title">Why do we need this info?</span>
                                                       <p class="tooptip-content">Lorem Ipsum is simply dummy text of the printing and
										  				typesetting industry. Lorem Ipsum has been the industry's
										  				standard dummy text ever since the 1500s</p>
                                                        <span class="tooltip-info">Your information is Safe here & never shared.</span>
                                                   </div> 
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>
                <div class="rms-content-box">
                    <div class="rms-content-area">
                        <div class="rms-content-title">
                            <div class="leftside-title"><b> <i class="fa fa-file-text" aria-hidden="true"></i> Confirm</b> Details</div>
                            <div class="step-label">Step 4 - 4 </div> 
                        </div>
                        <div class="rms-content-body"> 
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="desc-container">
                                                <div class="desc-table">
                                                    <table>
                                                        <tbody>
                                                            <tr>
                                                                <td class="desc-label">Username</td>
                                                                <td class="desc-val">John_503in</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Email ID</td>
                                                                <td class="desc-val">john_doe@gmail.com</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Full Name</td>
                                                                <td class="desc-val">John Doe</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Gender</td>
                                                                <td class="desc-val">Male</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Telephone NO.</td>
                                                                <td class="desc-val">325-555-1234</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Address</td>
                                                                <td class="desc-val">111 W.App Ave. Suite 123, Sunway, CA</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Zip Code</td>
                                                                <td class="desc-val">94086</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Country</td>
                                                                <td class="desc-val">USA</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Card Type</td>
                                                                <td class="desc-val">Visa</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="desc-label">Telephone NO.</td>
                                                                <td class="desc-val">4519-1235-9869-4321</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div> 
                                </div> 
                            </div> 
                        </div> 
                    </div> 
                </div>
            </div>
            <!--Wizard Content Section Close-->
            <!--Wizard Footer section Start-->
            <div class="rms-footer-section">
                <div class="button-section">
                    <span class="next">
                        <a href="javascript:void(0)" class="btn">Next Step
                            <small>Your information</small>
                        </a>
                    </span>
                    <span class="prev">
                        <a href="javascript:void(0)" class="btn" >Previous Step
                             <small>Your information</small>
                        </a>
                    </span>
                    <span class="submit">
                        <a href="javascript:void(0)" class="btn" >Submit
                             <small>Your information</small>
                        </a>
                    </span> 
                </div>
            </div>
            <!--Wizard Footer Close-->

    <!--Wizard Container Close-->
    </div>
    <!--Multi Step Wizard Close-->
 @endsection

 @section('js')
    <script type="text/javascript" src="{{ asset('allscript')}}/gig/js/multistep.min.js"></script>
    <script>
        $(document).ready(function() { 
            $('#rms-wizard').stepWizard({
                stepTheme: 'defaultTheme',/*defaultTheme,steptheme1,steptheme2*/
                allstepClickable: false,
                compeletedStepClickable: true,
                stepCounter: true,
                StepImage: true, 
                animation: true,
                animationClass: "fadeIn",
                stepValidation: true,
                validation : true, 
                field: {
                     username : { 
                        required : true, 
                        minlength: 2,
                        Regex: /^[a-zA-Z0-9]+$/,  
                    },
                     password : {
                        required : true,
                        minlength : 5,
                        maxlength : 20,
                        Regex: /^(?=.*[0-9_\W]).+$/, 
                    },
                    email:{
                        required : true,
                        Regex: /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,
                    },
                },
                message: {
                    username: "Please Enter UserName ", 
                }
                
            });
    });
    </script> 

@endsection