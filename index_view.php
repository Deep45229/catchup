<!DOCTYPE html>
<html>

<head>
    <title>User List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
    <h1>User List</h1>
    <a href="index.php?action=create" style="float:right">Add New Record</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['gender']; ?></td>
                <td><?php echo $user['phone']; ?></td>
                <td>
                    <a href="index.php?action=edit&id=<?php echo $user['id']; ?>" style="color:green">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>&nbsp
                    <a href="index.php?action=delete&id=<?php echo $user['id']; ?>" style="color:red" onclick="return confirm('Are you sure you want to delete this record?')">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <div class="pagination">
    <?php for ($i = 1; $i <= $totalPages; $i++) : ?>
        <button class="page-link" onclick="loadUsers(<?php echo $i; ?>)"><?php echo $i; ?></button>
    <?php endfor; ?>
</div>


    <br>
</body>
</html>