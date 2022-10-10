
            <header class="header-desktop2main">
                <div class="section__content section__content--p0">
                    <div class="row">
                        <div class="col-6">
                            <div class="container-fluid">
                            <div class="logo-main" >
                                <div class="logo">
                                <a href="<?= base_url(); ?>">
                                    <img src="<?= base_url(); ?>/dist/images/logo.png" alt="Cool Admin" />
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="container-fluid">
                                <div class="header-wrap2">

                                    <div class="header-button2 header__tool" >
                                        <div class="header-button-item  js-item-menu">
                                            <i class="zmdi zmdi-format-playlist-add"></i>
                                            <div class="setting-dropdown js-dropdown">
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="<?= base_url(); ?>/user/journeys/add">
                                                            <i class="zmdi zmdi-open-in-new"></i>Dodaj ogłoszenie</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="<?= base_url(); ?>">
                                                            <i class="zmdi zmdi-format-list-bulleted"></i>Lista ogłoszeń</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="header-button-item has-noti js-item-menu">
                                            <i class="zmdi zmdi-notifications"></i>
                                            <div class="notifi-dropdown js-dropdown">
                                                <div class="notifi__title">
                                                    <p>Masz wiadomość</p>
                                                </div>
                                                <div class="notifi__item">
                                                    <div class="bg-c1 img-cir img-40">
                                                        <i class="zmdi zmdi-email-open"></i>
                                                    </div>
                                                    <div class="content">
                                                        <p>....</p>
                                                        <span class="date">Data</span>
                                                    </div>
                                                </div>
                                                <div class="notifi__footer">
                                                    <a href="#">Wszystkie wiadomości</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="header-button-item mr-0 js-sidebar-btn">
                                            <i class="zmdi zmdi-account"></i>
                                            <div class="setting-dropdown js-dropdown">

                                            </div>
                                        </div>
                                        <div class="setting-menu js-right-sidebar d-none d-lg-block">

                                            <div class="account-dropdown__body">
                                                <?php if (!session('isLoggedIn')): ?>
                                                    <div class="account-dropdown__item">
                                                        <a href="<?= base_url(); ?>/login">
                                                            <i class="zmdi zmdi-account"></i>Zaloguj</a>
                                                    </div>
                                                    <div class="account-dropdown__item">
                                                        <a href="<?= base_url(); ?>/register">
                                                            <i class="zmdi zmdi-plus"></i>Zarejestruj</a>
                                                    </div>
                                                <?php else: ?>
                                                <div class="account-dropdown__item">
                                                    <a href="<?= base_url(); ?>/user">
                                                        <i class="zmdi zmdi-settings"></i>Panel administracyjny</a>
                                                </div>
                                                <div class="account-dropdown__body">
                                                    <div class="account-dropdown__item">
                                                        <a href="<?= base_url(); ?>/" >
                                                            <i class="zmdi zmdi-account"></i>Wyloguj</a>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

                    </div>
                </div>
            </header>

