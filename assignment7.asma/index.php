<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REVIEW</title>
    <link rel="stylesheet" href="style.css">
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


        <h1>REVIEWS</h1>

    </header>

    <section>
    <h2>Add your review</h2>
        <form action="save_rating.php" method="post">
        <label for="rating">rating (1-5):</label>         
           <input type="number" id="rating" name="rating" min="1" max="5" required>

        <label for="comment">Comment:</label>        
            <textarea id="comment" name="comment" required></textarea>


        <button type="submit">Add Rating</button>        </form>
    </section>

    <section>
<h2>User Reviews</h2>        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Evaluation</th>
                    <th>Comments</th>
                </tr>
            </thead>
            <tbody>
                <?php include "get_ratings.php"; ?>
            </tbody>
        </table>
    </section>

    <section>
    <h2>average ratings</h2>        <p>
            <?php include "calculate_average.php"; ?>
        </p>
    </section>

</body>

</html>
