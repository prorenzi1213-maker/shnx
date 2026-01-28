<?php
// Handle upload
$uploadDir = "uploads/";
$profileImg = $uploadDir . "profile.jpg";

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_FILES['profile'])) {
    move_uploaded_file($_FILES['profile']['tmp_name'], $profileImg);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>

    <style>
        * {
            font-family: 'Segoe UI', sans-serif;
            box-sizing: border-box;
        }

        body {
            margin: 0;
            height: 100vh;
            background: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            width: 320px;
            padding: 30px 20px;
            border-radius: 15px;
            box-shadow: 0 12px 25px rgba(0,0,0,0.1);
            text-align: center;
        }

        .avatar {
            width: 100px;
            height: 100px;
            background: #3b82f6;
            border-radius: 50%;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .avatar span {
            color: white;
            font-size: 40px;
            font-weight: bold;
        }

        .avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h2 {
            margin: 10px 0 0;
            font-size: 22px;
            font-weight: 700;
        }

        h3 {
            margin: 5px 0;
            font-size: 18px;
            font-weight: 700;
        }

        p {
            margin-top: 8px;
            font-size: 14px;
            font-weight: bold;
        }

        input[type="file"] {
            margin-top: 15px;
        }

        button {
            margin-top: 10px;
            padding: 8px 15px;
            border: none;
            background: #3b82f6;
            color: white;
            border-radius: 8px;
            cursor: pointer;
        }

        button:hover {
            background: #2563eb;
        }
    </style>
</head>

<body>

<div class="card">

    <div class="avatar">
        <?php if (file_exists($profileImg)) { ?>
            <img src="<?php echo $profileImg; ?>" alt="Profile">
        <?php } else { ?>
            <span>J</span>
        <?php } ?>
    </div>

    <h2>Escanilla </h2>
    <h3>Orenzi Shan</h3>
    <p>BSIT-22D</p>

    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="profile" required>
        <br>
        <button type="submit">Upload Photo</button>
    </form>

</div>

</body>
</html>
