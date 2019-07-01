<div class="content-wrapper bg-white" style="">
    <h3>Create A New Company</h3>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-3"><label for="">Company Name:</label></div>
            <div class="col-md-4">
                <input type="text" name="company_name" class="widthinput" value="<?= set_value('company_name')?>" placeholder="Company Name" required>
                <span class="text-danger"><?= form_error('company_name')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">Company URL:</label></div>
            <div class="col-md-8">
                <input type="text" name="company_url" class="widthinput" value="<?= set_value('company_url')?>" placeholder="Choase an URL" required> 
                <p class="text-danger">dosen't use any specal cahracter (<,./?"\|*%$#@!-=+{[)</p>
                <span class="text-danger"><?= form_error('company_url')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">Contuct No 1:</label></div>
            <div class="col-md-8">
                <input type="text" name="contact_1" class="widthinput" value="<?= set_value('contact_1')?>" placeholder="Contact 1" require="required">
                <span class="text-danger"><?= form_error('contact_1')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">Contuct No 1:</label></div>
            <div class="col-md-4">
                <input type="text" name="contact_2" class="widthinput" value="<?= set_value('contact_2')?>" placeholder="Contact 2" >
                <span class="text-danger"><?= form_error('contact_2')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">Company Email:</label></div>
            <div class="col-md-4">
                <input type="text" name="company_email" class="widthinput" value="<?= set_value('company_email')?>" placeholder="Company Email" >
                <span class="text-danger"><?= form_error('company_email')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">Company Website:</label></div>
            <div class="col-md-4">
                <input type="text" name="company_website" class="widthinput" value="<?= set_value('company_website')?>" placeholder="Company Website" >
                <span class="text-danger"><?= form_error('company_website')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">Facebook:</label></div>
            <div class="col-md-4">
                <input type="text" name="company_facebook" class="widthinput" value="<?= set_value('company_facebook')?>" placeholder="Company Facebook Link" >
                <span class="text-danger"><?= form_error('company_facebook')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">Establish Date:</label></div>
            <div class="col-md-4">
                <input type="date" name="company_est_date" class="widthinput" value="<?= set_value('company_est_date')?>" placeholder="Company Enst. Date" require="required">
                <span class="text-danger"><?= form_error('company_est_date')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">company Logu:</label></div>
            <div class="col-md-4">
                <input type="date" name="company_logu" class="widthinput" value="<?= set_value('company_logu')?>" placeholder="Company Enst. Date" require="required">
                <span class="text-danger"><?= form_error('company_logu')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3"><label for="">Company Address:</label></div>
            <div class="col-md-4">
                <textarea name="company_address" class="widthinput" placeholder="Company Address"><?= set_value('company_address')?></textarea>
                <span class="text-danger"><?= form_error('company_address')?></span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1 offset-4">
                <button name="comp_register" class="">Register</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>

<style>
    .widthinput{
        width: 400px;
    }
    
</style>
     
     