<!-- admin/dashboard.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <style>
        h1,
        .btn {
            margin-left: 30px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <a class="btn btn-sm btn-danger mb-3" href="<?php echo base_url('auth/logout'); ?>">
        <i class="fas fa-sign-out-alt fa-sm"></i> Logout
    </a>
    <h1>Halo, Admin</h1>

</body>

</html>