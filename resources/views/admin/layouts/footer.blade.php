<footer class="footer">
    <div class="w-100 clearfix">
        <span class="text-center text-sm-left d-md-inline-block">Clinica v1.0 - Todos os Direitos Reservados.</span>
        <span class="float-none float-sm-right mt-1 mt-sm-0 text-center">Desenvolvido <i class="fa fa-laptop text-danger"></i> por <a href="http://wtech.com/" class="text-dark" target="_blank">WTech - Consultoria em TI</a></span>
    </div>
</footer>

</div>
</div>




<div class="modal fade apps-modal" id="appsModal" tabindex="-1" role="dialog" aria-labelledby="appsModalLabel" aria-hidden="true" data-backdrop="false">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ik ik-x-circle"></i></button>
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="quick-search">
        <div class="container">
            <div class="row">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="input-wrap">
                        <input type="text" id="quick-search" class="form-control" placeholder="Search..." />
                        <i class="ik ik-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>window.jQuery || document.write('<script src="src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
<script src="{{ asset('template/plugins/popper.js/dist/umd/popper.min.js')}}"></script>
<script src="{{ asset('template/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('template/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js')}}"></script>
<script src="{{ asset('template/plugins/screenfull/dist/screenfull.js')}}"></script>
<script src="{{ asset('template/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('template/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('template/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{ asset('template/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{ asset('template/plugins/jvectormap/jquery-jvectormap.min.js')}}"></script>
<script src="{{ asset('template/plugins/jvectormap/tests/assets/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{ asset('template/plugins/moment/moment.js')}}"></script>
<script src="{{ asset('template/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<script src="{{ asset('template/plugins/d3/dist/d3.min.js')}}"></script>
<script src="{{ asset('template/plugins/c3/c3.min.js')}}"></script>
<script src="{{ asset('template/js/tables.js')}}"></script>
<script src="{{ asset('template/js/widgets.js')}}"></script>
<script src="{{ asset('template/js/charts.js')}}"></script>
<script src="{{ asset('template/dist/js/theme.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->

<!--datepicker-->

<script type="text/javascript">
    var dateToday = new Date();
        $( function() {
            $("#datepicker").datepicker({
                dateFormat: "dd/mm/yy",
                showButtonPanel: true,
                numberOfMonths: 2,
                minDate: dateToday
            });
        });
</script>


   

<script>
(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
e=o.createElement(i);r=o.getElementsByTagName(i)[0];
e.src='https://www.google-analytics.com/analytics.js';
r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
ga('create','UA-XXXXX-X','auto');ga('send','pageview');
</script>
</body>
</html>
