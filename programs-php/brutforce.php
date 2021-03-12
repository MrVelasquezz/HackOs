<div id="brut_win" class="win-sm" style="display: none;">
    <div class="bwb d-flex justify-content-center align-items-center">
        <div class="brut_win d-flex flex-column rounded border border-dark">
            <div class="top_bar container-fluid">
                <div class="name_bar d-flex justify-content-center align-items-center">
                    xHydra
                </div>
                <div class="op_bar d-flex px-3">
                    <div class="cls pl-2">
                        <img src="images/times-solid.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="btn_section d-flex flex-column p-2">
                <div class="btn_sect container d-flex">
                    <button class="btn border border-info mr-3">Start Hydra</button>
                    <div class="d-flex justify-content-center align-items-center">
                        <label class="pt-2" for="charset">Select charset:</label>
                        <select class="border rounded" name="charset" id="charset">
                            <option value="1">WEP</option>
                            <option value="2">WPA</option>
                            <option value="3">WPA2-PSK</option>
                        </select>
                    </div>

                </div>
                <div class="btn_sect d-flex justify-content-around flex-column pt-2">
                    <div class="container-fluid">
                        First password set:
                    </div>
                    <div class="container d-flex justify-content-between">
                        <div>
                            <button class="btn border border-info">True</button>
                            <button class="btn border border-danger">False</button>
                        </div>
                        <div class="d-flex align-items-center">
                            /try Примеяет первый сет паролей
                        </div>
                    </div>

                </div>
                <div class="btn_sect d-flex justify-content-around flex-column pt-1">
                    <div class="container-fluid">
                        Second password set:
                    </div>
                    <div class="container d-flex justify-content-between">
                        <div>
                            <button class="btn border border-info">True</button>
                            <button class="btn border border-danger">False</button>
                        </div>
                        <div class="d-flex align-items-center">
                            /try Примеяет второй сет паролей
                        </div>
                    </div>
                </div>
                <div class="btn_sect d-flex justify-content-around flex-column pt-1">
                    <div class="container-fluid">
                        Third password set:
                    </div>
                    <div class="container d-flex justify-content-between">
                        <div>
                            <button class="btn border border-info">True</button>
                            <button class="btn border border-danger">False</button>
                        </div>
                        <div class="d-flex align-items-center">
                            /try Примеяет третий сет паролей
                        </div>
                    </div>
                </div>
                <div class="btn_sect d-flex justify-content-around flex-column pt-1">
                    <div class="container-fluid">
                        Progress:
                    </div>
                    <div class="container">
                        <div class="progress prog_bar border border-dark rounded">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 70%;">70%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overflow-hidden">
                <div class="info_terminal overflow-auto">
                    <div class="bash_win p-1">
                        <div class="tmsg">
                            <code>First</code>
                        </div>
                </div>
            </div>

        </div>
    </div>

</div>