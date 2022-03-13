<?php include 'header.php';

$birthDate = new DateTime('1997-11-26');
$currentDate = new DateTime(date('Y-m-d'));
$year = $currentDate->diff($birthDate);

$errorArr = [];

if ($_POST) {
    $name = "";
    $emailBody = "<div>";
    if (isset($_POST['name'])) {
        $name =  htmlspecialchars($_POST['name']);
        $emailBody .= "<div>
                            <label><b>Visitor Name:</b></label>&nbsp;<span>" . $name . "</span>
                        </div>";
    }

    if (isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $emailBody .= "<div>
                            <label><b>Visitor Email:</b></label>&nbsp;<span>" . $email . "</span>
                        </div>";
    }

    if (isset($_POST['message'])) {
        $emailBody .= "<div>
                            <label><b>Visitor Message:</b></label>
                            <div>" . htmlspecialchars($_POST['message']) . "</div>
                        </div>";
    }
    $emailBody .= "</div>";

    $headers  = 'MIME-Version: 1.0' . "\r\n"
        . 'Content-type: text/html; charset=utf-8' . "\r\n"
        . 'From: ' . $email . "\r\n";

    if (mail("leonweis@live.nl", "Contact Form from leonweiss.nl", $emailBody, $headers)) {
        $errorArr['error'] = false;
        $errorArr['msg'] = "Thank you for contacting, I'll reply as soon as possible!";
    } else {
        $errorArr['error'] = true;
        $errorArr['msg'] = "I'm sorry but the email did not go through, please try again later or email leon@leonweiss.nl for support.";
    }
}

$games = [
    ['link' => 'https://www.satisfactorygame.com/', 'name' => 'Satisfactory'],
    ['link' => 'https://store.steampowered.com/app/1245620/ELDEN_RING/', 'name' => 'Elden Ring'],
    ['link' => 'https://store.steampowered.com/app/294100/RimWorld/', 'name' => 'Rimworld'],
    ['link' => 'https://www.finalfantasyxiv.com/', 'name' => 'Final Fantasy XIV', 'last' => true]
];

//  template for project
// [
//     'type' => '',
//     'title' => '',
//     'desc' => '',
//     'img' => '',
//     'buttons' => [
//         [
//             'name' => 'Github',
//             'class' => 'btn-github',
//             'icon' => 'fa-brands fa-github',
//             'url' => ''
//         ],
//         [
//             'name' => 'Website',
//             'class' => 'btn-website',
//             'icon' => 'fa-solid fa-globe',
//             'url' => ''
//         ],
//         [
//             'name' => 'Android',
//             'class' => 'btn-android',
//             'icon' => 'fa-brands fa-android',
//             'url' => ''
//         ]
//     ]
// ]

$skills = [
    ["title" => "PhP", 'url' => 'https://www.php.net/'],
    ["title" => "HTML", 'url' => 'https://html.com/'],
    ["title" => "CSS", 'url' => 'https://www.w3.org/Style/CSS/Overview.en.html'],
    ["title" => "Docker", 'url' => 'https://www.docker.com/'],
    ["title" => "JS", 'url' => 'https://www.javascript.com/'],
    ["title" => 'Jquery', 'url' => 'https://jquery.com/']
];

