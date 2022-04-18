<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>CAR POOLING</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<style>
    .b{
        width: 20vh;
        margin:auto;
        text-align:center;
        padding-bottom:2rem;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row">
    <br />
    <h2 align="center">CAR POOLING</h2>
    <br />
        <div class="col-md-3">                                
            <div class="list-group">
                <h3>Price</h3>
                <input type="hidden" id="hidden_minimum_price" value="0" />
                <input type="hidden" id="hidden_maximum_price" value="65000" />
                <p id="price_show">1000 - 10000</p>
                <div id="price_range"></div>
            </div>                
        </div>
        <div class="col-md-9">
            <br />
           <div class="row filter_data">
        </div>
    </div>
    </div>
</div>
<style>
#loading{text-align:center; background: url('images/loading.gif') no-repeat center; height: 150px;}
</style>
<script>
$(document).ready(function(){
    filter_data();
    function filter_data()
    {
        $('.filter_data').html('<div id="loading" style="" ></div>');
        var action = 'fetch_data';
        var minimum_price = $('#hidden_minimum_price').val();
        var maximum_price = $('#hidden_maximum_price').val();
        $.ajax({
            url:"fetch_data.php",
            method:"POST",
            data:{action:action, minimum_price:minimum_price, maximum_price:maximum_price},
            success:function(data){
                $('.filter_data').html(data);
            }
        });
    }
    $('#price_range').slider({
        range:true,
        min:0,
        max:10000,
        values:[1000, 10000],
        step:500,
        stop:function(event, ui)
        {
            $('#price_show').html(ui.values[0] + ' - ' + ui.values[1]);
            $('#hidden_minimum_price').val(ui.values[0]);
            $('#hidden_maximum_price').val(ui.values[1]);
            filter_data();
        }
    });
});
</script>


<!-- <div class="list-group b">
  <a href="http://localhost/ca3/carproject.php" class="list-group-item list-group-item-action active">
  <h4>Fill the details</h4>
  </a>
</div> -->
</body>
</html>



<!-- car pooling form -->


