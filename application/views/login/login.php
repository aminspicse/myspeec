<br><br>
    
    
        <div class=" row" style="">
            <div class="col-md-4 offset-md-4 col-xs-12 col-sm-12 img-thumbnail">
            <p class="text-center text-danger error"><b><?= $error ?></b></p>
            <p class="text-center text-danger error"><b><?= $this->session->flashdata('msg')?></b></p>

                <form action="<?= base_url() ?>Login/Check_Validation" method="GET" class="">
                    <input type="text" name="username" class="username" placeholder="Email Address">
                    <input type="password" name="password" class="password" placeholder="Password">
                    <button type="submit" name="login" class="login btn-success">Log In</button>
                    <br>
                    <a href="<?= base_url('forgot')?>" class="btn btn-block">Forgot Password</a>
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
        .password{
            margin-top: 5px;
            width: 100%;
            height: 40px;
            border: 2px solid black;
            font-size: 20px;
            font-family: arial;
        }
        .login{
            margin-top: 5px;
            width: 100%;
            height: 40px;
            font-size: 20px;
            font-family: arial;
        }
        .error{
            margin-top: 2px;
            margin-bottom: 2px;
            font-size: 16px;
        }
    </style>
</html>
