<html>
    <!-- this is for the dashboard of the admin after login -->
    <head>
        <title>Dashboard</title>
    </head>
    <body>
        <h1>Dashboard</h1>
        <a href="<?php echo base_url('/admin/logout'); ?>">Logout</a>
        <a href="<?php echo base_url('/admin/insert'); ?>">Insert</a>
        <a href="<?php echo base_url('/admin/update'); ?>">Update</a>
        <a href="<?php echo base_url('/admin/delete'); ?>">Delete</a>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Password</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($admin) && is_array($admin)) : ?>
                    <?php foreach ($admin as $admin) : ?>
                        <tr>
                            <td><?php echo $admin['id']; ?></td>
                            <td><?php echo $admin['username']; ?></td>
                            <td><?php echo $admin['password']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="3">No Admin Found</td>
                    </tr>
                <?php endif ?>
            </tbody>
        </table>
    </body>
</html>
