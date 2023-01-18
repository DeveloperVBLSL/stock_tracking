<form action="" method="POST">

    <?php  
        $n = $_POST['n'];
        for($i=1;$i<=$n;$i++)
        {
    ?>

            Enter Name:
            <input type="text" name="<?php echo $i.'nm';  ?>" value=""/>
            <input type="hidden" name="n" value="<?php echo $n; ?>" />
        </br></br>

<?php
        }
?>

        <input type="submit" name="ins" value=" SAVE " />
    </form>

<?php  
    if(isset($_POST['ins']))
    {
        $c = mysqli_connect("localhost","root","","college");

        $n=$_POST['n'];
        for($i=1;$i<=$n;$i++)
        {
            $nm=$_POST[$i."nm"];
            mysqli_query($c,"insert into t1 (name) values('$nm')");

        }
        echo "Data added successfully...";

    }
?>

