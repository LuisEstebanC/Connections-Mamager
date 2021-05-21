<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;}</style>
    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
    
    <title>New connection</title>
  </head>
  <body>

    <div class="container">
        <h1 class="mt-5">New connection </h1>
        <form action="<?php echo base_url();?>add/save" class="mt-4" method='post'>
        
            <div class="row">
                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Connection name:</label>
                        <input type="text" name="conectionName" class="form-control <?php echo form_error('conectionName') ? 'is-invalid' : '' ; ?> " placeholder="New conection" value="<?php echo set_value('conectionName'); ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('conectionName'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">User name:</label>
                        <input type="text" name= "userName" autocomplete="honorific-prefix" class="form-control <?php echo form_error('userName') ? 'is-invalid' : '' ; ?> " placeholder="e.g: root" value="">
                        <div class="invalid-feedback">
                            <?php echo form_error('userName'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">database:</label>
                        <input type="text" name="database" class="form-control <?php echo form_error('database') ? 'is-invalid' : '' ; ?> " aria-describedby="emailHelp" placeholder="register" value="<?php echo set_value('database'); ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('database'); ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">

                    <div class="form-group">
                        <label for="exampleInputEmail1">server:</label>
                        <input type="text" name="server" class="form-control <?php echo form_error('server') ? 'is-invalid' : '' ; ?> " aria-describedby="emailHelp" placeholder="localhost" value="<?php echo set_value('server'); ?>">
                        <div class="invalid-feedback">
                            <?php echo form_error('server'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password:</label>
                        <input type="password" name="password" autocomplete="off" class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ; ?>" placeholder="" value="">
                        <div class="invalid-feedback">
                            <?php echo form_error('password'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Database engine:</label>
                        <select id="databaseEngine" name="databaseEngine" class="form-control <?php echo form_error('databaseEngine') ? 'is-invalid' : '' ; ?>" value="<?php echo set_value('databaseEngine'); ?>">
                            <option value="MySQL">MySQL</option>
                            <option value="MSSQL">MSSQL</option>
                            <option value="PostgreSQL">PostgreSQL</option>
                        </select>
                        <div class="invalid-feedback">
                            <?php echo form_error('databaseEngine'); ?>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>

            </div>
        </form>
    </div>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
  </body>
</html>