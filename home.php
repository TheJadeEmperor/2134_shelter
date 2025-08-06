<?php

$today = date('m-d-Y'); 

if($today <= "07-18-2025") {
     

}
else {

    $nextEvent =  array(
        'nextDate' => 'Sept 3rd',
        'nextEventName' => 'Court Battle with Westhab',
        'nextEventAlert' => '📣 Court case has been adjourned until 09/03',
    ); 

}

?>

<section class="hero-section d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-12 mx-auto">
                📣📣 <em class="small-text">Save this date!</em>📣📣 
                
                <h1><?=$nextEvent['nextDate']?></h1>

                <p class="text-white mb-4 pb-lg-2 center">
                    <em><?=$nextEvent['nextEventName']?></em>
                
                    <br /><br />
                    <?=$nextEvent['nextEventAlert']?>
                </p>

            </div>
        </div>
    </div>

    <div class="hero-slides"></div>
</section>

<section class="about-section section-padding" id="about_us">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-12">
                <div class="ratio ratio-1x1" id="outrage_video">
                    <video autoplay loop muted class="custom-video" playsinline webkit-playsinline>
                        <source src="images/events/no_shelter.mp4" type="video/mp4">
                        <img src="images/events/no_shelter.gif" alt="Your browser does not support video.">

                        Your browser does not support the video tag.
                    </video> 
                    <div class="about-video-info d-flex flex-column">
                        <h4 class="mt-auto">This is an outrage</h4>
                        <h4>of the highest order</h4>
                    </div>

                </div>
            </div>

            <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                <em class="text-white">Like Admiral Ackbar said in Stars Wars: It's a trap!</em>

                <h2 class="text-white mb-3">Safety First</h2>

                <p class="text-white">The lot that contains 2114-2154 Coyle street was approved to be affordable housing by the City Council and Community Board 15. But after the approval, Coyle Street LLC sold the lot to Westhab, who decided to build a large-scale homeless shelter.</p>

                <p class="text-white">While we do not oppose homelessness, having a homeless shelter nearby schools and daycare centers raises concerns about community safety regarding children and the elderly. </p>

                <a href="#westhab" class="smoothscroll btn custom-btn custom-border-btn mt-3 mb-4">Who's at fault</a>
            </div>

        </div>
    </div>
</section>

<section class="who-section section-padding section-bg" id="westhab">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                
                <h2 class="text-white">Who's Responsible for This?</h2>
                <p><em class="text-white">A "non-profit" called Westhab Inc that claims to help the homeless </em></p>

                <p><em class="text-white">These greedy communists have decided to invade our own neighborhood</em></p>
            </div>

            
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <a target="_blank" href="https://westhab.org/jim-coughlin/">
                <div class="team-block-wrap">
                    <div class="team-block-info d-flex flex-column">
                        
                        <div class="d-flex mt-auto mb-3">
                            <h4 class="text-white mb-0">Jim Coughlin</h4>

                            <p class="badge ms-4"><em>COO</em></p>
                        </div>

                        <p class="text-white mb-0">Appeared at the Kingsborough meeting, makes 350k a year</p>
                        
                    </div>

                    <div class="team-block-image-wrap">
                        <img src="images/team/jim_coughlin.jpg" class="team-block-image img-fluid" alt="2134 Coyle Street">
                    </div>
                </div>
            </a>
            </div>
                
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <a target="_blank" href="https://westhab.org/richard-nightingale/">
                <div class="team-block-wrap">
                    <div class="team-block-info d-flex flex-column">
                        <div class="d-flex mt-auto mb-3">
                            <h4 class="text-white mb-0">Rich Nightingale</h4>

                            <p class="badge ms-4"><em>CEO</em></p>
                        </div>

                        <p class="text-white mb-0">Like his name, he is getting rich off homeless people with a salary of over 500k a year.</p>
                    </div>

                    <div class="team-block-image-wrap">
                        <img src="images/team/rich_nightingale.jpg" class="team-block-image img-fluid" alt="2134 Coyle Street">
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <a target="_blank" href="images/team/foul_four.jpg">
                <div class="team-block-wrap">
                    <div class="team-block-info d-flex flex-column">
                        <div class="d-flex mt-auto mb-3">
                            <h4 class="text-white mb-0">The Foul Four</h4> 
                        </div> 
                    </div>

                    <div class="team-block-image-wrap">
                        <img src="images/team/foul_four.jpg" class="team-block-image img-fluid" alt="2134 Coyle Street">
                    </div>
                </div>
                </a>
            </div>

            <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
                
                <h2 class="text-white">How to Contact Westhab?</h2>
                <p><em class="text-white">Address: Westhab Inc.
                    8 Bashford St.
                    Yonkers, New York 10701</em></p>

                <p><em class="text-white">Hotline: (914) 345-2800</em></p>
                <p><em class="text-white">Policy Line: 347-716-5175</em></p>

                <p>Why do we not trust Westhab? They have a history of building  <a target="_blank" href="https://www.theyonkersledger.com/opinion/yonkers-westhab-growing-problems/3164/">shelters</a> that resulted in multiple problems for that neighborhood. <a target="_blank" href="https://www.theyonkersledger.com/opinion/yonkers-westhab-growing-problems/3164/">Read the article here</a>. </p>
            </div>
        </div>
    </div>
