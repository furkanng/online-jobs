@extends('user.layout.app')

@section('title', 'Teklifler ve İlanlar')
@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Teklifler ve İlanlar</h6>
            </div>

            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card-link bg-light">
                        <div class="card p-3 position-relative">
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <!-- Belki buraya bir şey eklenebilir, örneğin işi tamamla butonu -->
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon mr-3 rounded-circle bg-info p-2">
                                    <i class="fas fa-tasks fa-2x text-white"></i>
                                </div>
                                <div class="text-left">
                                    <h5 class="card-title">İş Başlığı 1</h5>
                                    <h6 class="card-subtitle mb-2 text-muted p-2">$300.00 – 800.00 AUD</h6>
                                    <p class="card-text">
                                        Bu aktif bir iş. İşi tamamladığınızda işi tamamla butonunu kullanabilirsiniz.
                                    </p>
                                    <a href="{{route("user.bid")}}" class="btn btn-primary">Teklifimi göster</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- İsteğe bağlı olarak başka kartlar ekleyebilirsiniz -->
            </div>

            <div class="row">
                <div class="col-md mb-4 order-md-2">
                    <div class="card-link bg-light">
                        <div class="card p-3 position-relative">
                            <div class="position-absolute top-0 end-0 mt-2 me-2">
                                <!-- Belki buraya bir şey eklenebilir, örneğin işi tamamla butonu -->
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="icon mr-3 rounded-circle bg-info p-2">
                                    <i class="fas fa-tasks fa-2x text-white"></i>
                                </div>
                                <div class="text-left">
                                    <h5 class="card-title">İş Başlığı 2</h5>
                                    <h6 class="card-subtitle mb-2 text-muted p-2">$300.00 – 800.00 AUD</h6>
                                    <p class="card-text">
                                        Bu aktif bir iş. İşi tamamladığınızda işi tamamla butonunu kullanabilirsiniz.
                                    </p>
                                    <a href="{{route("user.bid")}}" class="btn btn-primary">Teklifimi Göster</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- İsteğe bağlı olarak başka kartlar ekleyebilirsiniz -->
            </div>
        </div>
    </div>
@endsection
