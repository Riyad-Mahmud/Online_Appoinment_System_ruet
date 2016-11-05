<!--footer start-->
<footer class="site-footer">
    <div class="text-center">
        2014 - Alvarez.is
        <a href="blank.html#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="../admin/assets/js/jquery-3.1.1.min.js"></script>
<script src="../admin/assets/js/bootstrap.min.js"></script>
<script src="../admin/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
<script src="../admin/assets/js/jquery.ui.touch-punch.min.js"></script>
<script class="include" type="text/javascript" src="../admin/assets/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../admin/assets/js/jquery.scrollTo.min.js"></script>
<script src="../admin/assets/js/jquery.nicescroll.js" type="text/javascript"></script>


<!--common script for all pages-->
<script src="assets/js/common-scripts.js"></script>

<!--script for this page-->

<script>
    //custom select box

    $(function () {
        $('select.styled').customSelect();
    });
    
    
    
    


$(document).ready(function(){
    
       $(function(){           
        if (!Modernizr.inputtypes.date) {
            $('input[type="date"]').datepicker({
                  dateFormat : 'yy-mm-dd'
                }
             );
        }
    });
    
    $('.datepicker').datepicker();
    
   $('#search_text').keyup(function(){
       var txt=$(this).val();
       if(txt!= '')
       {
          $.ajax({
               url:"fetch.php",
               method:"post",
               data:{search:txt},
               dataType:"text",
               success:function(data){
                   $('#result').html(data);
               }
           }); 
       }
       else
       {
           $('#result').html('');
           
           
       } 
        console.log(txt);
        
        
   });
});
</script>

</body>
</html>

