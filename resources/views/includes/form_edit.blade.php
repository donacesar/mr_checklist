<div class="container my-4 d-flex flex-column р-20">
    <div class="card">
        <div class="card px-5 py-4">
            <form action="{{ route($type . '.update', $item->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <input name="question" type="text" class="form-control"
                           id="exampleFormControlInput1" placeholder="Вопрос..."
                           required value="{{ $item->question }}">
                </div>
                @error('question')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="mb-3">
                        <textarea name="note" class="form-control"
                                  id="exampleFormControlTextarea1"
                                  rows="3" placeholder="Примечание...">{{ $item->note }}</textarea>
                </div>
                <div class="mb-3">
                        <textarea name="code" class="form-control"
                                  id="exampleFormControlTextarea2"
                                  rows="3" placeholder="Примеры кода...">{{ $item->code }}</textarea>
                </div>
                <button type="submit" class="btn btn-outline-primary">Обновить</button>
            </form>
        </div>
    </div>
</div>
