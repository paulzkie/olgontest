<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<div class="row">
<div class="col-md-3">
<input type='text' class='form-control' id='number' placeholder='input a number'>
<input type='button' class='btn btn-primary' id='submit' value='Calculate' onClick='getfactorial()'>
</div>
</div>
<div class="row">
<div class="col-md-3">
<div id="result"></div>
</div>
</div>
<script>
function getfactorial(){
var number = document.getElementById('number').value;
// checking if number is negative
if (number < 0) {
    document.getElementById('result').innerHTML = 'Error! Factorial for negative number does not exist.';
}
// if number is 0
else if (number === 0) {;
    document.getElementById('result').innerHTML = "<h5><label>::Result::</label></h5> <h4>"+number +"<h4>";
}

// if number is positive
else {
    let fact = 1;
    for (i = 1; i <= number; i++) {
        fact *= i;
    }
    document.getElementById('result').innerHTML  = "<h5><label>::Result::</label></h5> <h4>"+fact +"<h4>";
}
}
</script>