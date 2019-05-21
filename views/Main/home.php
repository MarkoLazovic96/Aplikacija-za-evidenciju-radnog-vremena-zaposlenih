<nav>
    <ul>
        <?php foreach ($zaposleniList as $zaposleni):?>
        <li>
            <a href="?zaposleni = <?php echo $zaposleni->zaposleni_id;?>">
                <?php echo htmlspecialchars($zaposleni->ime);?>
            </a>
                <?php endforeach;?>
    </ul>
</nav>