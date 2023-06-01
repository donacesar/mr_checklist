<div class="main-container">

    <div class="form-edit">

        <form action="{{ route($route_name . '.update', $item->id) }}" method="post">

            @csrf
            @method('patch')

            <div class="mb-3">
                <label for="exampleFormControlInput1">Вопрос</label>
                <input name="question" type="text" class="form-control"
                       id="exampleFormControlInput1" placeholder="Вопрос..."
                       required value="{{ $item->question }}">
            </div>

            @error('question')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="exampleFormControlTextarea1">Примечание</label>
                <textarea rows="{{ substr_count($item->note, PHP_EOL) + 1 }}" name="note" class="form-control"
                          id="exampleFormControlTextarea1"
                          placeholder="Примечание...">{{ $item->note }}</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea2">Примеры кода</label>
                <textarea name="code" class="form-control"
                          id="exampleFormControlTextarea2"
                          rows="{{ substr_count($item->code, PHP_EOL) + 1 }}"
                          placeholder="Примеры кода...">{{ $item->code }}</textarea>
            </div>

            <button type="submit" class="btn btn-edit">Обновить</button>

            <input type="hidden" name="back_url" value="{{ $back_url }}">

        </form>

    </div>

</div>
