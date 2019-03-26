<div class="content-wrapper">
    <div class="row bg-danger">
        <div class="col-md-1">
            <form action="<?= base_url('Search/posts/')?>">
                <input type="text" name="search" style="display:none" value="<?= $_GET['search'] ?>">
                <a><button type="submit" name="keyword">Posts</button></a>
            </form>
        </div>
        <div class="col-md-1">
            <form action="<?= base_url('Search/friends/')?>">
                <input type="text" name="search" style="display:none" value="<?= $_GET['search'] ?>">
                <button type="submit" name="keywords">Friends</button>
            </form>
        </div>
        <div class="col-md-1">
            <a href="">Video</a>
        </div>
        <div class="col-md-1">
            <a href="">Image</a>
        </div>
        
    </div>
    
    