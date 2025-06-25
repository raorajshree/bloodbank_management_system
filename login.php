<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Blood Valve</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Login</h2>
                <form method="POST">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label>User Type</label>
                        <select name="type" class="form-select">
                            <option value="admin">Admin</option>
                            <option value="donor">Donor</option>
                            <option value="requester">Requester</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-danger w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>