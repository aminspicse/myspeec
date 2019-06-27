<div class="content-wrapper">
    <div class="row bg-white margin">
        <div class="col-md-1 col-xs-2 col-sm-2">
            <form action="<?= base_url('posts')?>">
                <input type="text" name="keyword" style="display:none" value="<?= $_GET['keyword'] ?>">
                    <input type="submit" name="search" class="btn btn-link card-link" value="Posts" />
            </form>
        </div>
        <div class="col-md-1 col-xs-2 col-sm-2">
            <form action="<?= base_url('friends')?>">
                <input type="text" name="keyword" id="search" style="display:none" value="<?= $_GET['keyword'] ?>">
                <input type="submit" name="search" value="Friends" class="btn btn-link card-link">
            </form>
        </div>
        <div class="col-md-1 col-xs-2 col-sm-2">
            <form action="<?= base_url('friends')?>">
                <input type="text" name="keyword" id="search" style="display:none" value="<?= $_GET['keyword'] ?>">
                <input type="submit" name="search" value="Jobs" class="btn btn-link card-link">
            </form>
        </div>
        <div class="col-md-1 col-xs-1 col-sm-2">
            <form action="<?= base_url('video')?>">
                <input type="text" name="keyword" style="display:none" value="<?= $_GET['keyword'] ?>">
                <input type="submit" name="search" value="Videos" class="btn btn-link card-link">
            </form>
        </div>
        <div class="col-md-1 col-xs-1 col-sm-2">
            <form action="<?= base_url('image')?>">
                <input type="text" name="keyword" style="display:none" value="<?= $_GET['keyword'] ?>">
                <input type="submit" name="search" value="Images" class="btn btn-link card-link">
            </form>
        </div>
        
    </div>

    
    