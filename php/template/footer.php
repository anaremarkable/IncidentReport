         
<div class="modal fade" id="modalOpenLg">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body" id="modalOpenLgBody">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalOpenMd">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-body" id="modalOpenMdBody">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalOpenSm">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body" id="modalOpenSmBody">
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalOpenSm2">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body" id="modalOpenSmBody2">
            </div>
        </div>
    </div>
</div>

                <footer class="py-4 mt-auto">
                    <div class="container-fluid px-4" >
                        <div class="d-flex align-items-center justify-content-between small " style="background: red;">
                           
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="js/jsdatatable.js"></script>

        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<script type="text/javascript">
    function countdown(){
        var link = "php/template/sao_count.php";
        $.get(link, function(returnData){
            $('#complaints_div').html(returnData);
        });
        var link = "php/template/faculty_count.php";
        $.get(link, function(returnData){
            $('#complaints_div_fac').html(returnData);
        });
    setTimeout("countdown()",1000);
  }
  countdown();
</script>