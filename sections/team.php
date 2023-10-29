<?php
$team_members = [
    (object) ['name' => 'Akhil', 'image_name' => 'akhil.jpg'],
    (object) ['name' => 'Chintan', 'image_name' => 'chintan.jpg'],
    (object) ['name' => 'Hardip', 'image_name' => 'doe.jpg'],
    (object) ['name' => 'Krinish', 'image_name' => 'doe.jpg'],
    (object) ['name' => 'Kushal', 'image_name' => 'doe.jpg'],
    (object) ['name' => 'Parag', 'image_name' => 'doe.jpg'],
    (object) ['name' => 'Sarthak', 'image_name' => 'doe.jpg'],
    (object) ['name' => 'Yuvraj', 'image_name' => 'doe.jpg'],
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
                    <?php foreach($team_members as $team_member) {?>
                            <?php include 'templates/components/single_team_member.php' ?>
                    <?php } ?>
                        </div>
                </div>
            </div>
        </div>
        <?php include "templates/footer.php" ?>
    </div>
</div>