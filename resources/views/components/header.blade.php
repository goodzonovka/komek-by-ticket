<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-top__inner">
                <div class="header-top__left">
                    <x-logo />

                    <div class="header-top__address">
                        <div class="text-lg text-white">Казахстан</div>
                        <a href="https://maps.app.goo.gl/zPRZ9NVRoVEPq34D7" class="mgt-0.5 text-sm text-gray"
                           target="_blank" rel="noopener noreferrer nofollow">
                            улица Тестовая 1
                        </a>
                    </div>

                    <x-phone />
                </div>

                <div class="header-top__right">
                    <x-social />

                    <x-button href="#" id="received-ticket">Мне пришёл билет</x-button>

                    <button class="mobile-menu__button-open" aria-label="Open menu" id="mobile-menu-button-open">
                        <x-icon name="hamburger" width="28" height="28" />
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="header-bottom__inner" id="header-bottom-inner">
                <x-nav />

                <div class="header-bottom__buttons" id="header-bottom-buttons">
                    <x-button>Войти</x-button>
                    <x-button>Написать отзыв</x-button>
                </div>
            </div>
        </div>
    </div>
</header>
