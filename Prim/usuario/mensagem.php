<!--<script>                
  
var myVar; 
 
function delet(mens_id) {
        myVar = setTimeout(alertFunc, 3000);
}

function alertFunc() {
  alert("Hello!");
}    
       
    } 
}

</script>-->

    <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <p><form action="../usuario/conteudo.php" id="form-chat" enctype="multipart/form-data" method="post">
        <div class="col-lg-12">
            <div class="input-group">
                <?php
                
                ?>
                <textarea id="txt" name="mensagem" placeholder="Insira sua mensagem" class="form-control"></textarea><br>
       
       <span class="input-group-btn">
           
       <input type="submit" value="&rang; &rang;" class="btn btn-success">
       </span>
       </div>
        </div>
    </form> </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    <script>    
    $('#myModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body #id').val(id)
  
  setTimeout(function(){ '#myModal'.close() }, 3000);
})
</script>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               