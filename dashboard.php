<?php session_start(); if(!isset($_SESSION['user_id'])){ header('Location: index.php'); exit; } $username = $_SESSION['username']; ?>
<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="static/css/styles.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
  <header>
    <h1>Welcome,
      <?=htmlspecialchars($username)?>
    </h1><a href="api/logout.php">Logout</a>
  </header>
  <main class="container">
    <section class="add-expense">
      <h3>Add / Edit Expense</h3>
      <form id="expense-form"><input type="hidden" id="eid">
        <label>Date</label><input type="date" id="date" required>
        <label>Category</label><input id="category" required placeholder="Food, Transport...">
        <label>Amount</label><input type="number" step="0.01" id="amount" required>
        <label>Note</label><input id="note"><button type="submit">Save</button>
      </form>
    </section>
    <section class="table-section">
      <h3>Expenses Table</h3>
      <table id="expenses-table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Category</th>
            <th>Amount</th>
            <th>Note</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody></tbody>
      </table>
    </section>
    <section class="charts">
      <h3>Charts</h3><canvas id="pieChart" width="400" height="200"></canvas><canvas id="barChart" width="400"
        height="200"></canvas>
    </section>
  </main>
  <script src="static/js/script.js"></script>
</body>

</html>