<?php session_start() ?>

    
    <?php include "include/header.php" ?>
    <?php $_SESSION['table_name'] = "dbvast_vannamei"; ?>

    <div class="logos">
        <div class="logo1">
            <img src="image/cibalogo.jpg" alt="Logo 2">
        </div>
        <div class="logo2">
            <img src="image/title.jpg" alt="Logo 3">
        </div>
    </div>

    <form id="form1" name="form1" method="post" autocomplete="off">
        <div class="main-container">
            <h2>Select your species: </h2>
            <div class="radio-buttons">
                <label class="custom-radio">
                <input type="radio" name="table" value="dbvast_vannamei" checked>
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon">
                            <!--<i class="fa-light fa-shrimp fa-sm"></i>-->
                            <h3>Penaeus vannamei</h3>
                        </div>
                    </span>
                </label>
                <label class="custom-radio">
                <input type="radio" name="table" value="dbvast_indicus">
                    <span class="radio-btn"><i class="las la-check"></i>
                        <div class="hobbies-icon">
                            <!--<i class="las la-futbol"></i>-->
                            <h3>Penaeus indicus</h3>
                        </div>
                    </span>
                </label>
            </div>
        </div>

        <div class="wrapper">
            <h3>Enter the Protein ID or Name</h3>
            <div class="container">
                <div class="search_wrap">
                    <div id='error-message'></div>
                    <div class="search_box">
                        <input type="text" class="input" name="search" id="search" placeholder="Search...">

                        <input type="submit" name="submit" value="search" id="submit">
                        <div class="list-wrapper">
                            <div class="list_group" id="show-list"></div>
                        </div>

                    </div>


                </div>

            </div>
        </div>

    </form>

    <!--<div class="horizontal-line">
        <hr class="line1">
        <span class="text">Or Search by</span>
        <hr class="line2">
    </div>-->

    <form name='form2' method="POST" action="gettext.php">
        <div class='textarea-container'>
            <h3>Enter the Nucleotide Sequence:</h3>

            <div class='textarea-box'>
                <div class="error-wrapper">
                    <div id='error-message2'></div>
                    <textarea id="textarea" name="textarea" rows="8" cols="100" placeholder="Type the sequence here..." style="resize: none;"></textarea>

                </div>
                <input type="submit" value="Submit" ">
            </div>
        </div>

    </form>

    <br>
    <br>
    <br>

    <footer>
        <div class="container">
            <div class="sec aboutus">
                <h2>About Us</h2>
                <p>dbVAST is a database of Single Nucleotide Polymorphisms (SNPs) in transcripts of two
                    shrimp species, Penaeus indicus and Penaeus vannamei. Users can search the database with a
                    query sequence and extract SNPs in it. The major components of dbVAST database are SNPs
                    in coding sequences and its significance. The dbVAST is intended to benefit researchers and
                    academicians by showcasing variations in the candidate coding sequences of shrimp.
                </p>

                <ul class="social">
                    <li><a href="https://www.facebook.com/icarciba"><i class="lab la-facebook"></i></i></a></li>
                    <li><a href="https://twitter.com/icarciba"><i class="lab la-twitter"></i></i></a></li>
                    <li><a href="https://www.youtube.com/c/icarciba/videos"><i class="lab la-youtube"></i></i></a></li>

                </ul>
            </div>
            <div class="sec quicklinks">
                <h2>Quicklinks</h2>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="sec contact">
                <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><i class="las la-map-marker-alt"></i></span>
                        <span>ICAR-Central Institute of Brackishwater
                            Aquaculture,<br>
                            75 Santhome High Road, MRC Nagar, RA Puram,<br>
                            Chennai - 600 028
                        </span>
                    </li>
                    <li>
                        <span><i class="las la-envelope"></i></span>
                        <span>Vinaya.Katneni@icar.gov.in</span>
                    </li>
                </ul>

            </div>

        </div>

    </footer>
    <div class="copyrightText">
        <p>
            Copyright © ICAR-Central Institute of Brackishwater Aquaculture All Rights Reserved.
        </p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>

</body>

</html>
