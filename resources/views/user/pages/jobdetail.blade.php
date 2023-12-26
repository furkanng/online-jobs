@extends('user.layout.app')

@section('title', 'Home Page')
@section('content')
    <div class="container-fluid pt-4 ">
        <div class="bg-light text-left rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">İlan Detayı</h6>
                <h6>Teklifler <span>19</span></h6>
            </div>


            <div class="row">
                <div class="col-md mb-4 order-md-2 bg-white text-left rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="text-left">
                            <h5 class="card-title">Proje Adı: {{$advert["name"]}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted p-2">Bütçe: {{$advert["price"]}}</h6>
                            <p class="card-text">
                                {{$advert["content"]}}
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




                            @if($advert["status"] == 1)

                                <button class="btn btn-primary">aktif</button>
                            @else
                                <button class="btn btn-danger">pasif</button>

                            @endif


                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="row">
                <div class="col-md mb-4 order-md-2 bg-white text-left rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="text-left">
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
            </div>   -->

        </div>
        <!-- Teklif Kısmı -->
        <div class="bg-light text-left rounded p-4 mt-4">
            <h6 class="mb-3">Teklif Verme</h6>
            <form>
                <div class="form-group mb-2">
                    <label for="bidAmount">Teklif Değeri</label>
                    <input type="text" class="form-control" id="bidAmount" placeholder="$">
                </div>
                <div class="form-group mb-2">
                    <label for="deliveryTime">Projenin Teslim Edilmesi Planlanan Gün Sayısı</label>
                    <input type="text" class="form-control" id="deliveryTime" placeholder="Days">
                </div>
                <div class="form-group  mb-3">
                    <label for="proposal">Describe your proposal (minimum 100 characters)</label>
                    <textarea class="form-control" id="proposal" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Teklif Ver</button>
            </form>
        </div>
    </div>

    </div>
    </div>

















@endsection
