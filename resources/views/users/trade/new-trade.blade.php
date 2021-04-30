@extends('layouts.app')
@section('title')
    <title>New Trade | Trading Journal</title>
@endsection
@section('style')
@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h3>Base inputs</h3>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Form Controls</li>
                            <li class="breadcrumb-item active">Base inputs</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Basic form control</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput1">Email address</label>
                                            <input class="form-control" id="exampleFormControlInput1" type="email" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword2">Password</label>
                                            <input class="form-control" id="exampleInputPassword2" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect9">Example select</label>
                                            <select class="form-select digits" id="exampleFormControlSelect9">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect3">Example multiple select</label>
                                            <select class="form-select digits" id="exampleFormControlSelect3" multiple="">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlTextarea4">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea4" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Basic HTML input control</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Simple Input</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Placeholder</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Type your title in Placeholder">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Password</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="password" placeholder="Password input">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Number</label>
                                            <div class="col-sm-9">
                                                <input class="form-control digits" type="number" placeholder="Number">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Telephone</label>
                                            <div class="col-sm-9">
                                                <input class="form-control m-input digits" type="tel" value="91-(999)-999-999">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">URL</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="url" value="https://getbootstrap.com">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Date and time</label>
                                            <div class="col-sm-9">
                                                <input class="form-control digits" id="example-datetime-local-input" type="datetime-local" value="2018-01-19T18:45:00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Date</label>
                                            <div class="col-sm-9">
                                                <input class="form-control digits" type="date" value="2018-01-01">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Month</label>
                                            <div class="col-sm-9">
                                                <input class="form-control digits" type="month" value="2018-01">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Week</label>
                                            <div class="col-sm-9">
                                                <input class="form-control digits" type="week" value="2018-W09">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Time</label>
                                            <div class="col-sm-9">
                                                <input class="form-control digits" type="time" value="21:45:00">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label pt-0">Color picker</label>
                                            <div class="col-sm-9">
                                                <input class="form-control form-control-color" type="color" value="#563d7c">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">
                                                Maximum
                                                Length
                                            </label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="text" placeholder="Content must be in 6 characters" maxlength="6">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label pt-0">Static Text</label>
                                            <div class="col-sm-9">
                                                <div class="form-control-static">
                                                    Hello !... This is
                                                    static text
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-sm-3 col-form-label">Textarea</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="5" cols="5" placeholder="Default textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <div class="col-sm-9 offset-sm-3">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                    <input class="btn btn-light" type="reset" value="Cancel">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Edges input style</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput5">Email address</label>
                                            <input class="form-control btn-pill" id="exampleFormControlInput5" type="email" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword6">Password</label>
                                            <input class="form-control btn-pill" id="exampleInputPassword6" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect7">Example select</label>
                                            <select class="form-select btn-pill digits" id="exampleFormControlSelect7">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect8">Example multiple select</label>
                                            <select class="form-select btn-pill p-l-45 digits" id="exampleFormControlSelect8" multiple="">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlTextarea9">Example textarea</label>
                                            <textarea class="form-control btn-pill" id="exampleFormControlTextarea9" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Flat input style</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput10">Email address</label>
                                            <input class="form-control btn-square" id="exampleFormControlInput10" type="email" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword11">Password</label>
                                            <input class="form-control btn-square" id="exampleInputPassword11" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect12">Example select</label>
                                            <select class="form-select btn-square digits" id="exampleFormControlSelect12">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect13">Example multiple select</label>
                                            <select class="form-select btn-square digits" id="exampleFormControlSelect13" multiple="">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlTextarea14">Example textarea</label>
                                            <textarea class="form-control btn-square" id="exampleFormControlTextarea14" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Raise input style</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput15">Email address</label>
                                            <input class="form-control input-air-primary" id="exampleFormControlInput15" type="email" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword16">Password</label>
                                            <input class="form-control input-air-primary" id="exampleInputPassword16" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect17">Example select</label>
                                            <select class="form-select input-air-primary digits" id="exampleFormControlSelect17">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect18">Example multiple select</label>
                                            <select class="form-select input-air-primary digits" id="exampleFormControlSelect18" multiple="">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlTextarea19">Example textarea</label>
                                            <textarea class="form-control input-air-primary" id="exampleFormControlTextarea19" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Solid input style</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlInput20">Email address</label>
                                            <input class="form-control" id="exampleFormControlInput20" type="email" placeholder="name@example.com">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword21">Password</label>
                                            <input class="form-control" id="exampleInputPassword21" type="password" placeholder="Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword22">Disabled</label>
                                            <input class="form-control" id="exampleInputPassword22" type="text" disabled="" placeholder="Disabled">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect23">Example select</label>
                                            <select class="form-select digits" id="exampleFormControlSelect23">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect24">Example multiple select</label>
                                            <select class="form-select digits" id="exampleFormControlSelect24" multiple="">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlTextarea25">Example textarea</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea25" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Input sizing</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="colFormLabelSm26">Large input</label>
                                            <input class="form-control form-control-lg" id="colFormLabelSm26" type="text" placeholder="col-form-label-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleInputPassword27">Default input</label>
                                            <input class="form-control" id="exampleInputPassword27" type="text" placeholder="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="colFormLabelSm28">Small input</label>
                                            <input class="form-control form-control-sm" id="colFormLabelSm28" type="text" placeholder="col-form-label-sm">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect29">Large select</label>
                                            <select class="form-select form-control-lg digits" id="exampleFormControlSelect29">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label" for="exampleFormControlSelect30">Default select</label>
                                            <select class="form-select digits" id="exampleFormControlSelect30">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div>
                                            <label class="form-label" for="exampleFormControlSelect31">Small select</label>
                                            <select class="form-select form-control-sm digits" id="exampleFormControlSelect31">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Custom controls</h5>
                        </div>
                        <form class="form theme-form">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3 row">
                                            <label class="col-sm-3 col-form-label">Upload File</label>
                                            <div class="col-sm-9">
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="row">
                                            <label class="col-sm-3 col-form-label">Custom select</label>
                                            <div class="col-sm-9">
                                                <select class="custom-select form-select">
                                                    <option selected="">Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <input class="btn btn-light" type="reset" value="Cancel">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection
@section('script')
    <script src="../assets/js/tooltip-init.js"></script>
@endsection