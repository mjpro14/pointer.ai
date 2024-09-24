<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Referral</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="app.js" defer></script>
  <style>
    .table-container {
    width: 100%; 
    overflow-x: auto;
}

table {
 margin-top: 10px;
    width: 100%;
    table-layout: auto;
    border-collapse: collapse;
}

th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd; /* Optional border */
}

  </style>
</head>
<body>
<?php include('nav.php');?>
  <main>
    <div class="container">
      <h2>My Referrals</h2>
      <div class="table-container">
    <table>
        <thead>
            <tr>
                <th>User Name</th>
                <th>Account</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                <td>Data 3</td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

    </div>
  </main>
</body>
</html>