$projects =
    [
        [
            'type' => 'own',
            'title' => 'leonweiss.nl',
            'desc' => 'My website to show my accomplishments!',
            'img' => './public/img/logo.png',
            'buttons' => [
                [
                    'name' => 'Website',
                    'class' => 'btn-website',
                    'icon' => 'fa-solid fa-globe',
                    'url' => 'https://leonweiss.nl'
                ],
                [
                    'name' => 'Github',
                    'class' => 'btn-github',
                    'icon' => 'fa-brands fa-github',
                    'url' => 'https://github.com/BermuXP/personalwebsite'
                ],
            ]
        ],
        [
            'type' => 'own',
            'title' => 'Dungeon RPG',
            'desc' => 'Dungeon RPG is a discord bot (Under development) that creates/manages dungeons in your discord server!',
            'img' => 'https://bermu.tv/public/img/armoriconpack/black/addons/09_b.PNG',
            'buttons' => [
                [
                    'name' => 'Github',
                    'class' => 'btn-github',
                    'icon' => 'fa-brands fa-github',
                    'url' => 'https://github.com/BermuXP/dungeon-rpg'
                ],
            ]
        ],
        [
            'type' => 'own',
            'title' => 'CloverMMO',
            'desc' => 'CloverMMO is a plugin for Minecraft (under development) created to add roles, classes, factions and special abilities to enchant your experience!',
            'buttons' => [
                [
                    'name' => 'Github',
                    'class' => 'btn-github',
                    'icon' => 'fa-brands fa-github',
                    'url' => 'https://github.com/BermuXP/CloverMMO'
                ],
            ]
        ],
        [
            'type' => 'own',
            'title' => 'Bermu.tv',
            'img' => './public/img/bermu_bongos.gif',
            'desc' => 'Bermu.tv is a website (under development with no repo for privacy reasons) to link Discord together with twitch, creating user profiles and have the user manage the created bots to help their channel!',
            'buttons' => [
                [
                    'name' => 'Website',
                    'class' => 'btn-website',
                    'icon' => 'fa-solid fa-globe',
                    'url' => 'https://bermu.tv/'
                ],
            ]
        ],
        [
            'type' => 'emerald',
            'title' => 'Complete reference DND5e',
            'desc' => 'While you are venturing into dungeons and encountering dragons and other monsters, this is your ideal app to have with you. All monsters, spells, items, skills and feats in 1 handy application.
            For game masters and players alike, this is the ideal app to quickly search through all content.',
            'img' => 'https://complete-reference.com/img/logo2.png',
            'buttons' => [
                [
                    'name' => 'Website',
                    'class' => 'btn-website',
                    'icon' => 'fa-solid fa-globe',
                    'url' => 'https://complete-reference.com/'
                ],
                [
                    'name' => 'Android',
                    'class' => 'btn-android',
                    'icon' => 'fa-brands fa-android',
                    'url' => 'https://play.google.com/store/apps/details?id=com.vansteinengroentjes.apps.ddfive'
                ]
            ]
        ],
        [
            'type' => 'emerald',
            'title' => 'Complete reference PF2',
            'desc' => 'With the Complete Reference app for the Roleplaying Game Pathfinder Second edition, 
            you have all content at hand in a searchable and handy format. All monsters, spells and other content
            can be bookmarked for easy reference. Monsters can be viewed in full screen such that you can show your party what they are battling without giving away the statistics.',
            'img' => 'https://complete-reference.com/img/logo4.png',
            'buttons' => [
                [
                    'name' => 'Website',
                    'class' => 'btn-website',
                    'icon' => 'fa-solid fa-globe',
                    'url' => 'https://complete-reference.com/'
                ],
                [
                    'name' => 'Android',
                    'class' => 'btn-android',
                    'icon' => 'fa-brands fa-android',
                    'url' => 'https://play.google.com/store/apps/details?id=com.vansteinengroentjes.pathfindertwo'
                ]
            ]
        ],
        [
            'type' => 'emerald',
            'title' => 'Lunchy the Lunch bot',
            'desc' => 'Lunchy is a bot created with a link to the Slack API so that people can click on a submit button to join for lunch, this was a project thought of/created by me in Python. <br/>
                        this bot is a private project for Emerald-it and therefore has no Github/Bitbucket repo',
            'img' => '../public/img/lunchy.png'
        ]
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

<div class='col-md-12 bg-opposite' id='skills'>
    <div class='container tab-fixer'>
        <div class='content-section row center'>
            <h2 class='h2-head-clear'>
                Skills
            </h2>
            <div class='skills'>
                <?php foreach ($skills as $skill) { ?>
                    <span class='skill'>
                        <a href='<?= $skill['url']; ?>' class='hover-underline-animation dark'>
                            <?= $skill['title']; ?>
                        </a>
                    </span>
                <?php } ?>
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
            <?php foreach ($projects as $project) {
                if ($project['type'] == "own") {
            ?>
                    <div class='col-md-4 col-sm-12 card-before'>
                        <div class="card text-center">
                            <?php if (isset($project['img'])) { ?><img class="card-img-top card-img-resize" src="<?= $project['img'] ?>" alt="Card image cap"> <?php } ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $project['title'] ?></h5>
                                <p class="card-text"><?= $project['desc']; ?></p>
                                <div class='btn-row'>
                                    <?php if (isset($project['buttons']) && is_array($project['buttons'])) {
                                        foreach ($project['buttons'] as $buttonData) { ?>
                                            <a href="<?= $buttonData['url'] ?>" target="_blank" class="btn <?= $buttonData['class'] ?>"><i class="<?= $buttonData['icon'] ?>"></i> <?= $buttonData['name'] ?></a>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>

<div class='col-md-12 bg-opposite' id='projects'>
    <div class='container tab-fixer'>
        <div class='content-section row center'>
            <h2 class='h2-head-clear'>
                Projects I've Worked on at Emerald-it:
            </h2>
            <?php foreach ($projects as $project) {
                if ($project['type'] == "emerald") { ?>
                    <div class='col-md-4 col-sm-12 card-before'>
                        <div class="card text-center">
                            <?php if (isset($project['img'])) { ?><img class="card-img-top card-img-resize" src="<?= $project['img'] ?>" alt="Card image cap"> <?php } ?>
                            <div class="card-body">
                                <h5 class="card-title"><?= $project['title'] ?></h5>
                                <p class="card-text"><?= $project['desc']; ?></p>
                                <div class='btn-row'>
                                    <?php if (isset($project['buttons']) && is_array($project['buttons'])) {
                                        foreach ($project['buttons'] as $buttonData) { ?>
                                            <a href="<?= $buttonData['url'] ?>" target="_blank" class="btn <?= $buttonData['class'] ?>"><i class="<?= $buttonData['icon'] ?>"></i> <?= $buttonData['name'] ?></a>
                                    <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</div>

<div class='col-md-12' id='contact'>
    <div class='container tab-fixer'>
        <div class='content-section row center'>
            <?php if (!empty($errorArr)) { ?>
                <div class='text-center <?php if (isset($errorArr['error']) && $errorArr['error'] === true) {
                                echo 'error-div';
                            } else {
                                echo 'success-div';
                            } ?>'>
                    <?= $errorArr['msg'] ?>
                </div>
            <?php } ?>
            <h2 class='h2-head'>
                Contact me:
            </h2>
            <div>
                <form method="post" class='contact-form'>
                    <div class="form-group mb-2">
                        <label for="name">Your Name</label>
                        <input class='form-control' type="text" id="name" name="name" placeholder="John Doe" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Your E-mail</label>
                        <input class='form-control' type="email" id="email" name="email" placeholder="john.doe@email.com" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" rows='3' id="message" name="message" placeholder="Say whatever you want." required></textarea>
                    </div>
                    <div class='btn-row center'>
                        <button type="submit" class='btn btn-primary'>Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>