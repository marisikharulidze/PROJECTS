<?php
    $query = "SELECT * FROM info";
    $var = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($var)): ?>
        <tr>
            <td><?php echo $row['wignis_dasaxeleba'];?></td>
            <td><?php echo $row['gverdebis_raodenoba'];?></td>
            <td><?php echo $row['fasi'];?></td>
            <td><?php echo $row['shtrix_kodi'];?></td>
            <td><?php echo $row['avtori'];?></td>
            <td><?php echo $row['avtori'];?></td>
            <td>
                <a href="info.php?edit=<?php echo $row['id']; ?>" class="edit">Edit</a>
                <a href="info.php?delete=<?php echo $row['id']; ?>" class="delete">Delete</a>
            </td>
        </tr>
<?php endwhile;?>



<?php 
        if(@$update == true){ ?>
            <button name="update" >update</button><br>
        <?php }
        else { ?>
            <button name="submit" >submit</button><br>
        <?php } ?>