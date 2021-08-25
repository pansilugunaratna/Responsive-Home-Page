<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width-device-width, initial-scale=1, maximum-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="Header.css">
    <link rel="stylesheet" href="Sidebar.css">
    <link rel="stylesheet" href="Footer.css">
</head>
<body>
<!--  Sidebar-->
<?php include 'sidebar.php' ?>

<!-- Main Content -->
<div class="main-content">
    <!--  Header-->
    <?php include 'header.php' ?>
    <main>
        <div class="about">
<!--            <img class="logo-img" src="ALec.png" alt="ALec logo">-->
            <h4> ALec - Interactive Teaching and Learning Module </h4>
        </div>

        <div class="cards">
            <div class="single-card">
                <div><span>Ask Question</span></div>
            </div>
            <div class="single-card">
                <div><span>My Courses</span></div>
            </div>
            <div class="single-card">
                <div><span>Review</span></div>
            </div>
            <div class="single-card">
                <div><span>Leaderboard</span></div>
            </div>
            <div class="single-card">
                <div><span>Reports</span></div>
            </div>
            <div class="single-card">
                <div><span>Forum</span></div>
            </div>
        </div>
        <div class="leaderboard-update">
            <div class="leaderboard-update-header">
                <h2>Leaderboard for today!</h2>
            </div>
            <div class="leaderboard-update-body">
                <table>
                    <thead>
                        <th>Student Name</th>
                        <th id="rank">Rank</th>
                        <th id="points">Total Points</th>
                    </thead>
                    <?php
                        for($i=1; $i<11; $i++){
                            echo "<tr>";
                            echo "<td>Student Name ".$i."</td>";
                            echo '<td id="rank">'.$i."</td>";
                            echo '<td id="points">984</td>';
                            echo "<tr>";
                        }
                    ?>
                </table>
            </div>
        </div>
    </main>
    <!--  Footer-->
    <?php include 'footer.php' ?>
</div>
</body>
</html>