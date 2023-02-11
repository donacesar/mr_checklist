@extends('layouts.layout')

@section('php')
    active
@endsection


@section('main')
    <div class="container my-4">
        <main class="flex-shrink-0">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between ms-3">
                        <div class="d-flex">
                            <div class="">1</div>
                            <div class="ms-3">Создать базу данных</div>
                        </div>

                        <div class="d-flex me-3">

                            <a href="#" class="nav-link"><i class="fa-solid fa-circle-chevron-up ms-2"></i></a>
                            <a href="#" class="nav-link"><i class="fa-solid fa-circle-chevron-down ms-2"></i></a>
                            <a href="#" class="nav-link"><i class="fa-solid fa-pen-to-square ms-2 "></i></a>
                            <a href="#" class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                    Примечания
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the first item's
                                    accordion body.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                    Примеры кода
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                 aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">Placeholder content for this accordion, which is intended to
                                    demonstrate the <code>.accordion-flush</code> class. This is the second item's
                                    accordion body. Let's imagine this being filled with some actual content.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>
    </div>

@endsection

@section('form')
    <div class="container my-4 d-flex flex-column р-20">
        <div class="card">
            <div class="card-header">
                <div class="accordion accordion-flush" id="accordionFlush1">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading1">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="false"
                                    aria-controls="flush-collapse1">
                                Новый вопрос
                            </button>
                        </h2>
                        <div id="flush-collapse1" class="accordion-collapse collapse"
                             aria-labelledby="flush-heading1" data-bs-parent="#accordionFlush1">
                            <div class="accordion-body">
                                <div class="container my-4">
                                    <main class="flex-shrink-0">
                                        <div class="card px-5 py-4">
                                            <form>
                                                <div class="mb-3">
                                                    {{--                                                <label for="exampleFormControlInput1" class="form-label">Новый вопрос</label>--}}
                                                    <input name="question" type="text" class="form-control"
                                                           id="exampleFormControlInput1" placeholder="Вопрос..."
                                                           required>
                                                </div>
                                                @error('question')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                                <div class="mb-3">
                                                    {{--                                                <label for="exampleFormControlTextarea1" class="form-label">Примечание</label>--}}
                                                    <textarea name="note" class="form-control"
                                                              id="exampleFormControlTextarea1"
                                                              rows="3" placeholder="Примечание..."></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    {{--                                                <label for="exampleFormControlTextarea2" class="form-label">Пример кода</label>--}}
                                                    <textarea name="code" class="form-control"
                                                              id="exampleFormControlTextarea2"
                                                              rows="3" placeholder="Примеры кода..."></textarea>
                                                </div>
                                                <button type="button" class="btn btn-outline-primary">Создать</button>
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





@endsection
