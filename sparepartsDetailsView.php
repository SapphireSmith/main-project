<html>

<body>
    <table border="2">
        <tr>
            <th>Shop Id</th>
            <th>part name</th>
            <th>description</th>
            <th>price</th>
            <th>image</th>
            <th>stock</th>
            <th>uid</th>
        </tr>
        <?php
        include 'dbConnection.php';
        $sql = mysqli_query($connection, "select * from spareparts");
        while ($r = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $r['sid'] ?></td>
                <td><?php echo $r['pname'] ?></td>
                <td><?php echo $r['description'] ?></td>
                <td><?php echo $r['price'] ?></td>
                <td><?php echo $r['image'] ?></td>
                <td><?php echo $r['stock'] ?></td>
                <td><?php echo $r['uid'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>