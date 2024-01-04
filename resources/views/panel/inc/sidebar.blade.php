<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route("panel.home")}}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Freelancer</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item ">
            <a href="{{route("panel.home")}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Anasayfa</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item active">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-news'></i>
                <div data-i18n="Layouts">İlanlar</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route('panel.ilanlar.index')}}" class="menu-link">
                        <div data-i18n="Without menu">İlanlarım</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route('panel.ilanlar.create')}}" class="menu-link">
                        <div data-i18n="Without menu">İlan Ekle</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-task'></i>
                <div data-i18n="Layouts">Mikro İş İlanı</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route("panel.mikro-is.index")}}" class="menu-link">
                        <div data-i18n="Without menu">Mikro İşler</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route("panel.mikro-is.create")}}" class="menu-link">
                        <div data-i18n="Without menu">Mikro İş Ekle</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-key'></i>
                <div data-i18n="Layouts">Teklifler</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route("panel.proposal")}}" class="menu-link">
                        <div data-i18n="Without menu">İlan Teklif</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route("panel.microproposal")}}" class="menu-link">
                        <div data-i18n="Without menu">Mikro İşler Teklif</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-wallet'></i>
                <div data-i18n="User interface">Cüzdan</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route("panel.cardinfo")}}" class="menu-link">
                        <div data-i18n="Basic">Kart Bilgileri</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route("panel.txhistory")}}" class="menu-link">
                        <div data-i18n="Basic">Geçmiş Ödemeler</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        updateActiveLink();

        $('.menu-item a.menu-link').on('click', function () {
            // Tüm linklerden active sınıfını kaldır
            $('.menu-item a.menu-link').removeClass('active');

            // Tıklanan linki ve üstteki ana menü öğesini active yap
            $(this).addClass('active').closest('.menu-item').find('> a.menu-link').addClass('active');
        });

        function updateActiveLink() {
            var currentHref = window.location.href;

            // Tüm linklerden active sınıfını kaldır
            $('.menu-item a.menu-link').removeClass('active');

            // Her bir link için kontrol et
            $('.menu-item a.menu-link').each(function () {
                if ($(this).attr('href') === currentHref) {
                    $(this).addClass('active').closest('.menu-item').find('> a.menu-link').addClass('active');
                }
            });
        }
    });

</script>


