@extends('layouts.layout')

@section('sql')
    active
@endsection

@section('form')
    <div class="container my-4 d-flex flex-column р-20">
        <div class="card">
            <div class="card-header">
                <div class="accordion accordion-flush" id="accordionFlushForm">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-heading-form">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse-form" aria-expanded="false"
                                    aria-controls="flush-collapse-form">
                                Новый вопрос
                            </button>
                        </h2>
                        <div id="flush-collapse-form" class="accordion-collapse collapse"
                             aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushForm">
                            <div class="accordion-body">
                                <div class="container my-4">
                                    <main class="flex-shrink-0">
                                        <div class="card px-5 py-4">
                                            <form action="{{route('sqls.store')}}" method="post">
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





@endsection

@section('main')
    @foreach($sqls as $sql)
    <div class="container my-4">
        <main class="flex-shrink-0">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between ms-3">
                        <div class="d-flex">
                            <div class="">{{ $sql->rank }}</div>
                            <div class="ms-3">{{ $sql->question }}</div>
                        </div>

                        <div class="d-flex me-3">

                            <a href="{{ route('sqls.up', $sql->id) }}" class="nav-link"><i class="fa-solid fa-circle-chevron-up ms-2"></i></a>
                            <a href="{{ route('sqls.down', $sql->id) }}" class="nav-link"><i class="fa-solid fa-circle-chevron-down ms-2"></i></a>
                            <a href="{{ route('sqls.edit', $sql->id) }}" class="nav-link"><i class="fa-solid fa-pen-to-square ms-2"></i></a>
                            <a href="{{ route('sqls.delete', $sql->id) }}" data-method="delete" class="nav-link"><i class="fa-solid fa-trash ms-2 me-2"></i></a>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <div class="accordion accordion-flush" id="accordionFlush{{ $sql->id }}">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{ $sql->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $sql->id }}" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $sql->id }}">
                                    Примечания
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $sql->id }}" class="accordion-collapse collapse"
                                 aria-labelledby="flush-heading{{ $sql->id }}" data-bs-parent="#accordionFlush{{ $sql->id }}">
                                <div class="accordion-body">{{ $sql->note }}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{ $sql->id }}Two">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapse{{ $sql->id }}Two" aria-expanded="false"
                                        aria-controls="flush-collapse{{ $sql->id }}Two">
                                    Примеры кода
                                </button>
                            </h2>
                            <div id="flush-collapse{{ $sql->id }}Two" class="accordion-collapse collapse"
                                 aria-labelledby="flush-heading{{ $sql->id }}Two" data-bs-parent="#accordionFlush{{ $sql->id }}">
                                <div class="accordion-body">
                                    <code>{{ $sql->code }}</code>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </main>
    </div>
    @endforeach

@endsection

