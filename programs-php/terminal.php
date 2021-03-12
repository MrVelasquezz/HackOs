<div id="term_win" class="win" style="display: none;">
    <div class="top_bar container-fluid">
        <div class="name_bar d-flex justify-content-center align-items-center">
            bash@Terminal
        </div>
        <div class="op_bar d-flex px-3">
            <div class="cls pl-2">
                <img src="images/times-solid.svg" alt="">
            </div>
        </div>
    </div>
    <div class="bash_win">
        <div class="bash_content px-2 py-1 d-flex flex-column-reverse align-content-end overflow-hidden">
            <div class="tmsgbox d-flex align-items-start flex-column-reverse">
                <div class="tmsg"></div>
            </div>

            <div class="input_style d-flex">
                <code class="pr-1 pb-0 d-flex align-items-end"
                    style="color: #4cd137;"><?php echo $_SESSION['user']['os'].'@'.$_SESSION['user']['nick'];?>:</code>
                <?php
                    if($_SESSION['user']['admin'] == 1 ){
                        echo '<code><input type="text" name="" id="term_i" autofocus></code>';
                    }
                ?>
            </div>
        </div>
    </div>
</div>