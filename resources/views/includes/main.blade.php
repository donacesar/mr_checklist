@foreach($items as $item)
    <div class="container my-4 d-flex flex-column р-20">
        <div class="card">
            <div class="card-header">
                <div class="accordion accordion-flush" id="accordionFlush{{ $item->id }}">
                    <div class="accordion-item">
                        <div class="row">
                            <div class="col-10">
                                <h2 class="accordion-header" id="flush-heading-{{ $item->id }}">
                                    <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse-{{ $item->id }}" aria-expanded="false"
                                            aria-controls="flush-collapse-{{ $item->id }}">
                                        {{ $item->question }}
                                    </button>
                                </h2>
                            </div>
                            <div class="col-2 p-3">
                                <div class="d-flex me-3 justify-content-center">
                                    <a href="{{ route($type . ".up", $item->id) }}" class="nav-link pe-2"><i
                                            class="fa-solid fa-circle-chevron-up ms-2"></i></a>
                                    <a href="{{ route($type . ".down", $item->id) }}" class="nav-link pe-2"><i
                                            class="fa-solid fa-circle-chevron-down ms-2"></i></a>
                                    <a href="{{ route($type . ".edit", $item->id) }}" class="nav-link pe-2"><i
                                            class="fa-solid fa-pen-to-square ms-2"></i></a>
                                    <a href="{{ route($type . ".delete", $item->id) }}" data-method="delete"
                                       class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>
                                </div>
                            </div>
                        </div>
                        <div id="flush-collapse-{{ $item->id }}" class="accordion-collapse collapse"
                             aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush{{ $item->id }}">
                            <div class="accordion-body">
                                <div class="container my-4">
                                    <main class="flex-shrink-0">
                                        <div class="border p-3 bg-light">{{ $item->note }}
                                        </div>
                                        <div class="border p-3">
                                            <code>{{ $item->code }}</code>
                                        </div>
                                    </main>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
