<?php include 'header.php'; ?>

<section class="form-container">
    <h1>Студент жүйеге кіру</h1>

    <form action="process.php" method="POST">
        <label>Аты-жөні:</label>
        <input type="text" name="name" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Құпия сөз:</label>
        <input type="password" name="password" required>

        <button type="submit">Кіру</button>
    </form>
</section>

<?php include 'footer.php'; ?>
