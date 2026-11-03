<?php include 'header.php'; ?>

<section class="form-container">
    <h1>Көңіл-күйіңді таңда</h1>

    <form action="support.php" method="GET">
        <label>Қазіргі көңіл-күйің:</label>

        <select name="mood">
            <option value="happy">😊 Жақсы</option>
            <option value="normal">😐 Қалыпты</option>
            <option value="sad">😔 Көңілсіз</option>
            <option value="tired">😴 Шаршадым</option>
        </select>

        <button type="submit">Жіберу</button>
    </form>

    <?php
    if (isset($_GET["mood"])) {
        $mood = $_GET["mood"];

        $moods = [
            "happy" => "Керемет! Осы көңіл-күйіңді сақта 💜",
            "normal" => "Өзіңе күтім жасауды ұмытпа.",
            "sad" => "Сенің сезімдерің маңызды. Өзіңе уақыт бөл.",
            "tired" => "Аздап демалып ал."
        ];

        if (array_key_exists($mood, $moods)) {
            echo "<p>" . htmlspecialchars($moods[$mood]) . "</p>";
        } else {
            echo "<p>Көңіл-күй мәні дұрыс емес.</p>";
        }
    }
    ?>
</section>

<?php include 'footer.php'; ?>
