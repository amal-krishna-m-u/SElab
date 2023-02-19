<?php// This code loops through the user table and displays the users' names and their roles. 
// It also has an edit and delete button for each user.

//foreach($users as $user)
  //  echo $user['username'] . " is a " . $user['role'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
</head>

<body>
    <?php include('header.php');?>
    <h1> List of Users</h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">User ID</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <th scope="row"><?php echo $user['id']; ?></th>
                    <td><?php echo $user['username']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['role']; ?></td>
                    <td>
                        <a href="<?php echo base_url('admin/edit_user/'.$user['id']) ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo base_url('admin/delete_user/'.$user['id']) ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>