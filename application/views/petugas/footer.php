 </div>
 <!-- /.content-wrapper -->

 <footer class="main-footer">
   <div class="row">


     <div class="mx-auto">


       <strong>Copyright &copy; 2020 <a href="https://geolabsurvey.com/blog">Reza</a>.</strong> All rights
       reserved.
     </div>
   </div>
 </footer>

 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
   <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->
 </div>
 <!-- ./wrapper -->

 <!-- jQuery -->
 <script src="<?= base_url(); ?>lte/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="<?= base_url(); ?>lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- AdminLTE App -->
 <script src="<?= base_url(); ?>lte/dist/js/adminlte.min.js"></script>
 <!-- AdminLTE for demo purposes -->
 <script src="<?= base_url(); ?>lte/dist/js/demo.js"></script>
 <!-- data table -->


 <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

 <script>
   $(document).ready(function() {
     $('#dataa').DataTable();
   });
 </script>
 <script type="text/javascript">
   // get a new date (locale machine date time)
   var date = new Date();
   // get the date as a string
   var n = date.toDateString();
   // get the time as a string
   var time = date.toLocaleTimeString();

   // find the html element with the id of time
   // set the innerHTML of that element to the date a space the time
   document.getElementById('time').innerHTML = n + ' ' + time;
 </script>

 <script>
   /** add active class and stay opened when selected */
   var url = window.location;

   // for sidebar menu entirely but not cover treeview
   $('ul.nav-sidebar a').filter(function() {
     return this.href == url;
   }).addClass('active');

   // for treeview
   $('ul.nav-treeview a').filter(function() {
     return this.href == url;
   }).parentsUntil(".nav-sidebar > .nav-treeview").addClass('menu-open').prev('a').addClass('active');
 </script>

 </body>

 </html>