</section>
 

<section class="about-section section-padding section-bg" id="events">
    <div class="container">
        <div class="col-lg-12 col-12 text-center mb-4 pb-lg-2">
            <h1 class="text-white mb-0">Events</h1>

                <p>&nbsp;</p>

                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <p><h3 class="text-white mb-0">Rally on 05/04 on Ave U </h3> </p>

                        <p class="text-white mb-0">In this flyer, we have 2 major events</p>
                        <p class="text-white mb-0">05/04 Rally on Ave U</p>
                        <p class="text-white mb-0">05/07 Protest on 360 Adams Street</p>
                        <p>Please download the flyer and share on social media!</p>
                    </div>
                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                        <a href="images\events\rally_0504_0507.png"><img class="flyer" src="images\events\rally_0504_0507.png" width="50%" /></a>
                    </div>
                </div>

                <p>&nbsp;</p><p>&nbsp;</p>
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                        <?php
                            $atts = array(
                                'project_folder' => 'images/events/04_06_dimple',
                                'project_name' => 'Dimple visits the Shelter'
                            );

                            echo gallery_function($atts);
                        ?>
                    </div>
                    <div class="col-lg-6 col-12">
                        <p><h3 class="text-white mb-0">04/06/2025 - Dimple visits the Shelter</h3></p>

                        <p>Though Dimple does not live near the shelter, she comes out frequently to check up on the people and offer encouragement </p>

                        <p>One can make the argument she is doing this because she's running for office, but how many candidates visit as frequently as she does? </p>
                    </div>
                </div>

                <p>&nbsp;</p><p>&nbsp;</p>
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                        <p><h3 class="text-white mb-0">04/02/2025 - Court Case of Westhab vs Homeowners</h3></p>

                        <p>Homeowners on Ford St. signed an agreement to let developers enter their backyard, but the agreement was for affordable housing, not a homeless shelter!</p>
                        <p>After doing the bait and switch, Westhab tried to sue the homeowners for access to their backyard, a double slap in the face. </p>
                    </div>
                    <div class="col-lg-6 col-12">
                        <?php
                        $atts = array(
                            'project_folder' => 'images/events/04_02_court',
                            'project_name' => 'Court Case of Westhab vs Homeowners'
                        );

                        echo gallery_function($atts);
                        ?>
                    </div>
                </div>

                <p>&nbsp;</p><p>&nbsp;</p>
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                    <?php
                        $atts = array(
                            'project_folder' => 'images/events/04_01_mercedes',
                            'project_name' => 'Protest Against Mercedes\'s Office'
                        );

                        echo gallery_function($atts);
                    ?>
                    </div>
                    <div class="col-lg-6 col-12">
                    
                    <p><h3 class="text-white mb-0">04/01/2025 - Protest Against Mercedes's Office</h3></p>

                    <p>Residents of District 46 who were unhappy with Mercedes's inaction regarding the shelter organized a protest in front of her office. Mercedes retaliated by taking Dimple to court, trying to knock her off the ballot. </p>
                    </div>
                </div>

                <p>&nbsp;</p><p>&nbsp;</p>
                <div class="row align-items-center">
                    <div class="col-lg-5 col-12 mt-4 mt-lg-0 mx-auto">
                    <p><h3 class="text-white mb-0">03/25/2025 - Kingsborough Community Meeting</h3></p>

                    <p>Westhab presented its plans for the "Coyle Street Family Center" to a packed room of Sheepshead Bay residents. The meeting became heated as residents voiced strong opposition, feeling they were misled about the project's nature.</p>

                    <p>Many residents had to stand outside due to space constraints. Curtis Sliwa spoke to the crowd outside and they cheered for him.</p>
                    </div>
                    <div class="col-lg-6 col-12">
                    <?php
            $atts = array(
                'project_folder' => 'images/events/03_25_kings/',
                'project_name' => '03/25/2025 - Kingsborough Community Meeting'
            );
            
            echo gallery_function($atts);
            ?>
                    </div>
                </div> 

        </div>
    </div>
</section>