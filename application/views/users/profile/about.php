            <table class="table table-bordered">
<?php foreach($query->result() as $row):?>
                <tr>
                        <td>F'Name:</td>
                        <td><?= $row->fname; ?></td>
                        <td>L'Name:</td>
                        <td><?= $row->lname; ?></td>
                    </tr>
                    <tr>
                        <td>User Name: </td>
                        <td><?= $row->username; ?></td>
                        <td>Contact: </td>
                        <td><?= $row->phone; ?></td>
                    </tr>
                    <tr>
                        <td>Agreement: </td>
                        <td class="text-success"><?php // $row->agreement; ?></td>
                        <td>Country: </td>
                        <td><b class="text-success"><?= $row->country; ?></b><a href="<?= base_url('editinfo')?>" class="card-link">  Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    

    </body>
</html>