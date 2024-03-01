<html>

<body>
    <table border="2">
        <tr>
            <th>Request Id</th>
            <th>User Id</th>
            <th>User Name</th>
            <th>Vehicle</th>
            <th>Complaint</th>
            <th>Vehicle no</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        <?php
        include 'dbConnection.php';
        $sql = mysqli_query($connection, "select * from request");
        while ($r = mysqli_fetch_array($sql)) {
        ?>
            <tr>
                <td><?php echo $r['rqid'] ?></td>
                <td><?php echo $r['uid'] ?></td>
                <td><?php echo $r['uname'] ?></td>
                <td><?php echo $r['vehicle'] ?></td>
                <td><?php echo $r['complaint'] ?></td>
                <td><?php echo $r['vno'] ?></td>
                <td><?php echo $r['dte'] ?></td>
                <td><?php echo $r['status'] ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>