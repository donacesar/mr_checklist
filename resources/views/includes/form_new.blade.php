@auth()

    <div class="main-container">

        <div class="accordion">

            <div class="accordion-header new-form-color">
                Новый вопрос
            </div>

            <div class="accordion-body">

                <div class="new-form">

                    <form action="{{route($route_name . '.store')}}" method="post">

                        @csrf

                        <div class="">
                            <input name="question" type="text" class="form-control"
                                   id="exampleFormControlInput1" placeholder="Вопрос..."
                                   required>
                        </div>

                        @error('question')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="">
                            <textarea name="note" class="form-control"
                                      id="exampleFormControlTextarea1"
                                      rows="6" placeholder="Примечание...">
                            </textarea>
                        </div>

                        <div class="">
                            <textarea name="code" class="form-control"
                                      id="exampleFormControlTextarea2"
                                      rows="6" placeholder="Примеры кода...">
                            </textarea>
                        </div>

                        <button type="submit" class="btn">Создать</button>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endauth
