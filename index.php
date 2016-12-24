<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
<head>

<meta charset="UTF-8">
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

<script src='https://www.google.com/recaptcha/api.js'></script>

 <!-- Include Bootstrap Datepicker -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

</head>
<body>
    
<div class="container">

<form class="well form-horizontal" id="contact_form" action="output.php" method="post">
<fieldset>

<!-- Form Name -->
 <div class="page-header">
    <h3  align="center">Please record the problem by filling the form below</h3>    
    
  </div>
<br>
 
<div class="form-group">
  <label class="col-md-4 control-label">First Name</label>
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Last Name</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- radio checks -->
 <div class="form-group">
                        <label class="col-md-4 control-label">Gender</label>
                        <div class="col-md-4">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="yes" /> Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="hosting" value="no" /> Female
                                </label>
                            </div>
                        </div>
                    </div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Highest education</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input name="education" placeholder="Education" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Phone #</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(845)555-1212" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
  <div class="form-group">
  <label class="col-md-4 control-label">E-Mail</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>
<!-- Text input-->

<div class="form-group">
        <label class="col-md-4 control-label">Date</label>
    <div class="col-md-4 inputGroupContainer">
            <div class="input-group" id="datePicker">
                <input type="text" class="form-control" name="date" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Address</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Address" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">City</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="city" placeholder="city" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Select Basic -->

<div class="form-group">
  <label class="col-md-4 control-label">State</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="state" class="form-control selectpicker" >
      <option value=" " >Please select your state</option>
      <option>Alabama</option>
      <option>Alaska</option>
      <option >Arizona</option>
      <option >Arkansas</option>
      <option >California</option>
      <option >Colorado</option>
      <option >Connecticut</option>
      <option >Delaware</option>
      <option >District of Columbia</option>
      <option> Florida</option>
      <option >Georgia</option>
      <option >Hawaii</option>
      <option >daho</option>
      <option >Illinois</option>
      <option >Indiana</option>
      <option >Iowa</option>
      <option> Kansas</option>
      <option >Kentucky</option>
      <option >Louisiana</option>
      <option>Maine</option>
      <option >Maryland</option>
      <option> Mass</option>
      <option >Michigan</option>
      <option >Minnesota</option>
      <option>Mississippi</option>
      <option>Missouri</option>
      <option>Montana</option>
      <option>Nebraska</option>
      <option>Nevada</option>
      <option>New Hampshire</option>
      <option>New Jersey</option>
      <option>New Mexico</option>
      <option>New York</option>
      <option>North Carolina</option>
      <option>North Dakota</option>
      <option>Ohio</option>
      <option>Oklahoma</option>
      <option>Oregon</option>
      <option>Pennsylvania</option>
      <option>Rhode Island</option>
      <option>South Carolina</option>
      <option>South Dakota</option>
      <option>Tennessee</option>
      <option>Texas</option>
      <option> Uttah</option>
      <option>Vermont</option>
      <option>Virginia</option>
      <option >Washington</option>
      <option >West Virginia</option>
      <option>Wisconsin</option>
      <option >Wyoming</option>
    </select>
  </div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Zip Code</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="zip" placeholder="Zip Code" class="form-control"  type="text">
    </div>
</div>
</div>



<!-- Text area -->

<div class="form-group">
  <label class="col-md-4 control-label">Category</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
          <textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>

<!-- Text area -->
<div class="form-group">
  <label class="col-md-4 control-label">Select File</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group"> 
        
        <input name="file" id="input-1a" type="file" class="file" data-show-preview="false">
        </div>
    </div>
</div>
        
<!-- -->
<div class="form-group">
  <label class="col-md-4 control-label">Select File</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group"> 
<div class="g-recaptcha" data-sitekey="6Leoug8UAAAAAAf2OZV2UKQQ_PjfspycZXoJgirH"></div>
      </div>
    </div>
</div>
<!-- -->

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <button type="submit" class="btn btn-warning" >Next <span class="glyphicon glyphicon-send"></span></button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->

<!-- -->

<script>
  $(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#eventForm').formValidation('revalidateField', 'date');
        });
    }
</script>
<!-- -->

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

<script>$(document).ready(function () {
    $('#contact_form').bootstrapValidator({
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                    stringLength: { min: 2 },
                    notEmpty: { message: 'Please supply your first name' }
                }
            },
            last_name: {
                validators: {
                    stringLength: { min: 2 },
                    notEmpty: { message: 'Please supply your last name' }
                }
            },
            email: {
                validators: {
                    notEmpty: { message: 'Please supply your email address' },
                    emailAddress: { message: 'Please supply a valid email address' }
                }
            },
            date: {
                validators: {
                    notEmpty: { message: 'Please supply the date' },
                    
                }
            },
            education: {
                validators: {
                    notEmpty: { message: 'Please supply your education(eg. BS,MS,Ph.D)' },
                    education: {
                       
                        message: 'Please supply your education(eg. BS,MS,Ph.D)'}
                }
            },
            phone: {
                validators: {
                    notEmpty: { message: 'Please supply your phone number' },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                    stringLength: { min: 8 },
                    notEmpty: { message: 'Please supply your street address' }
                }
            },
            city: {
                validators: {
                    stringLength: { min: 4 },
                    notEmpty: { message: 'Please supply your city' }
                }
            },
            state: { validators: { notEmpty: { message: 'Please select your state' } } },
            zip: {
                validators: {
                    notEmpty: { message: 'Please supply your zip code' },
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
                        message: 'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: { message: 'Please supply a description of your project' }
                }
            }
        }
    });
});
//# sourceURL=pen.js
</script>
</body>
</html>