
            <?php
            $query=mysqli_query($con,"select * from home");                   
            while($row=mysqli_fetch_assoc($query))
            {
            ?>
<footer>
        <div class="text">
            <span>Created By <a href="#"><?php echo $row['home_name'];?></a> | &#169; 2023 All Rights Reserved.</span>
        </div>
</footer>
                <?php 
                }
                ?>