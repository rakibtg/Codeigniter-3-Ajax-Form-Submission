<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Website Form</title>
    <style>
        html, body {
            background-color: #ccc;
        }
        input {
            width: 300px;
        }
        div.container {
            background-color: #fff;
            border-radius: 2px;
            margin: auto auto;
            width: 50%;
            padding: 20px;
            text-align: center;
        }
        div.errors {
            padding: 10px;
            color: red;
            background-color: #ddd;
            border: 1px solid #ccc;
        }
        div.success {
            padding: 22px;
            color: green;
            background-color: #ddd;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <div class="container">
        <div class="jsError"></div>

        <h3>Please give us a valid website URL</h3>
        <?php echo form_open('website/submission', array('class'=>'jsform')); ?>
        <p><input type="text" name="website"></p>
        <p><input type="submit" value="Check Website"></p>
        <?php echo form_close(); ?>
    </div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $('form.jsform').on('submit', function(form){
            form.preventDefault();
            $.post('/index.php/website/submission', $('form.jsform').serialize(), function(data){
                $('div.jsError').html(data);
            });
        });
    });
</script>


</html>
