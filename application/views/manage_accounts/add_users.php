<!-- page content -->
<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Add Users</h3>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_content" id="form">
                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Username<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <input class="form-control required_input" data-validate-length-range="6" data-validate-words="2" name="username" id="username" placeholder="john01" required="required" />
                                        </div>
                                    </div>
                                    
                                    <div class="field item form-group">
										<label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
										<div class="col-md-6 col-sm-6">
											<input class="form-control required_input" type="password" id="password1" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*]).{8,}" title="Minimum 8 Characters Including An Upper And Lower Case Letter, A Number And A Unique Character" required />
											
											<span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
												<i id="slash" class="fa fa-eye-slash"></i>
												<i id="eye" class="fa fa-eye"></i>
											</span>
										</div>
									</div>

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Name<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control position required_input" id="name">
                                                <option>Select Name</option>
                                                <?php
                                                foreach($employee as $list){ ?>
                                                <option value="<?=$list->first_name.' '.$list->last_name.'-'.$list->id?>"><?=$list->first_name.' '.$list->last_name?></option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Role<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                            <select class="form-control position required_input" id="position">
                                                <!-- <option>Select Role</option>
                                                <option value="1">Manager</option>
                                                <option value="2">Web Developer</option>
                                                <option value="3">Web Designer</option> -->
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
                                                <option value="2">Web Developer</option>
                                                <option value="3">Web Designer</option>    
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
<script>
$(document).on("change","#name", function(){
    var role = "<?=$this->session->userdata("position")?>";
    var get_name_id = $("#name").val();
    var split = get_name_id.split("-");
    selectElement = document.querySelector('#name');
    var id = split[1];
    if($(this).val()!="Select Name" && role != 2 && role != 3){
        $.ajax({
            type: "POST",
            url: "<?=base_url('index.php/manage_accounts/get_position')?>",
            data: {id: id},
            success: function(res){
                console.log(res);
                document.getElementById("position").selectedIndex = res;
            }
        })
    }
    //document.getElementById("position").selectedIndex = id;
})
//save user credential
$(document).on("click","#btn_save",function(){
    if(validate.standard('form')){
        var get_name_id = $("#name").val();
        var split = get_name_id.split("-");
        var name = split[0];
        var id = split[1];
        var data = {id: id, username: $("#username").val(), password: $("#password1").val(), name: name, role: $("#position").val()};
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
                url: "<?=base_url()?>index.php/manage_accounts/save_user",
                data: data,
                success: function(res){
                    console.log(res);
                    if(res!=0){
                        Swal.fire('Successfully saved!', '', 'success').then((res) =>{
                            if(res.isConfirmed){
                                window.location = "<?=base_url()?>index.php/manage_accounts";
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
})
$(document).on("click","#btn_cancel",function(){
    window.location = "<?=base_url()?>index.php/manage_accounts";
})
</script>