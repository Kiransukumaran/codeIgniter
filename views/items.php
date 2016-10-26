<!DOCTYPE html>
<html>
    <head>
        <title>items deleted</title>
         <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            #row1{
                padding-top: 60px;
            }
            #div4{
                padding-top: 30px;
            }
            #span1{
                padding: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row" id="row1">
                <div class="col-md-6 col-md-offset-4">  
                    <table style="width:100%">
                         <tr>
                            <th>items</th>
                            <th>price</th>
                            <th>quantity</th>
                            <th>customer name</th>
                         </tr>
                         <?php
                         foreach ($result as $values) 
                         { 
                         ?>
                            <tr>
                            <td><?php echo "$values->item"; ?></td>
                            <td><?php echo "$values->price"; ?></td>
                            <td><?php echo "$values->quantity"; ?></td>
                            <td><?php echo "$values->customername"; ?></td>
                            <td><a href="<?php echo base_url();?>itemscontroller/deleteValues/<?php echo "$values->id";?>" class="btn btn-danger">delete</a>
                            </td>
                        <?php
                        }
                        ?>    
                    </table> 
                </div>  
            </div>
        </div>
    </body>
</html>
