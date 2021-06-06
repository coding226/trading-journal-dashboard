<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .preview img{
            max-width: 100%;
            margin-top: 20px;
        }
        .card{
            border: none;
        }
        .card-header{
            border: none;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="float-right">Trade No: {{ $data['trade']->trade_num }}</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Data</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">Start Date and Time</th>
                                            <td>{{ date_format(date_create($data['trade']->start_datetime),'m/d/Y H:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">End Date and Time</th>
                                            <td>{{ date_format(date_create($data['trade']->end_datetime),'m/d/Y H:i A') }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Symbol</th>
                                            <td>{{ $data['trade']->symbol->symbol }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Long or Short</th>
                                            <td>{{ $data['trade']->long_short }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Position Size</th>
                                            <td>{{ $data['trade']->pips }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pips Profit or Loss</th>
                                            <td>{{ $data['trade']->positionsize }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Fees</th>
                                            <td>{{ $data['trade']->fees }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Profit Gain/Loss</th>
                                            <td>{{ $data['trade']->profit_gl }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Percentage Gain/Loss On Account</th>
                                            <td>{{ $data['trade']->percentage_gl }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Stop Loss Value</th>
                                            <td>{{ $data['trade']->stoplossval }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Open Price</th>
                                            <td>{{ $data['trade']->open_price }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Close Price</th>
                                            <td>{{ $data['trade']->close_price }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Description</th>
                                            <td colspan="3">{{ $data['trade']->description }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @if($data['beimages'])
                        <div class="row mt-5 preview">
                            <h6>Before Images</h6>
                            @foreach($data['beimages'] as $beimage)
                                <img class="b-r-15 mt-3" src="{{ ($beimage->before_link) ? $beimage->before_link:'/'.$beimage->before_file }}" alt="Unknown Image">
                            @endforeach
                        </div>
                        @endif
                        @if($data['afimages'])
                        <div class="row mt-5 preview">
                            <h6 class="mb-5">After Images</h6>
                            @foreach($data['afimages'] as $afimage)
                                <img class="b-r-15 mt-3" src="{{ ($afimage->after_link) ? $afimage->after_link:'/'.$afimage->after_file }}" alt="Unknown Image">
                            @endforeach
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>