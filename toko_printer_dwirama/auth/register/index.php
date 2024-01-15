<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="kotak-login">
        <h3>Printer Ramzz</h3>
        <h4>Register your account</h4>

        <form action="process.php" method="POST">
            
            <input type="text" name="username" id="username" class="form-control" placeholder="Nama Lengkap"><br /><br />

            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" placeholder="Username"><br /><br />

            <input type="password" name="password" id="password" class="form-control" placeholder="Password"><br /> <br />

            <button type="submit" name="register">Register</button>
        </form>
    </div>
</body>
</html>