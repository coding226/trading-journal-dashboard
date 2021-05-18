<div class="portlet light portlet-fit portlet-datatable bordered">
    <div class="portlet-title">
        <div class="actions">
            <div class="btn-group dropdown-basic mb-5 pull-right">
                <div class="dropdown mb-5">
                    <div class="btn-group">
                        <button class="dropbtn btn-secondary btn-round" type="button">Export
                            <span><i class="icofont icofont-airplane"></i></span>
                        </button>
                        <div class="dropdown-content pull-right" id="sample_3_tools">
                            <li><a href="javascript:;" data-action="0" class="tool-action"><i class="icon-printer"></i> Print</a></li>
                            <li><a href="javascript:;" data-action="1" class="tool-action"><i class="icon-check"></i> Copy</a></li>
                            <li><a href="javascript:;" data-action="2" class="tool-action"><i class="icon-doc"></i> PDF</a></li>
                            <li><a href="javascript:;" data-action="3" class="tool-action"><i class="icon-paper-clip"></i> Excel</a></li>
                            <li><a href="javascript:;" data-action="4" class="tool-action"><i class="icon-cloud-upload"></i> CSV</a></li>
                            <li><a href="javascript:;" data-action="5" class="tool-action"><i class="icon-refresh"></i> Reload</a></li>
                        </div>
                    </div>
                </div>
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
                        <th>Trade Duration</th>
                        <th>Profit/Loss($)</th>
                        <th>Profit/Loss(%)</th>
                        <th>Win/Loss/BE</th>
                        <th>Edit/Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 0;?>
                    @foreach($trades as $trade)
                    <tr>
                        <td class="text-center">{{ $trade->trade_num }}</td>
                        <td class="text-center">{{ $trade->symbol->symbol }}</td>
                        <td class="text-center">{{ $trade->long_short }}</td>
                        <td class="text-center">{{ $trade->duration }}</td>
                        @if( $trade->profit_gl > 0 )
                        <td class="font-success text-center">{{ $trade->profit_gl }}</td>
                        @else
                        <td class="font-danger text-center">{{ $trade->profit_gl }}</td>
                        @endif
                        @if( $trade->profit_gl > 0 )
                        <td class="font-success text-center">{{ $trade->percentage_gl }}</td>
                        @else
                        <td class="font-danger text-center">{{ $trade->percentage_gl }}</td>
                        @endif
                        <td class="font-success text-center"></td>
                        <td class="d-flex">
                            <a href="{{ url('/edittrade') }}/{{ auth::user()->name }}?tradeid={{ $trade->id }}" class="pull-left">
                                <div class="media"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg></div>
                            </a>
                            <a data-href="{{ url('/deltrade') }}/{{ auth::user()->name }}" dataid="{{ $trade->id }}" class="trade-del pull-right">
                                <div class="media"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg></div>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>