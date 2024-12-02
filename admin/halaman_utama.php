<?php 
include 'header.php';
// pesanan baru 
$result1 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE terima = 0 and tolak = 0");
$jml1 = mysqli_num_rows($result1);

// pesanan dibatalkan/ditolak
$result2 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE tolak = 1");
$jml2 = mysqli_num_rows($result2);

// pesanan diterima
$result3 = mysqli_query($conn, "SELECT distinct invoice FROM produksi WHERE terima = 1");
$jml3 = mysqli_num_rows($result3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Styling the status boxes */
        .status-box {
            background-color: #ffe0f0; /* Pink pastel background */
            padding: 30px 20px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .status-box h4 {
            font-weight: bold;
            color: #333;
        }

        .number {
            font-size: 56pt;
            color: #f06292; /* Pink color for numbers */
            margin-top: 10px;
        }

        /* Styling for different statuses */
        .new-order {
            background-color: #f8bbd0; /* Light pink for new orders */
        }

        .canceled-order {
            background-color: #f48fb1; /* Pink-red for canceled orders */
        }

        .accepted-order {
            background-color: #f06292; /* Bright pink for accepted orders */
        }

        /* Hover effect */
        .status-box:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        /* Text color change */
        .status-box h4 strong {
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="status-box new-order">
                <h4><strong>PESANAN BARU</strong> 🎉</h4>
                <h4 class="number"><?= $jml1; ?></h4>
            </div>
        </div>

        <div class="col-md-4">
            <div class="status-box canceled-order">
                <h4><strong>PESANAN DIBATALKAN</strong> 🛑</h4>
                <h4 class="number"><?= $jml2; ?></h4>
            </div>
        </div>

        <div class="col-md-4">
            <div class="status-box accepted-order">
                <h4><strong>PESANAN DITERIMA</strong> ✅</h4>
                <h4 class="number"><?= $jml3; ?></h4>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<?php 
include 'footer.php';
?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
