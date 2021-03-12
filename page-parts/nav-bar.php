<nav class="l-nav mx-0 p-0 d-flex flex-column justify-content-between">
    <div class="nav-icons d-flex flex-column">
        <?php
                    if($_SESSION['user']['admin'] == 1){
                        echo '<img src="images/pc.png" alt="PC" class="btn p-0 mb-1" id="pc">';
                    }
                ?>
        <?php
                    if($_SESSION['user']['admin'] == 1){
                        echo '<img src="images/key.png" alt="BrutForce" class="btn p-0 mb-1" id="brut">';
                    }
                ?>
        <?php
                    if($_SESSION['user']['admin'] == 1 || $_SESSION['user']['admin'] == 2){
                        echo '<img src="images/terminal.png" alt="Terminal" class="btn p-0 mb-1" id="term">';
                    }
                ?>
        <?php
                    if($_SESSION['user']['admin'] == 1){
                        echo '<img src="images/settings.png" alt="Settings" class="btn p-0 mb-1" id="settings">';
                    }
                ?>
        <?php
                    if($_SESSION['user']['admin'] == 1){
                        echo '<img src="images/black.png" alt="Blackout" class="btn p-1 mb-1" id="blackout">';
                    }
                ?>
    </div>
    <div class="win-button nav-icons d-flex flex-column">
        <img src="images/POWER.png" alt="" class="btn p-0" id="startPC">
    </div>
</nav>