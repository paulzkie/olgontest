<!-- page content -->
<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Employee</h3>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_content">
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">ID </th>
                            <th class="column-title">First Name</th>
                            <th class="column-title">Last Name</th>
                            <th class="column-title">Position</th>
                            <th class="column-title">Create Date </th>
                            <th><button class="btn btn-default" id="btn_add" style="background: green !important;">Add</button>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                          <?php 
                            foreach($data as $list){ 
                              $dt = new DateTime($list->create_date); ?>
                              <tr class="even pointer">
                                <td class=" "><?=$list->id?></td>
                                <td class=" "><?=$list->first_name?></td>
                                <td class=" "><?=$list->last_name?></td>
                                <td class=" "><?=$list->position_name?></td>
                                <td class=" "><?=$dt->format('m-d-Y')?></td>
                                <td class=" last"><a href="<?=base_url()?>index.php/manage_accounts/edit_employee/<?=$list->id?>"><i class="fa fa-edit"></i></a>
                                <a href="#" data-id="<?=$list->id?>" id="btn_delete"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                          <?php  }
                          ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
<script>
$(document).on("click","#btn_add",function(){
  window.location = "<?=base_url('index.php/manage_accounts/add_employee')?>";
})

$(document).on("click","#btn_delete",function(){
  id = $(this).data("id");
  Swal.fire({
          title: 'Are you sure you want to delete this?',
          showDenyButton: false,
          showCancelButton: true,
          confirmButtonText: 'Ok',
          },'','warning').then((result) => {
              /* Read more about isConfirmed, isDenied below */
              if (result.isConfirmed) {
                  $.ajax({
                      type: "POST",
                      url: "<?=base_url()?>index.php/manage_accounts/delete_employee",
                      data: {id: id},
                      success: function(res){
                          console.log(res);
                          if(res!=0){
                              Swal.fire('Successfully deleted!', '', 'success').then((res) =>{
                                  if(res.isConfirmed){
                                      window.location = "<?=base_url()?>index.php/manage_accounts/employee";
                                  }
                              });
                          }
                          else{
                              Swal.fire('Something went wrong!', '', 'warning');
                          }
                      }
                  })
              }
          })
})
</script>