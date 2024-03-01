<html>

<body>
    <table border="2">
        <tr>
            <th>report Id</th>
            <th>type</th>
            <th>details</th>
        </tr>
        <?php
        include 'dbConnection.php';
        $sql = mysqli_query($connection, "select * from reports");
        while ($r = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $r['rid'] ?></td>
                <td><?php echo $r['type'] ?></td>
                <td><?php echo $r['details'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>