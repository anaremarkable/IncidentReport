<?php include('offense_nav.php'); ?>

<div class="container-fluid px-4">

    
    
    <div class="row">
        <div class="card mb-4" style='background-color: #20334a05;'>
            <div class="card-header">
                <strong><h1 class="mt-4">Offense List</strong></h1>
                <button style="font-family: verdana; background-color:#4c516d; color: white;" class='btn btn-sm  pull-right' data-toggle='modal' data-target='#modalOpenSm' data-type='addOffense'> <i style="color: white;" class='fa fa-plus'></i> Add Offense List</button>
			</div>
			<div style=" border: 2px solid black;" class="card-body">
                <?php
                for($i=2; $i>=0; $i--){
                    echo "<h5 class='text-justify'><b>".offense_level($i)."</b> - <small>".offense_type_desc($i)."</small></h5><hr>";
                    $query = selectwhere('offense_list', 'offense_level', $i);
                    while($offenselist = mysqli_fetch_array($query)){
                       echo "
                       
                        <div class='panel ml-5'>
                            <p><i class='fa fa-search' data-toggle='modal' data-target='#modalOpenLg' data-type= 'viewOffenseSuggestion' data-id='".$offenselist['id']."' style='cursor:pointer;'></i>
                            <span style='cursor:pointer;'  data-toggle='modal' data-target='#modalOpenMd' data-type= 'updOffense' data-id='".$offenselist['id']."' style='color:#12131a;'>
                                <b>".$offenselist['article']."</b>
                                ".$offenselist['offense_description']."
                            </span>
                            </p>
                        </div>
                        ";
                    }

                }
                ?>
            </div>
        </div>
    </div>
</div>
