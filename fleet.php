<?php
    require_once"includes/db.php";
    require_once"includes/header.php";
    $page = "fleet";
    include "includes/navigation.php";
?>

    <section class="breadcrumb_area" style="margin-top: 70px;" style="position:relative;">
        <div class="bg_overlay"></div>
        <div class="container">
            <div class="breadcrumb_content text-center">
                <h1>Fleet</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="">Home</a></li>
                        <li class="breadcrumb-item active">Fleet</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <div style="padding-top: 40px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="fleet">
                        <div class="fleet-box">
                            <div class="fleet-h1">Sudan Car</div>

                            <div class="fleet-content">
                                <p>This type of Vechicle can accomodate a maximum of</p>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-user"></i></div>
                                    <div class="fleet-icontxt">5 <span>Adults</span></div>
                                </div>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-suitcase-rolling"></i></div>
                                    <div class="fleet-icontxt">2 <span>Suitcases</span></div>
                                </div>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-suitcase"></i></div>
                                    <div class="fleet-icontxt">2 <span>Small Cases</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="fleet-txt">
                            <img src="./img/object/suv.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="fleet">
                        <div class="fleet-box">
                            <div class="fleet-h1">SUV Car</div>

                            <div class="fleet-content">
                                <p>This type of Vechicle can accomodate a maximum of</p>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-user"></i></div>
                                    <div class="fleet-icontxt">5 <span>Adults</span></div>
                                </div>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-suitcase-rolling"></i></div>
                                    <div class="fleet-icontxt">2 <span>Suitcases</span></div>
                                </div>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-suitcase"></i></div>
                                    <div class="fleet-icontxt">2 <span>Small Cases</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="fleet-txt">
                            <img src="./img/object/suv.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="fleet">
                        <div class="fleet-box">
                            <div class="fleet-h1">Limousine</div>

                            <div class="fleet-content">
                                <p>This type of Vechicle can accomodate a maximum of</p>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-user"></i></div>
                                    <div class="fleet-icontxt">5 <span>Adults</span></div>
                                </div>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-suitcase-rolling"></i></div>
                                    <div class="fleet-icontxt">2 <span>Suitcases</span></div>
                                </div>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-suitcase"></i></div>
                                    <div class="fleet-icontxt">2 <span>Small Cases</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="fleet-txt">
                            <img src="./img/object/suv.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="fleet">
                        <div class="fleet-box">
                            <div class="fleet-h1">Mini Bus</div>

                            <div class="fleet-content">
                                <p>This type of Vechicle can accomodate a maximum of</p>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-user"></i></div>
                                    <div class="fleet-icontxt">5 <span>Adults</span></div>
                                </div>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-suitcase-rolling"></i></div>
                                    <div class="fleet-icontxt">2 <span>Suitcases</span></div>
                                </div>
                                <div class="fleet-icon">
                                    <div class="fleet-iconimg"><i class="fas fa-suitcase"></i></div>
                                    <div class="fleet-icontxt">2 <span>Small Cases</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="fleet-txt">
                            <img src="./img/object/suv.png" alt="" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once "includes/footer.php";  ?>
        
    <script src="assets/jquery/jquery-3.5.1.min.js"></script>

	<script src="assets/bootstrap/bootstrap.min.js"></script>

	<script src="assets/wow.min.js"></script>

	<script src="assets/slick/slick.min.js"></script>

	<script src="assets/fontawesome/fontawesome.min.js"></script>
	
	<script src="./js/script.js"></script>
	
	<script>
        var loader = document.getElementById('preloader');
        function myfunction(){
            loader.style.display = 'none';	
        }
    </script>

</body>

</html>