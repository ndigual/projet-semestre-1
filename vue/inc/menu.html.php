<style>
    header {
        width: 100%;
        display: flex;
        justify-content: space-between;
        background-color: wheat;
        padding: 5% 0;
    }

    .logo {
        width: 30%;
    }

    nav {
        width: 50%;
        display: flex;
        justify-content: space-around;
    }
</style>

<header>
    <div class="logo">
        LOGO
    </div>
    <nav>
        <a href="<?php echo WEB_ROUTE.'?controller=formController&view=accueil'?>">
            Accueil
        </a>
        <a href="<?php echo WEB_ROUTE.'?controller=formController&view=exercice1'?>">
            Exercice 1
        </a>
        <a href="<?php echo WEB_ROUTE.'?controller=formController&view=exercice2'?>">
            Exercice 2
        </a>
        <a href="<?php echo WEB_ROUTE.'?controller=userController&view=list.user'?>">
            affiche utilisateur
        </a>
    </nav>
</header>