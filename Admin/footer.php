  <!--footer part-->
  <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- ========= Use for Data Table Pagination ========== -->
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!-- ===== use for Data pagination ======= -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
});

</script>

  <script type="text/javascript">
    $(document).ready(function(){
   $('.button-left').click(function(){
       $('.sidebar').toggleClass('fliph');
       if($('.sidebar').hasClass("fliph")){
          $('#page-wrapper').css('width','calc(100% - 42px)');
       }
       else{
          $('#page-wrapper').css('width','calc(100% - 220px)');
       }
        
   });
     
});
  </script>
</body>
</html>