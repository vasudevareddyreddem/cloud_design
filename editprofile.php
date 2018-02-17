<?php include('header.php'); ?>
<?php include('sidebar.php'); ?>
<section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                    <h2>Edit Profile</h2>
                            </div>
                        </div>
                        <div class="body">
						<div class="row clearfix">
							<div class="col-md-2">
								<img class="img-responsive thumbnail" src="images/user.png" alt="profile img">
							</div>
							<form class=" pad30 form-horizontal" action=" " method="post"  id="contact_form">
							<div class="col-md-8 card"><br>
									<!--<div class="form-group">
									  <label class=" control-label">First Name</label>  
									  <div class=" inputGroupContainer">
									  <div class="input-group">
									  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
									  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
										</div>
									  </div>
									</div>-->
								<div class="col-md-6">
									 <div class="form-group">
                                       
										<label class=" control-label">Name</label>
										 <div class="input-group form-line ">
                                            <input name="first_name" placeholder="First Name" class="form-control"  type="text">
                                        </div>
                                    </div>
								</div>
								<div class="col-md-6">
									 <div class="form-group">
                                        <div class="form-line ">
										<label>Email</label>
                                            <input type="email" class="form-control" value="Lorem @gmail.com" placeholder="Enter your Email" />
                                        </div>
                                    </div>
								</div>
								<div class="col-md-6">
									 <div class="form-group">
                                        <div class="form-line ">
										<label>Name</label>
                                            <input type="text" class="form-control" value="Lorem Ipsum is simply" placeholder="Enter your Name" />
                                        </div>
                                    </div>
								</div>
								<div class="col-md-6">
								 <div class="form-group">
                                        <div class="form-line">
										<label>Date of Birth</label>
                                            <input type="text" class="datepicker form-control" placeholder="Please choose a date...">
                                        </div>
                                    </div>
								</div>
								<div class="col-md-6">
									 <div class="form-group">
                                        <div class="form-line ">
										<label>Name</label>
                                            <input type="text" class="form-control" value="Lorem Ipsum is simply" placeholder="Enter your Name" />
                                        </div>
                                    </div>
								</div>		
								<div class="col-md-6">
									 <div class="form-group">
                                        <div class="form-line ">
										<label>Gender</label>
									<select class="form-control show-tick">
                                        <option value="">-- Please select Gender --</option>
                                        <option value="10">Male</option>
                                        <option value="10">Female</option>
                                        
                                    </select>
                                        </div>
                                    </div>
								</div>
								
								<div class="col-md-6">
									 <div class="form-group">
                                        <div class="form-line ">
										<label>Name</label>
                                            <input type="text" class="form-control" value="Lorem Ipsum is simply" placeholder="Enter your Name" />
                                        </div>
                                    </div>
								</div>
								<div class="col-md-6">
									 <div class="form-group">
                                        <div class="form-line ">
										<label>Profile Pic</label>
                                            <input type="file" class="form-control"  />
                                        </div>
                                    </div>
								</div>
								
									<button type="submit" class="btn btn-warning" >Update <span class="glyphicon glyphicon-send"></span></button>
									</br>
								
							</div>
							</form>
						</div>
						
					
                          
                </div>
            </div>
            </div>
            </div>
            </div>
            
            
    </section>
<script>
	$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
            comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description of your project'
                    }
                    }
                }
            }
        })
     
});


</script>

<?php include('footer.php'); ?>