<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Expense Tracker - Transfer Money</title>
</head>
<body>
    <header>
    <header>
<nav class="navigation">
    <a href="# services ">services</a>
    <a href="# home ">home</a>
<a href="#about us">about </a>
<a href="#contact">contact</a>
<a href="file:///C:/xampp/htdocs/assignment%203/add%20catugry.html">add catugry</a>

</nav>

</header>
        <h1>Expense Tracker - Transfer Money</h1>
        <br><br/>
        <p>Transfer Money Between Categories</p>
        
        <form method="post" action="add_expense.php">
            <label for="from_class">From Category:</label>
            <input  id="from_class" name="from_class">
                <br>

            <label for="to_class">To Category:</label>
            <input id="to_class" name="to_class">
               <br>

            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" required><br>

            <label for="reason">Reason/Comments:</label>
            <textarea id="reason" name="reason"></textarea><br>

            <button type="submit">Transfer Money</button>
        </form>
    </header>
</body>
</html>
