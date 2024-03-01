<html>

<body>
    <table border="2">
        <tr>
            <th>Shop Id</th>
            <th>Name</th>
            <th>Place</th>
            <th>licence no</th>
            <th>Website link</th>
            <th>email</th>
            <th>contact</th>
        </tr>
        <?php
        include 'dbConnection.php';
        $sql = mysqli_query($connection, "select * from shop");
        while ($r = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $r['sid'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['place'] ?></td>
                <td><?php echo $r['lno'] ?></td>
                <td><?php echo $r['weblink'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['contact'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>