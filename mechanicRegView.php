<html>

<body>
    <table border="2">
        <tr>
            <th>mechanic Id</th>
            <th>Name</th>
            <th>idproof</th>
            <th>contact</th>
            <th>place</th>
            <th>gender</th>
            <th>email</th>
            <th>experience</th>
        </tr>
        <?php
        include 'dbConnection.php';
        $sql = mysqli_query($connection, "select * from mechanic");
        while ($r = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $r['mid'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['idproof'] ?></td>
                <td><?php echo $r['contact'] ?></td>
                <td><?php echo $r['place'] ?></td>
                <td><?php echo $r['gender'] ?></td>
                <td><?php echo $r['email'] ?></td>
                <td><?php echo $r['experience'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>