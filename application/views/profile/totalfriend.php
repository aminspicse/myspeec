                <table class="table ">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Country</th>
                        <th>Profile photo</th>
                        <th>Remove</th>
                    </tr>
                <?php $i = 1; foreach($total_friend->result() as $row):?>
                    <tr>
                        <?php 
                            
                            $qry = $this->Profile_Model->totalfriends($row->sub_id);
                        ?>
                        <td><?php echo $i++;?></td>
                        <td><a href="<?= base_url('Public_Profile/index/').$qry['user_id']?>"><?= $qry['fname'].' '.$qry['lname'] ?></a></td>
                        <td><?= $qry['phone'] ?></td>
                        <td><?= $qry['country']  ?></td>
                        <td><img src="<?=$qry['photo']  ?>" width="50px" alt=""></td>
                        <td><a href="<?= base_url('Profile/remove_friend/').$qry['user_id']?>">Remove</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    

    </body>
</html>