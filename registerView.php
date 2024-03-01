<html>

<body>
    <table border="2">
        <tr>
            <th>Customer Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>email</th>
        </tr>
        <?php
        include 'dbConnection.php';
        $sql = mysqli_query($connection, "select * from customer");
        while ($r = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $r['rid'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['cno'] ?></td>

            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>