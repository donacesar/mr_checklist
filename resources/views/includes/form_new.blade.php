@auth()
    <div class="container-sm my-4 d-flex flex-column р-20">
        <div class="card">
            <div class="card-header">
                <div class="accordion accordion-flush" id="accordionFlushForm">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading-form">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse-form" aria-expanded="false"
                                    aria-controls="flush-collapse-form">
                                <h5 class="text-primary">Новый вопрос</h5>
                            </button>
                        </h2>
                        <div id="flush-collapse-form" class="accordion-collapse collapse"
                             aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushForm">
                            <div class="accordion-body">
                                <div class="container my-4">
                                    <main class="flex-shrink-0">
                                        <div class="card px-5 py-4">
                                            <form action="{{route($route_name . '.store')}}" method="post">
                                                @csrf
                                                <div class="mb-3">
                                                    <input name="question" type="text" class="form-control"
                                                           id="exampleFormControlInput1" placeholder="Вопрос..."
                                                           required>
                                                </div>
                                                @error('question')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="mb-3">
                                                    <textarea name="note" class="form-control"
                                                              id="exampleFormControlTextarea1"
                                                              rows="3" placeholder="Примечание..."></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <textarea name="code" class="form-control"
                                                              id="exampleFormControlTextarea2"
                                                              rows="3" placeholder="Примеры кода..."></textarea>
                                                </div>
                                                <button type="submit" class="btn btn-outline-primary">Создать</button>
                                            </form>
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
@endauth
