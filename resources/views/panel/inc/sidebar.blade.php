<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route("panel.home")}}" class="app-brand-link">
              <span class="app-brand-logo demo">
                  <img src="{{asset("front/resimler/logo.png")}}" alt="logo" width="100px" srcset="">
              </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">Freelancer</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{route("panel.home")}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Anasayfa</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons bx bx-news'></i>
                <div data-i18n="Layouts">İlanlar</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{route("panel.adverts")}}" class="menu-link">
                        <div data-i18n="Without menu">İlanlarım</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route("panel.addadvert")}}" class="menu-link">
                        <div data-i18n="Without menu">İlan Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route("panel.updateadvert")}}" class="menu-link">
                        <div data-i18n="Container">İlan Düzenleme</div>
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
                    <a href="{{route("panel.microjob")}}" class="menu-link">
                        <div data-i18n="Without menu">Mikro İşler</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route("panel.addmicrojob")}}" class="menu-link">
                        <div data-i18n="Without menu">Mikro İş Ekle</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{route("panel.updatemicrojob")}}" class="menu-link">
                        <div data-i18n="Container">Mikro İş Düzenleme</div>
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
                    <a href="{{route("panel.payment")}}" class="menu-link">
                        <div data-i18n="Basic">Ödeme</div>
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
