<!DOCTYPE html>
<html>
    <head>
        <title>fileupload</title>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            #row1{
                padding-top: 100px;
                background-color: #d5ddcc;
            }
            #submitbutton{
                padding-left: 100px;
                padding-right: 100px;
            }
            #row2{
                padding-top: 30px;
                padding-bottom: 40px;
            }
            #row3{
                padding-top: 50px;
            }
            h1{
                margin-top: 100px;
                background-color:#f4d1cb;
                color: white;
            }
        </style>
    </head> 
    <body>
        <div class="container">
            <div class="row">           
                <h1 align="center">File upload</h1>
            </div>
            <div class="row" id="row1">
                <div align="center">
                    <?php echo form_open_multipart('filecontroller/do_upload');?>
                    <form>
                        <label>fileupload</label>
                        <input type="file" name="userfile">
                        <div class="row" id="row2">
                            <input type="submit" name="upload" class="btn btn-success" value="upload" id="submitbutton">
                        </div>
                    </form>
                </div>
            </div>
            <div class="row" id="row3">
                <div class="alert alert-warning" align="center">
                  <?php echo $error;?>
                </div>
            </div>
        </div>
    </body>
</html>