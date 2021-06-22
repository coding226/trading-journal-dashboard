<div class="portlet light portlet-fit portlet-datatable bordered">
    <div class="portlet-title">
        <div class="actions">
            <div class="btn-group dropdown-basic mb-5 pull-right">
            @isset($completed)
                <button class="btn btn-primary" id="importbtn" type="button" data-bs-toggle="modal" data-bs-target="#importformmoal">Import
                    <span><i class="icofont icofont-upload"></i></span>
                </button>
                <div class="dropdown mb-5">
                    <div class="btn-group">
                        <button class="dropbtn btn-secondary" type="button" id="exportbtn">Export
                            <span><i class="icofont icofont-airplane"></i></span>
                        </button>
                        <div class="dropdown-content pull-right" id="sample_3_tools">
                            <li><a href="javascript:;" data-action="0" class="tool-action"><i class="icon-printer"></i> Print</a></li>
                            <li><a href="javascript:;" data-action="1" class="tool-action"><i class="icon-check"></i> Copy</a></li>
                            <!-- <li><a href="javascript:;" data-action="2" class="tool-action"><i class="icon-doc"></i> PDF</a></li> -->
                            <li><a href="javascript:;" data-action="3" class="tool-action"><i class="icon-paper-clip"></i> Excel</a></li>
                            <li><a href="javascript:;" data-action="4" class="tool-action"><i class="icon-cloud-upload"></i> CSV</a></li>
                            <!-- <li><a href="javascript:;" data-action="5" class="tool-action"><i class="icon-refresh"></i> Reload</a></li> -->
                        </div>
                    </div>
                </div>
            @endisset
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="table-container">
            <table class="table table-striped table-bordered table-hover" id="sample_3">
                <thead>
                    <tr>
                        <th>Trade No</th>
                        <th>Symbol:</th>
                        <th>Long/Short</th>
                        <th class="text-center">Start Date</th>
                        @isset($completed)
                        <th class="d-none">End Date</th>
                        <th class="text-center">Trade Duration</th>
                        <th class="d-none">Position Size</th>
                        <th class="d-none">Pips</th>
                        <th class="d-none">Fees</th>
                        <th>Profit/Loss({{ Auth::user()->current_user->current_currency->sign }})</th>
                        <th>Profit/Loss(%)</th>
                        <th class="d-none">Stop Loss Val</th>
                        <th class="d-none">Open Price</th>
                        <th class="d-none">Close Price</th>
                        <th>Win/Loss/BE</th>
                        @else
                        <th class="text-center">Current Duration</th>
                        <th>Open Price</th>
                        @endisset
                        <th>Edit/Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0;?>
                    @foreach($trades as $key => $trade)
                    <tr>
                        <td class="text-center">{{ $key+1 }}</td>
                        <td class="text-center">{{ $trade->symbol->symbol }}</td>
                        <td class="text-center">{{ $trade->long_short }}</td>
                        <td class="text-center">{{ $trade->start_datetime }}</td>
                        @isset($completed)
                            <td class="d-none">{{ $trade->end_datetime }}</td>
                            <td class="text-center">{{ Carbon\CarbonInterval::seconds($trade->duration)->cascade()->forHumans() }}</td>
                            <td class="d-none">{{ $trade->positionsize }}</td>
                            <td class="d-none">{{ $trade->pips }}</td>
                            <td class="d-none">{{ $trade->fees }}</td>
                            @if( $trade->profit_gl > 0 )
                            <td class="font-success text-center">{{ $trade->profit_gl }}</td>
                            @else
                            <td class="font-danger text-center">{{ $trade->profit_gl }}</td>
                            @endif
                            @if( $trade->profit_gl > 0 )
                            <td class="font-success text-center">{{ number_format($trade->percentage_gl, 2, '.', '') }}</td>
                            @else
                            <td class="font-danger text-center">{{ number_format($trade->percentage_gl, 2, '.', '') }}</td>
                            @endif
                            <td class="d-none">{{ $trade->stoplossval }}</td>
                            <td class="d-none">{{ $trade->open_price }}</td>
                            <td class="d-none">{{ $trade->close_price }}</td>
                            @if( $trade->profit_gl > 0 )
                            <td class="font-success text-center">Win</td>
                            @elseif( $trade->profit_gl < 0 )
                            <td class="font-danger text-center">Loss</td>
                            @else
                            <td class="font-warning text-center">Break Even</td>
                            @endif
                        @else
                            <td class="text-center">{{ Carbon\CarbonInterval::seconds($currenttime - strtotime($trade->start_datetime))->cascade()->forHumans() }}</td>
                            <td class="text-center">{{ number_format($trade->open_price, 2, '.', '') }}</td>
                        @endisset
                        <td class="d-flex">
                            <a href="{{ url('/edittrade') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" class="pull-left">
                                <i data-feather="edit-3"></i>
                            </a>
                            <a data-href="{{ url('/deltrade') }}/{{ auth::user()->name }}" dataid="{{ $trade->id }}" class="trade-del pull-right">
                                <i data-feather="trash"></i>
                            </a>
                            <a href="{{ url('/viewtrade') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" class="pull-left">
                                <p data-bs-toggle="tooltip" data-bs-placement="right" title="View"><i data-feather="eye"></i></p>
                            </a>
                            @isset($completed)
                            <a href="{{ url('/downloadpdf') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" target="_blank" class="pull-left">
                                <i data-feather="download-cloud"></i>
                            </a>
                            @endisset
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="{{ url('assets/js/icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ url('assets/js/icons/feather-icon/feather-icon.js') }}"></script>