<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="/jquery/jquery-1.8.2.min.js"></script>
<script type="text/javascript">

$(document).ready(function(){

    $('.box').click(function(){
        var obj = $(this);
        $('.box').css('display','inline-block');
        $('.box').animate({
            'width' : '150px',
            'height': '150px',
        },200, function(){
                obj.css('display', 'block');
            });
        $(this).animate({
            'width' : '100%',
            'height': '300px',
        },200);
    });
    
});

</script>
</head>
<body>

<? 

for ($i = 0; $i < 20; $i++){
    echo '<div class="box"></div>';
}

?>

</body>
</html>