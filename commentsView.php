<html>

<body>
    <table border="2">
        <tr>
            <th>comment Id</th>
            <th>User id</th>
            <th>user name</th>
            <th>comment</th>
            <th>ratings</th>
        </tr>
        <?php
        include 'dbConnection.php';
        $sql = mysqli_query($connection, "select * from comments");
        while ($r = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $r['cid'] ?></td>
                <td><?php echo $r['uid'] ?></td>
                <td><?php echo $r['uname'] ?></td>
                <td><?php echo $r['comments'] ?></td>
                <td><?php echo $r['rtn'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>