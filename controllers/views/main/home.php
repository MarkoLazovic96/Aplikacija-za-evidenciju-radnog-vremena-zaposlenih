<nav>
    <ul>
        <?php foreach ($Zaposleni as $Zaposlen ): ?>
            <li>
                <a href="?Zaposlen=<?php echo $Zaposlen->zaposleni_id?>">
                    <?php echo htmlspecialchars($Zaposlen->name)?>
                 </a>
        <?php endforeach;?>   



    </ul>
</nav>