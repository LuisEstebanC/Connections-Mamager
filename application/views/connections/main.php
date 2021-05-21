<?php
    $connectionSuccess = $this->session->flashdata("success");
    $dialogIcon = $connectionSuccess ? "success": "error";
    

?>
<!doctype html>
<html lang="es">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css"href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/yeti/bootstrap.min.css">
   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>body{font-family:"Roboto" !important;} </style>
    
    <title>Connection list</title>
  </head>

  <body>

    <div class="container">
        <h1 class="mt-5">Connections list</h1>
        <div class="text-right">
            <a href="<?php echo base_url(); ?>main/create" class="btn btn-info"><ion-icon name="add"></ion-icon></a> 
        </div>
        <table class="table mt-4">
            <thead class="thead-light">
                <tr>
                <th scope="col">N°</th>
                <th scope="col">Connection name</th>
                <th scope="col">Database engine</th>
                <th scope="col">Server</th>
                <th scope="col">User name</th>
                <th scope="col">database</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php $counter=1; foreach($data as $key => $value):?>
                    <tr>
                        <th scope="row"><?php echo $counter++;?></th>
                        <td><?php echo $value->connection_name;?></td>
                        <td><?php echo $value->databaseEngine;?></td>
                        <td><?php echo $value->server;?></td>
                        <td><?php echo $value->user_name;?></td>
                        <td><?php echo $value->name_database;?></td>
                        <td>
                            <div class="spinner"></div>
                            <a href="<?php echo base_url(); ?>edit/<?php echo $value->id;?>" class="btn btn-outline-primary" role="button"><ion-icon name="create-outline"></ion-icon></a> 
                            <a href="<?php echo base_url(); ?>delete/<?php echo $value->id;?>" class="btn btn-outline-danger"><ion-icon name="trash-outline"></ion-icon></a>
                            <a 
                                class="btn btn-success "
                                onClick="activateSpinner(event)" 
                                href="<?php echo base_url(); ?>test/<?php echo $value->id;?>"
                            >
                                <div style="pointer-events: none;">Test Connection</div>
                                <div hidden>
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" ></span>
                                    Loading...
                                </div>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        function activateSpinner(event){
            const children = event.target.children;
            children[0].hidden = true;
            children[1].hidden = false;
           
        }
        
        <?php if($connectionSuccess !== NULL):?>
            Swal.fire({

                icon: "<?php echo $dialogIcon; ?>",

            });
        <?php endif; ?>
    </script>
  </body>