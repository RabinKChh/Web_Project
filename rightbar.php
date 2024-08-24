<div class="container">
    <h2>Photo Gallery</h2>
    <a href="gallery.php">
        <img src="asset/images/sauna.jpg" alt="" class="img-thumbnail">
    </a>

    <h2>News And Event</h2>
    <?php
    include 'connection.php';
    $query= "select * from posts order by rand() limit 3";

    $run=mysqli_query($conn,$query);
    while ($row = mysqli_fetch_array($run)) { 
$a=$row['id'];
$b=$row['title'];
$c=$row['content'];
$d=$row['image'];
    
    ?>
<ul>
    <li>
        <a href="post.php ?id=<?php echo  $a; ?>"><?php echo $b; ?></a>
    </li>

</ul>

    <?php } ?>
    <h2>Advertisement</h2>
    <img src="asset/images/yoga.webp" alt="advertisement" class="img-thumbnail">
</div>
