<br><br>
<div class="row">
    <div class="col-md-4 offset-md-4 col-xs-12 col-sm-12 img-thumbnail">
        <p class="text-danger text-center"><?php echo $error ?></p>
        <form action="<?= base_url('Forgot_Password/forgot_val')?>" method="get">
            <input type="email" name="username" class="username" required placeholder="Enter Your Email">
            <button type="submit" name="send_email" class="send_email btn-info">Send Me Temp Password</button>
        </form>
    </div>
</div>
</body>
<style>
        .username{
            width: 100%;
            height: 40px;
            border: 2px solid green;
            font-size: 20px;
            font-family: arial;
        }
        .send_email{
            margin-top: 5px;
            width: 100%;
            height: 40px;
            font-size: 20px;
            font-family: arial;
        }
</style>
</html>