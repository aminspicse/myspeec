<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php 
        foreach($msg->result() as $row){
            echo $row->send_id.' => '.$row->receive_id.' '. $row->message.' '. $row->send_time.'<br>';
        }
       
    ?>
</body>
</html>