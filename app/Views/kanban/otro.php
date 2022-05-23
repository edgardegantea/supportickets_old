<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bulma cards</title>
    <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.png">
    <!-- Bulma Version 0.9.0-->
    <link rel='stylesheet' href='https://unpkg.com/bulma@0.9.0/css/bulma.min.css'>
    <link rel="stylesheet" href="../css/kanban.css">
    <script src="https://kit.fontawesome.com/7dc3015a44.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar has-shadow">
    <div class="container">
        <div class="navbar-brand"><a class="navbar-item" href="../"><img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox"/></a>
            <div class="navbar-burger burger" data-target="navMenu"><span></span><span></span><span></span></div>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-end">
                <div class="navbar-item has-dropdown is-hoverable"><a class="navbar-link">Account</a>
                    <div class="navbar-dropdown"><a class="navbar-item">Dashboard</a><a class="navbar-item">Profile</a><a class="navbar-item">Settings</a>
                        <hr class="navbar-divider" />
                        <div class="navbar-item">Logout</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

<section class="container">
    <div class="">
        <div class="columns is-multiline is-centered cards-container" id="sectioncontainer">
            <div class="column is-one-third">
                <article class="message is-black">
                    <div class="message-header">
                        <p>Season 1</p>
                        <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                        <div class="board-item">
                            <div class="board-item-content"><span>The Fort</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Fist Like a bullet</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>White Stork Spreads Wings</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Two Tigers Subdue Dragons</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Snake Creeps Down</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Hand of Five Poisons</span></div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column is-one-third">
                <article class="message is-primary">
                    <div class="message-header">
                        <p>Season 2</p>
                        <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                        <div class="board-item">
                            <div class="board-item-content"><span>Tiger Pushes Mountain</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Force of Eagle's Claw</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Red Sun, Silver Moon</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Palm of the Iron Fox</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Monkey Leaps Through Mist</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Leopard Stalks in Snow</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Black Heart, White Mountain</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Sting of the Scorpion's Tail</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Nightingale Sings No More</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Wolf's Breath, Dragon Fire</span></div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column is-one-third">
                <article class="message is-link">
                    <div class="message-header">
                        <p>Season 3</p>
                        <button class="delete" aria-label="delete"></button>
                    </div>
                    <div class="message-body">
                        <div class="board-item">
                            <div class="board-item-content"><span>Enter the Phoenix</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Moon Rises, Raven Seeks</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Leopard Snares Rabbit</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Blind Cannibal Assassins</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Carry Tiger to Mountain</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Black Wind Howls</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Dragonfly's Last Dance</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Leopard Catches Cloud</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Chamber of the Scorpion</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Raven's Feather, Phoenix Blood</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>The Boar And The Butterfly</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Cobra Fang, Panther Claw</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Black Lothus, White Rose</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Curse of the Red Rain</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Requiem for the Fallen</span></div>
                        </div>
                        <div class="board-item">
                            <div class="board-item-content"><span>Seven Strike as One</span></div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>
<div class="columns is-mobile is-centered">
    <div class="column is-half is-narrow"></div>
</div>
<script src="<?= base_url('assets/js/bulma.js') ?>"></script>
</body>
</html>