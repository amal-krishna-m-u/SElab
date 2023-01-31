
<html>
    <!-- Path: review\app\Views\login.php -->
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="<?php echo base_url('/admin/login'); ?>" method="post">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="<?php echo set_value('password'); ?>">
            <button type="submit">Submit</button>
        </form>
    </body>
</html>
