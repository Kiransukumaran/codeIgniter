<!DOCTYPE html>
<html>
    <head>
        <title>contact us</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            .red{
                color:red;
                }
            .form-area
            {
                background-color: #FAFAFA;
                padding: 10px 40px 60px;
                margin: 10px 0px 60px;
                border: 1px solid GREY;
                }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-4">
                    <div class="form-area">  
                        <form method="POST" action="<?php echo base_url(); ?>contactuscontroller/validateForm">
                            <br>
                            <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>      
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" >
                            </div>
                            <div class="form-group">
                               <select name="choice">
                                       <option></option>
                                       <option value="choice1">choice1</option>
                                       <option value="choice2">choice2</option>
                                       <option value="choice3">choice3</option>
                               </select> 
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="date" name="date" placeholder="date">
                            </div>
                            <div class="form-group">
                            <textarea name="message" class="form-control" type="textarea" id="message" placeholder="Message"  rows="7"></textarea>                   
                            </div>
                            <label>max upto 120 character</label>
                            
                            <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
                        </form>
                        <div style="color:red">
                            <?php echo validation_errors(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>