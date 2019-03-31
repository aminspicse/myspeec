<div class="content-wrapper">
    <div class="row">
        <div class="col-md-1">
            <form action="<?= base_url('Search/posts/')?>">
                <input type="text" name="search" style="display:none" value="<?= $_GET['search'] ?>">
                    <input type="submit" name="keyword" class="btn btn-link card-link" value="Posts" />
            </form>
        </div>
        <div class="col-md-1">
            <form action="<?= base_url('Search/friends/')?>">
                <input type="text" name="search" style="display:none" value="<?= $_GET['search'] ?>">
                <input type="submit" name="keywords" value="Friends" class="btn btn-link card-link">
            </form>
        </div>
        <div class="col-md-1">
            <a href="">Video</a>
        </div>
        <div class="col-md-1">
            <a href="">Image</a>
        </div>
        
    </div>
    
    