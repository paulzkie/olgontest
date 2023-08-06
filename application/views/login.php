<html>
<title></title>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js" integrity="sha512-RdSPYh1WA6BF0RhpisYJVYkOyTzK4HwofJ3Q7ivt/jkpW6Vc8AurL1R+4AUcvn9IwEKAPm/fk7qFZW3OuiUDeg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.js" integrity="sha512-K3MtzSFJk6kgiFxCXXQKH6BbyBrTkTDf7E6kFh3xBZ2QNMtb6cU/RstENgQkdSLkAZeH/zAtzkxJOTTd8BqpHQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.20/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    <div class="row">
        <div class="col-md-12 login-form">
            <h1>::Login::</h1>
            <div class="form-group col-md-4 pull-left">
                <label for="">Username:</label>
                <input type="text" placeholder="Username" class="form-control" id="username">
            </div>
            <div class="form-group col-md-4">
                <label for="">Password:</label>
                <input type="password" placeholder="Password" class="form-control" id="password">
            </div>
            <div class="form-group col-md-4" align="center">
                <button class="btn btn-primary" id="btn_login">Login</button>
            </div>
        </div>
    </div>
<script>
var base_url = 'testbank';
$(document).on("keyup","#password",function(e){
    if(e.keyCode===13){
        $("#btn_login").click();
    }
});
$(document).on("click","#btn_login",function(){
    username = $("#username").val();
    password = $("#password").val();
    if(username == '' || password == ''){
        Swal.fire('Empty field!','','warning');
    }
    else{
        $.ajax({
            type: "POST",
            url: "<?=base_url()?>index.php/welcome/validate", 
            data: {username: username, password: password},
            dataType: "JSON",
            success: function(data){
                console.log(data);
                if(data.stat==0){
                    Swal.fire('Invalid credentials!','','warning');
                }
                else{
                    location.href = "<?=base_url()?>index.php/manage_accounts";
                }
            }
        })
    }
})
$(document).on("click","#btn_deposit",function(){
    location.href = "<?=base_url()?>index.php/deposit";
})
</script>
</body>
</html>