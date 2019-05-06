<div class="content-wrapper">
    <div class="row bg-white margin">
        <div class="col-md-1 col-xs-2 col-sm-2">
            <form action="<?= base_url('Search/posts/')?>">
                <input type="text" name="search" style="display:none" value="<?= $_GET['search'] ?>">
                    <input type="submit" name="keyword" class="btn btn-link card-link" value="Posts" />
            </form>
        </div>
        <div class="col-md-1 col-xs-2 col-sm-2">
            <form action="<?= base_url('Search/friends/')?>">
                <input type="text" name="search" id="search" style="display:none" value="<?= $_GET['search'] ?>">
                <input type="submit" name="keyword" value="Friends" class="btn btn-link card-link">
            </form>
        </div>
        <div class="col-md-1 col-xs-1 col-sm-2">
            <form action="<?= base_url('Search/videos/')?>">
                <input type="text" name="search" style="display:none" value="<?= $_GET['search'] ?>">
                <input type="submit" name="keyword" value="Videos" class="btn btn-link card-link">
            </form>
        </div>
        <div class="col-md-1 col-xs-1 col-sm-2">
            <form action="<?= base_url('Search/images/')?>">
                <input type="text" name="search" style="display:none" value="<?= $_GET['search'] ?>">
                <input type="submit" name="keyword" value="Images" class="btn btn-link card-link">
            </form>
        </div>
        
    </div>

    
    