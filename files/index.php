<?php include 'header.php';

$birthDate = new DateTime('1997-11-26');
$currentDate = new DateTime(date('Y-m-d'));
$year = $currentDate->diff($birthDate);

$games = [
    ['link' => 'https://www.satisfactorygame.com/', 'name' => 'Satisfactory'],
    ['link' => 'https://store.steampowered.com/app/1245620/ELDEN_RING/', 'name' => 'Elden Ring'],
    ['link' => 'https://store.steampowered.com/app/294100/RimWorld/', 'name' => 'Rimworld'],
    ['link' => 'https://www.finalfantasyxiv.com/', 'name' => 'Final Fantasy XIV', 'last' => true]
];
?>
<div class="parallax" id='home'></div>
<div class='parallax-header '>
    <div class='parallax-content'>
        <img class='main-image' src='../public/img/leonweiss.jpg'>
        <h1 class="header blue-text">Leon Weiss</h1>
        <div class='btn-row-header'>
            <a href='https://github.com/BermuXP'><i class="fa-brands fa-xl fa-github"></i></a>
            <a href="mailto:leonweiss@live.nl"><i class="fa-solid fa-xl fa-envelope"></i></a>
        </div>
    </div>
</div>
<div class='col-md-12'>
    <div class='container tab-fixer'>
        <div class='content-section row center'>
            <h2 class='h2-head'>About me</h2>
            <p>
                Hi there!, my name is Leon Weiss, as the website/title suggests, I'll keep it short in this description about myself, so if you want to know more, I suggest to take a look at the work I've done down below!
                Lets get to it, I'm currenly a Software Developer at <a class='games-link hover-underline-animation' target='_blank' href='https://emerald-it.nl'>Emerald-it</a> where I've been working for about ~5 years,
                in this work place I've learned alot about Web/App development since that's the expertise of the company.</p>
            <p>
                I'm <?php echo $year->y; ?> years old, I love playing games, as of right now I'm playing
                <?php
                $firstGame = true;
                foreach ($games as $game) {
                ?>
                    <a class='games-link hover-underline-animation' target='_blank' href='<?php echo $game['link']; ?>'><?php echo $game['name']; ?></a>
                <?php
                    if (!isset($game['last'])) {
                        echo ",";
                        $firstGame = false;
                    } else {
                        echo '.';
                    }
                } ?>
            </p>
        </div>
    </div>
</div>
<div class='col-md-12 bg-opposite' id='projects'>
    <div class='container tab-fixer'>
        <div class='content-section row center'>
            <h2 class='h2-head-clear'>
                Projects I've Worked on at Emerald-it:
            </h2>
            <div class='col-md-4 col-sm-12 card-before'>
                <div class="card text-center">
                    <img class="card-img-top card-img-resize" src="https://complete-reference.com/img/logo2.png" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Complete reference DND5e</h5>
                        <p class="card-text">While you are venturing into dungeons and encountering dragons and other monsters, this is your ideal app to have with you. All monsters, spells, items, skills and feats in 1 handy application.
                            For game masters and players alike, this is the ideal app to quickly search through all content.</p>
                        <div class='btn-row'>
                            <a href="https://play.google.com/store/apps/details?id=com.vansteinengroentjes.apps.ddfive" target="_blank" class="btn btn-android"><i class="fa-brands fa-android"></i> Android</a>
                            <a href="https://complete-reference.com/" target="_blank" class="btn btn-website"><i class="fa-solid fa-globe"></i> Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12 card-before'>
                <div class="card text-center">
                    <img class="card-img-top card-img-resize" src="https://complete-reference.com/img/logo4.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Complete reference PF2</h5>
                        <p class="card-text">With the Complete Reference app for the Roleplaying Game Pathfinder Second edition, you have all content at hand in a searchable and handy format.
                            All monsters, spells and other content can be bookmarked for easy reference.
                            Monsters can be viewed in full screen such that you can show your party what they are battling without giving away the statistics.</p>
                        <div class='btn-row'>
                            <a href="https://play.google.com/store/apps/details?id=com.vansteinengroentjes.pathfindertwo" target="_blank" class="btn btn-android"><i class="fa-brands fa-android"></i> Android</a>
                            <a href="https://complete-reference.com/" target="_blank" class="btn btn-website"><i class="fa-solid fa-globe"></i> Website</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12 card-before'>
                <div class="card text-center">
                    <img class="card-img-top card-img-resize" src="https://scontent-ams4-1.xx.fbcdn.net/v/t39.30808-6/273296813_1571559509882810_5013215685697569831_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=IA4vb_6tAeYAX9vA_hh&_nc_ht=scontent-ams4-1.xx&oh=00_AT9jd4Ng7-5NDyxsGMLYTdY2rw9X-9lbk9pl3-gn1JtSiw&oe=62303783" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Leitz app</h5>
                        <p class="card-text">With the Leitz sharpening service app it is possible to get your dull tools, such as saws, mills and drills sharp again as quickly as possible.</p>
                        <div class='btn-row'>
                            <a href="https://play.google.com/store/apps/details?id=nl.leitz.klantenapp" target="_blank" class="btn btn-android"><i class="fa-brands fa-android"></i> Android</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-md-4 col-sm-12 card-before'>
                <div class="card text-center">
                    <img class="card-img-top card-img-resize" src="https://www.whispp.com/public/img/whispp_logo_nt.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Whispp</h5>
                        <p class="card-text">If you stutter you probably recognize it: when you whisper then you can speak relaxed and (almost) fluently. That is why we develop Whispp: the app that converts whispers into your own and natural voice without delay.
                        </p>
                        <div class='btn-row'>
                            <a href="https://www.whispp.com/" target="_blank" class="btn btn-website"><i class="fa-solid fa-globe"></i> Website</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='col-md-12' id='projects'>
    <div class='container tab-fixer'>
        <div class='content-section row center'>
            <h2 class='h2-head'>
                Personal projects
            </h2>
            <div class='col-md-4 col-sm-12 card-before'>
                <div class="card text-center">
                    <img class="card-img-top card-img-resize" src="https://www.whispp.com/public/img/whispp_logo_nt.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Leonweiss.nl</h5>
                        <p class="card-text">This website on github!
                        </p>
                        <div class='btn-row'>
                            <a href="https://leonweiss.nl/" target="_blank" class="btn btn-website"><i class="fa-solid fa-globe"></i> Website</a>
                            <a href="/" target="_blank" class="btn btn-github"><i class="fa-brands fa-github"></i> Github</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>