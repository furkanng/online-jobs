<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{ route("user.home") }}" class="navbar-brand mx-4 mb-3">
            <h3 style="font-size: larger"><i class="fa fa-hashtag me-2"></i>Freelancer</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{asset("user/img/no-image.jpg")}}" alt=""
                     style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{(auth()->guard("user")->user()->name)}}</h6>
                <span>User</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route("user.home") }}" class="nav-item nav-link active"><i class="fas fa-newspaper me-2"></i>İlanları
                Görüntüle</a>
            <a href="{{ route("user.microIndex") }}" class="nav-item nav-link"><i class="fas fa-newspaper me-2"></i>Mikro
                İlanlar</a>
            <a href="{{ route("user.profile") }}" class="nav-item nav-link"><i class="fas fa-user me-2"></i></i>Profilim</a>
            <div class="nav-item dropdown">
                <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-hand-holding-usd me-2"></i>İşlerim</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route("user.activejob")}}" class="dropdown-item">Aktif İşlerim</a>
                    <a href="{{route("user.donejob")}}" class="dropdown-item">Geçmiş İşlerim</a>
                    <a href="{{route("user.microjob")}}" class="dropdown-item">Mikro İşlerim</a>
                </div>
            </div>
            <a href="{{route("user.bid")}}" class="nav-item nav-link"><i
                    class="fa fa-handshake me-2"></i>Tekliflerim</a>
            <a href="{{route("user.wallet")}}" class="nav-item nav-link"><i class="fas fa-wallet"></i>Cüzdan</a>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        updateActiveLink();

        // Her bir nav-item'e tıklandığında çağrılacak fonksiyon
        $('.navbar-nav a.nav-link').on('click', function () {
            // Tüm linklerden active sınıfını kaldır
            $('.navbar-nav a.nav-link').removeClass('active');
            // Tıklanan linke active sınıfını ekle
            $(this).addClass('active');

            // Dropdown linkine tıklandığında dropdown'un kendisini de active yap
            if ($(this).hasClass('dropdown-toggle')) {
                $(this).closest('.dropdown').addClass('active');
            }
        });

        // Dropdown içindeki bir link tıklandığında dropdown'un kendisini de active yap
        $('.navbar-nav .dropdown-menu a.dropdown-item').on('click', function () {
            $(this).closest('.dropdown').addClass('active');
        });

        // Fonksiyon: Sayfa yüklendiğinde veya bir link tıklandığında çağrılır
        function updateActiveLink() {
            // Aktif olan linkin href değerini al
            var currentHref = window.location.href;

            // Tüm linklerden active sınıfını kaldır
            $('.navbar-nav a.nav-link').removeClass('active');

            // Her bir link için kontrol et
            $('.navbar-nav a.nav-link').each(function () {
                if ($(this).attr('href') === currentHref) {
                    $(this).addClass('active');

                    if ($(this).hasClass('dropdown-toggle')) {
                        $(this).closest('.dropdown').addClass('active');
                    }
                }
            });
        }
    });
</script>


