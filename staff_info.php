<?php 
    include('session_info.php');
    $result = $db->query('SELECT * FROM staff_infromation order by id DESC');
    $data_record = $result->num_rows;
?>
<!DOCTYPE html> 
<html lang="en"> 
  <head> <title>Add Staff information</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
      <!-- jQuery library -->
<!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
  <div class="row">
      <div class="col-md-4">
        <h3><a data="page_0" class="btn btn-sm btn-danger pull-right" href="logout.php"><span class="glyphicon glyphicon-off"></span> Logout</a></h3>
      </div>
      <div class="col-md-4"> <h1> Staff Information</h1></div>
      <div class="col-md-4">
        <?php $apage = array('id'=>'','name'=>'');?>
        <script>var page_0 = <?php echo json_encode($apage)?></script>
      <?php if($users_type=='1') : ?>
        <h3><a data="page_0" class="model_form btn btn-sm btn-primary" href="#"><span class="glyphicon glyphicon-plus"></span> Add new record</a></h3>
      <?php endif; ?>
      </div>
  </div>
  <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-8">
           <table class="table table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th align='center'> Sl.No </th>
                    <th align='center'> Staff ID </th>
                    <th align='center'> First Name </th>
                    <th align='center'> Last Name </th>
                    <th align='center'> Email </th>
                    <th align='center'> Address </th>
                 <?php if($users_type=='1') : ?>
                    <th>Action</th>
                  <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php if(isset($result) && ($data_record) > 0)  : $i=1; ?>
                    <?php  while ($users = mysqli_fetch_object($result)) { ?>

                        <tr class="<?=$users->id?>_del">
                            <td><?=$i;?></td>
                            <td><?=$users->staffid;?></td>
                            <td><?=$users->firstname;?></td>
                            <td><?=$users->lastname;?></td>
                            <td><?=$users->email;?></td>
                            <td><?=$users->address;?></td>
                        <?php if($users_type=='1') : ?>
                            <script>var page_<?php echo $users->id ?> = <?php echo json_encode($users);?></script>
                            <td><a data="<?php echo 'page_'.$users->id ?>" class="model_form btn btn-info btn-sm" href="#"> <span class="glyphicon glyphicon-pencil"></span></a>
                            <a data="<?php echo  $users->id ?>" title="Delete <?php echo $users->name;?>" class="tip delete_check btn btn-info btn-sm "><span class="glyphicon glyphicon-remove"></span> </a>  
                            </td>
                        <?php endif; ?>
                        </tr>
                <?php $i++; } ?>
            <?php else : echo '<tr><td colspan="8"><div align="center">-------No record found -----</div></td></tr>'; ?>
           <?php endif; ?>               
            </tbody>
        </table>
          <?php
              if(isset($_SESSION['flash_msg'])) :  
               $message = $_SESSION['flash_msg'];
               echo $error= '<div class="alert alert-success" role="alert">
               <span class="glyphicon glyphicon-envelope"></span> <strong>'.$message.'</strong> </div>';
               unset($_SESSION['flash_msg']);
              endif;
          ?>

      </div>
      <div class="col-md-2">
        
      </div>
  </div> 

    

    <!-- End -->
</body>
</html>
<script src="js/script.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $(document).on('click','.model_form',function(){
        $('#form_modal').modal({
          keyboard: false,
          show:true,
          backdrop:'static'
        });
        var data = eval($(this).attr('data'));
        $('#id').val(data.id);
        $('#surname').val(data.surname);
        $('#givenname').val(data.givenname);
        $('#email').val(data.email);
        $('#address').val(data.address);
        if(data.id!="")
            $('#pop_title').html('Edit');
        else
            $('#pop_title').html('Add');
       
    });  
    $(document).on('click','.delete_check',function(){
      if(confirm("Are you sure to delete data")){
        var current_element = $(this);
        url = "add_edit.php";
        $.ajax({
        type:"POST",
        url: url,
        data: {ct_id:$(current_element).attr('data')},
        success: function(data) { //location.reload(); 
          $('.'+$(current_element).attr('data')+'_del').animate({ backgroundColor: "#003" }, "slow").animate({ opacity: "hide" }, "slow");
        } 
      });
      }
     });     
});
</script>


<!-- Form modal -->
  <div id="form_modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><i class="icon-paragraph-justify2"></i><span id="pop_title">Add</span> Staff information</h4>
        </div>
        <!-- Form inside modal -->
        <form method="post" action="add_edit.php" id="cat_form">
          <div class="modal-body with-padding">
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Sure name :</label>
                   <input type="text" name="surname" id="surname"  class="form-control required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Given name :</label>
                   <input type="text" name="givenname" id="givenname" class="form-control required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Email :</label>
                   <input type="email" name="email" id="email"  class="form-control required email">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-sm-12">
                  <label>Address :</label>
                   <textarea name="address" id="address" class="form-control required"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
            <span id="add">
              <input type="hidden" name="id" value="" id="id">
              <button type="submit" name="form_data" class="btn btn-primary">Submit</button>
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
<!-- /form modal -->