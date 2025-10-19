<div class="footer-middle">
    <div class="container">
        <div class="footer-middle__inner text-lg">
            <div class="footer-menu">
                <h3 class="text-white">Меню</h3>

                <ul>
                    @foreach (config('links.nav_items') as $routeName => $label)
                        <li>
                            <a href="{{ route($routeName) }}" class="text-gray {{ request()->routeIs($routeName) ? 'active' : '' }}">{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="footer-middle__right">
                <div class="footer-payments">
                    <h3 class="text-white">Способы оплаты:</h3>

                    <div class="footer-payments__list">
                        <x-icon name="mastercard" />

                        <x-icon name="visa" />
                    </div>
                </div>

                <div class="footer__text text-sm text-gray">
                    Все сеансы начинаются с рекламно-информационного блока.
                    Точную продолжительность сеансов можно уточнить в кинотеатре.
                </div>
            </div>
        </div>
    </div>
</div>
