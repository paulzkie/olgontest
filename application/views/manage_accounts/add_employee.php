<!-- page content -->
<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Add Employee</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_content" id="form">
                                    </p>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">First Name<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control required_input" data-validate-length-range="6" data-validate-words="2" name="first_name" id="first_name" placeholder="Paul" required="required" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Last Name<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control required_input" data-validate-length-range="6" data-validate-words="2" name="last_name" id="last_name" placeholder="Fradejas" required="required" />
                                        </div>
                                    </div>
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Position<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control position required_input" id="position">
                                                <?php
                                                if($this->session->userdata("position")==2){ ?>
                                                <option value="2" <?=($this->session->userdata("position")==2) ? 'selected' : ''?>>Web Developer</option>
                                                <?php
                                                }    
                                                else if($this->session->userdata("position")==3){ ?>
                                                <option value="3" <?=($this->session->userdata("position")==3) ? 'selected' : ''?>>Web Designer</option>   
                                                <?php    
                                                }
                                                else{ ?>
                                                <option>Select Position</option>
                                                <option value="1">Manager</option>
                                                <option value="2" <?=($this->session->userdata("position")==2) ? 'selected' : ''?>>Web Developer</option>
                                                <option value="3" <?=($this->session->userdata("position")==3) ? 'selected' : ''?>>Web Designer</option>    
                                                <?php    
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="field item form-group" align="right">
                                        <div class="col-md-6 col-sm-6">
                                            <button class="btn btn-primary" id="btn_save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
<!-- Javascript functions	-->
<script>
$(document).on("click","#btn_save",function(){
    if(validate.standard('form')){
        var data = {first_name: $("#first_name").val(), last_name: $("#last_name").val(), position: $("#position").val() };
        Swal.fire({
                title: 'Are you sure you want to save?',
                showDenyButton: false,
                showCancelButton: true,
                confirmButtonText: 'Ok',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "POST",
                            url: "<?=base_url()?>index.php/manage_accounts/save_employee",
                            data: data,
                            success: function(res){
                                console.log(res);
                                if(res!=0){
                                    Swal.fire('Successfully saved!', '', 'success').then((res) =>{
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
    }
    // var data = {fullname: $("#name").val(), username: $("#username").val(), password: $("#password1").val() };
    // Swal.fire({
    // title: 'Are you sure you want to save?',
    // showDenyButton: false,
    // showCancelButton: true,
    // confirmButtonText: 'Ok',
    // }).then((result) => {
    // /* Read more about isConfirmed, isDenied below */
    // if (result.isConfirmed) {
    //     $.ajax({
    //         type: "POST",
    //         url: "<?=base_url()?>index.php/manage_accounts/save_user",
    //         data: data,
    //         success: function(res){
    //             console.log(res);
    //             if(res!=0){
    //                 Swal.fire('Successfully saved!', '', 'success').then((res) =>{
    //                     if(res.isConfirmed){
    //                         window.location = "<?=base_url()?>index.php/manage_accounts";
    //                     }
    //                 });
    //             }
    //             else{
    //                 Swal.fire('Something went wrong!', '', 'warning');
    //             }
    //         }
    //     })
    // } else if (result.isDenied) {
    //     Swal.fire('Changes are not saved', '', 'info')
    // }
    // })
})
$(document).on("click","#btn_cancel",function(){
    window.location = "<?=base_url()?>index.php/manage_accounts/employee";
})
</script>