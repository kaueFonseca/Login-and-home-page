<div class= "container">
     <div class="sidebar">
         <div class="head">
             <div class="user-img">
                <img src="style/img/usuario1.jpeg" alt="">
             </div>
             <div class="user-details">
                <p class="title">web developer</p>
                <p class="name"><?php echo $res_Uname; ?></p>
             </div>
         </div>
         <div class="nav1">
            <div class="menu">
                <p class="title">Hub</p>
                <ul>
                    <li >
                        <a href="#">
                          <i class="icon ph-bold ph-house-simple"></i>
                          <span class="text">Dashboard</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="financeiro.php">
                            <i class="icon ph-bold ph-file-text"></i>
                            <span class="text">Financeiro</span>
                        </a>
                    </li>
                    <li >
                        <a href="#">
                            <i class="icon ph-bold ph-calendar-blank"></i>
                            <span class="text">Angendamento</span>
                        </a>
                    </li>
                    <li >
                        <a href="#">
                            <i class="icon ph-bold ph-chart-bar"></i>
                            <span class="text">Income</span>
                            <i class="arrow ph-bold ph-caret-down"></i>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">
                                 <span class="text">Recebibento</span>
                              </a>
                            </li>
                            <li>
                                <a href="#">
                                 <span class="text">Fundos</span>
                              </a>
                            </li>
                            <li>
                                <a href="#">
                                 <span class="text">Pagamentos</span>
                              </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
             <div class="menu">
                <p class="title">Ajuda</p>
                <ul>
                    <li >
                        <a href="#">
                            <i class="icon ph-bold ph-gear"></i>
                            <span class="text">Configurações</span>
                        </a>
                    </li>       
                </ul>
            </div>
            <div class="menu">
                <p class="title">Conta</p>
                <ul>
                    <li >
                        <a href="#">
                            <i class="icon ph-bold ph-info"></i>
                            <span class="text">Help</span>
                        </a>
                    </li>
                    
                       
                </ul>
            </div>  
         </div>
     </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js"
        integrity="sha512-8Z5++K1rB3U+USaLKG6008uwWBhdYsM3hmdirnOEWp8h2B1a0ikj5zBz1Xs8Q0rvY90xEnD2QDkbSKKpfqcIlw=="
        crossorigin="anonymous">
    </script>