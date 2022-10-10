<!-- MENU SIDEBAR-->
<aside class="menu-sidebar2">
    <div class="logo">
        <a href="<?= base_url(); ?>">
            <img src="<?= base_url(); ?>/dist/images/logo.png" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar2__content js-scrollbar1"  >
        <div class="account2" >
            <a href="<?= base_url(); ?>/logout">Wyloguj</a>
        </div>

        <nav class="navbar-sidebar2" > 
            <ul class="list-unstyled navbar__list">
                <li>
                    <a href="<?= base_url(); ?>/user/message" >
                        <i class="fas  fa-comment-alt"></i>Wiadomości </a>
                    <span class="inbox-num">3</span>
                </li>
                <li>
                    <a href="<?= base_url(); ?>/user/reservation" >
                        <i class="fas fa-taxi"></i>Umówione wyjazdy</a>
                </li>
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-car"></i>Moje rezerwacje
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url(); ?>/user/reservation">
                                <i class="fas fa-list" ></i>Lista rezerwacji</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/journey/add">
                                <i class="fas fa-plus-square"></i>Dodaj przejazd</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>">
                                <i class="fas fa-search"></i>Wyszukaj przejazd</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/message">
                                <i class="fas fa-comment-alt"></i>Wiadomości</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-table"></i>Ogłoszenia
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url(); ?>/user/journey/edit">
                                <i class="fas fa-pencil-square"></i>Zarządzaj ogłoszeniami</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/journey/add" >
                                <i class="fas fa-plus-circle" aria-disabled="true"></i>Dodaj ogłoszenie</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/journey">
                                <i class="fas fa-list"></i>Lista ogłoszeń</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/reservation/driver">
                                <i class="fas fa-pencil-square"></i>Rezerwacje</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/journey/archive">
                                <i class="fas fa-list"></i>Lista zak. ogłoszeń </a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-user-circle"></i>Użytkownik
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url(); ?>/user/password">
                                <i class="fas fa-key"></i>Zmień hasło</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/put">
                                <i class="fas fa-user"></i>Edytuj dane
                                <?php if(session('is_complete')==false): ?>
                                    <span class="inbox-num">1</span>
                                <?php endif ?>
                            </a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/driver">
                                <i class="fas fa-unlock-alt"></i>Profil kierowcy</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/account">
                                <i class="fas fa-unlock-alt"></i>Usuń konto</a>
                        </li>
                    </ul>
                </li>
                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-car"></i>Samochody
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url(); ?>/user/vehicle">
                                <i class="fas fa-list"></i>Lista samochodów</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/vehicle/add">
                                <i class="fas fa-plus-circle"></i></i>Dodaj samochodów</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/vehicle/put">
                                <i class="far fa-edit"></i>Edytuj dane samochodu</a>
                        </li>
                    </ul>
                </li>

                <li class="has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-comment"></i>Opinie
                        <span class="arrow">
                                    <i class="fas fa-angle-down"></i>
                                </span>
                    </a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url(); ?>/user/opinion/aboutme">
                                <i class="fas fa-comments"></i>Opinie o mnie</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/opinion/">
                                <i class="fas fa-comment"></i>Wystawione opinie</a>
                        </li>
                        <li>
                            <a href="<?= base_url(); ?>/user/opinion/add">
                                <i class="fas fa-paragraph"></i>Wystaw opinie</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>