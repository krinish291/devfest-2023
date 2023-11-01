<?php

use Devfest\Models\Team;

$team_members = [
    new Team(
            'Akhil',
            [
                'linkedin' => 'https://www.linkedin.com/in/tusharakhil',
                'twitter' => 'https://twitter.com/Tusharakhil'
            ]
    ),
    new Team(
            'Chintan',
            [
                    'github' => 'https://github.com/jcredking',
                    'linkedin' => 'https://www.linkedin.com/in/chintanjoshi-',
                    'twitter' => 'https://x.com/chintanjoshi01'
            ]
    ),
    new Team(
        'Dron',
        [
            'linkedin' => 'https://www.linkedin.com/in/drontrivedi',
            'twitter' => 'https://twitter.com/trivedidron',
            'instagram' => 'https://www.instagram.com/trivedidron/'
        ]
    ),
    new Team(
        'Hardik',
        [
            'github' => 'https://github.com/mistryhardik',
            'linkedin' => 'https://www.linkedin.com/in/mistryhardik05/',
            'twitter' => 'https://twitter.com/mistryhardik05'
        ]
    ),
    new Team(
            'Hardip',
            [
                    'github' => 'https://github.com/knightkill',
                    'linkedin' => 'https://www.linkedin.com/in/patelhardip/',
                    'twitter' => 'https://twitter.com/HardipDPatel'
            ]
    ),
    new Team(
            'Krinish',
            [
                    'github' => 'https://github.com/krinish291',
                    'linkedin' => 'https://www.linkedin.com/in/krinish-radadiya-035425190',
                    'twitter' => 'https://twitter.com/R291Krinish'
            ]
    ),
    new Team(
            'Kushal',
            [
                    'github' => 'https://github.com/kushal2011',
                    'linkedin' => 'https://www.linkedin.com/in/kushaldave-android',
                    'twitter' => 'https://twitter.com/that_kushal_guy'
            ]
    ),
    new Team(
            'Parag',
            [
                    'linkedin' => 'https://www.linkedin.com/in/parag-nema',
            ]
    ),
    new Team(
        'Prachi',
        [
            'linkedin' => 'https://www.linkedin.com/in/prachi-d-158965b',
            'twitter' => 'https://twitter.com/PrachiSSD'
        ]
    ),
    new Team(
        'Rahul',
        [
            'github' => 'https://github.com/bankerrahul',
            'linkedin' => 'https://www.linkedin.com/in/bankerrahul/',
            'twitter' => 'https://twitter.com/bankerrahul'
        ]
    ),
    new Team(
            'Sarthak',
            [
                    'github' => 'https://github.com/Not-Sarthak',
                    'linkedin' => 'https://www.linkedin.com/in/sarthak-shah-49267b224',
                    'twitter' => 'https://x.com/0xSarthak13'
            ]
    ),
    new Team(
            'Yuvraj',
            [
                    'github' => 'https://github.com/YuvrajAh',
                    'linkedin' => 'https://www.linkedin.com/in/yuvraj-ahuja-144bb1228',
                    'twitter' => 'https://x.com/AhujaYuvraj1'
            ]
    ),
    // Add more team members here
];

if (empty($team_members)) {
    echo "No team members available";
    return;
}


?>
<div class="content__inner">
    <div class="section full-height over-y-scroll" id="boxscroll-5">
        <div class="section" id="boxscroll-in-5">
            <!-- Page start -->
            <div class="section padding-top-big">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="content__title">our team</h2>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <h3 class="content__subtitle">Meet the minds behind GDG Baroda.</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section padding-top padding-bottom-big">
                <div class="container">
                        <div class="row">
                    <?php foreach($team_members as $team_member) {
                        echo $team_member->generateHTML();
                    }?>
                        </div>
                </div>
            </div>
        </div>
        <?php include "templates/footer.php" ?>
    </div>
</div>