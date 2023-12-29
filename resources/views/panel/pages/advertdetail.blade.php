@extends('panel.layout.app')

@section('title', 'İlan Detayı')
@section('content')
    <div class="container mt-4">
        <div class="card bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h2 class="mb-0">İlan Detayları</h2>
            </div>
            <div class="container mt-4 bg-white">
                    <div class="row g-4">
                        <div class="order-md-2 bg-white rounded p-4">
                            <div class="mb-4">
                                <div>
                                    <h5 class="card-title">Proje Adı: Kurye Servis Website</h5>
                                    <h6 class="card-subtitle mb-2 text-muted p-2">Bütçe: $250.00 – $750.00 AUD</h6>
                                    <p class="card-text">
                                        Merhaba, ben bir web geliştirici arıyorum. Kurye hizmeti sunan bir web sitesi yapmayı düşünüyorum.
                                        Ana odak noktam, müşterilere çevrimiçi rezervasyon ve ödeme yapma imkanı sunan bir platform sağlamaktır.
                                        Ayrıca, aşağıdaki becerilere ve teknolojilere sahip adayları arıyorum:
                                    </p>
                                    <h6 class="mb-3">Gereken Beceriler:</h6>
                                    <ul>
                                        <li>Web geliştirme deneyimi</li>
                                        <li>Çevrimiçi rezervasyon sistemleri konusunda uzmanlık</li>
                                        <li>Ödeme entegrasyonları konusunda bilgi</li>
                                        <li>Mobil uyumlu tasarım becerileri</li>
                                        <li>Veritabanı yönetimi</li>
                                    </ul>
                                    <h6 class="mb-3">İlgili Teknolojiler:</h6>
                                    <p class="card-text">
                                        Proje geliştirmek için aşağıdaki teknolojilere hakim olmanız tercih sebebidir:
                                    </p>
                                    <ul>
                                        <li>HTML, CSS, JavaScript</li>
                                        <li>Front-end framework (örneğin, React veya Vue.js)</li>
                                        <li>Backend teknolojisi (örneğin, Node.js veya Django)</li>
                                        <li>Veritabanı yönetimi (örneğin, MongoDB veya MySQL)</li>
                                    </ul>
                                    <p class="card-text">
                                        Bu becerilere sahipseniz ve projeye katılmak istiyorsanız, lütfen başvurunuzu gönderin.
                                    </p>
                                    <small class="text-muted">Yayınlanma Tarihi: 5 dakika önce</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
