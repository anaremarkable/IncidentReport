
<canvas id="programs_taken_piechart" style='width:10%;'></canvas>
<canvas id="avail_bar"></canvas>
<canvas id="payslip_line"></canvas>  

  <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 100%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}
</style>
  
        
            <script>

            var payslip_config = {
              type: 'line',
              data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [
                <?php
                for($xx=0; $xx<=3; $xx++){
                ?>
                {
                  label: '<?php echo report_status($xx); ?>',
                  fill: false,
                  backgroundColor: <?php echo colorgen($xx+5); ?>,
                  borderColor: <?php echo colorgen($xx+5); ?>,
                  data: [
                  <?php
                  for($i=1; $i<=12; $i++){
                    $yr = date('Y');
                    $from_date = $yr.'-'.$i.'-01';
                    $day = endofmonth($i,$yr);
                    $to_date = $yr.'-'.$i.'-'.$day;

                    $count_mem = 0; 
                    $query2 = selectwherebetweenand('report', 'date_incident', $from_date, 'date_incident', $to_date, 'status', $xx);
                    while($report = mysqli_fetch_array($query2)){
                        $count_mem++;
                    }
                   
                      echo $count_mem; 
                    if($i!=12){ echo ","; }
                  }
                  ?>
                  ],
                },
                <?php
                }
                ?>
                ],

              },
              options: {
                responsive: true,
                title: {
                  display: true,
                  text: '<?php echo $yr; ?> NUMBER OF REPORTS MONTHLY'
                },

                tooltips: {
                  mode: 'index',
                  intersect: false,
                },

                hover: {
                  mode: 'nearest',
                  intersect: true
                },
                scales: {
                  xAxes: [{
                    display: true,
                    scaleLabel: {
                      display: true,
                      labelString: 'Month'
                    }
                  }],
                  yAxes: [{
                    display: true,
                    scaleLabel: {
                      display: true,
                      labelString: 'Number of Days'
                    }
                  }]
                }
              }
              

            };
            </script>
            </div>
            <div>
            <script>
        var color = Chart.helpers.color;
        var availBarChartData = {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [{
            label: 'Number of Reports Monthly',
            backgroundColor: color(window.chartColors.deepblue).alpha(0.5).rgbString(),
            borderColor: window.chartColors.deepblue,
            borderWidth: 1,
            data: [
            <?php
            for($i=1; $i<=12; $i++){
              $yr = date('Y');
              $from_date = $yr.'-'.$i.'-01';
              $day = endofmonth($i,$yr);
              $to_date = $yr.'-'.$i.'-'.$day;

              $count_avail = 0; 
             $query2 = selectwherebetweenand('report', 'date_incident', $from_date, 'date_incident', $to_date, 'status', 1);
              while($avail = mysqli_fetch_array($query2)){
                  $count_avail++;
                
              }
              echo $count_avail;

              if($i!=12){ echo ","; }
            }
            
            ?>
            ]

          }]



        };


        </script>
      </div>
      <div></div>

          <script>
          var position_config = {  

            type: 'pie',
          
            data: {

              datasets: [{
                data: [
                <?php
                for($i=0; $i<=3; $i++){
                  $query2 = selectcount('report', 'id','total_taken', 'status', $i);
                  $app_sched = mysqli_fetch_array($query2);
                  echo $app_sched['total_taken'].", ";
                }
                ?>
                ],
                backgroundColor: [
                  window.chartColors.red, window.chartColors.blue, window.chartColors.yellow, window.chartColors.green
                ],
                label: 'Dataset 1'
              }],
              labels: [
                'Pending','Verified','Duplicate','Hoax'
              ]
            },
            options: {
                 
              responsive: true,
                 title: {
                  display: true,
                  text: '<?php echo $yr; ?> PIE CHART OF APPOINTMENT COUNT OF RESIDENT'
                },

              legend: false,

            }

          };


          window.onload = function() {
              var programs_taken_piechart = document.getElementById('programs_taken_piechart').getContext('2d');
              window.myPie = new Chart(programs_taken_piechart, position_config);

              var avail_bar = document.getElementById('avail_bar').getContext('2d');
              window.myBar = new Chart(avail_bar, {
                type: 'bar',
                data: availBarChartData,
                options: {
                  responsive: true,
                  legend: {
                    position: 'top',
                  },
                  title: {
                    display: true,
                    text: '<?php echo $yr; ?> APPOINMENT CREATED THIS MONTH '
                  }
                },

    


              });


              var payslip_line = document.getElementById('payslip_line').getContext('2d');
              window.myLine = new Chart(payslip_line, payslip_config);



          };

          </script>
          </div>
          </div>
      </div>

  
  </section>  
