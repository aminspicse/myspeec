<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper bg-white">
    <h2 class="text-center text-success">Your Total Earning Score <?= $score ?></h2>
    <input type="number" id="score" value="<?= $score ?>" style="display:none">
    <h4>10 score means 1 Bangladeshi Taka. You Earn Minimum 100 score to withdraw your score point. Withdraw is available 
        Mobile Recharge, Bkas, Rocket, International Debit Card, Master Card. Mobile Recharge is available just for 
        Bangladesh and Indian Mobile operator.
    </h4>
    <button class="btn btn-danger" onclick="check()">Withdraw</button>
    <h2 id="data"></h2>
</div>
<script>
    function check(){
        var a = document.getElementById('score').value;
        if(a<=100){
            alert('You have no Avaliable Score Minimum withdraw score 100');
        }else{
            document.getElementById('data').innerHTML = "If you face any problem please contuct <b>info@myspeec.com</b>";
        }
    }
</script>
</body>
</html>