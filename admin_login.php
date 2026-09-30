<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<?php

session_start();

if($_SERVER['REQUEST_METHOD']== 'POST'){
    $password = $_POST['password'];
    if ($password == '12345'){
    $_SESSION['is_admin'] = true;
    header('location:admin_panel.php');
    exit;
}
    else;{echo "Wrong Password";
}

}   
?>

<form method='post'>

<!-- <input type='password' name='password' required>
<button type='submit'> Login </button> -->

<div class="container mt-5" style="max-width:400px;">
    <h3 class="text-center mb-4">Admin Login</h3>
    <form method="post">
        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>

<!-- </form> -->

