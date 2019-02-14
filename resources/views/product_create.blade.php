@csrf

<form  action="{{ url('/[[route_path]]'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="inputName">Название</label>
        <input class="form-control" id="inputName" placeholder="Название товара"></input>
    </div>
    </br>
    <form>
        <div class="row">
            <div class="col">
                <p>Выберите категорию</p>
                <div class="form-group">
                    <select class="form-control">
                        <option>Категория</option>
                    </select>
                </div>
            </div>
        </div>
        </br>
        <div class="col">
            <p>Выберите производителя</p>
            <div class="form-group">
                <select class="form-control">
                    <option>Производитель</option>
                </select>
            </div>
        </div>
        </div>
    </form>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
