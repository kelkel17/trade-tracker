{{-- <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Trade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('trades.store') }}">
            @csrf
                <div class="modal-body">
                    <div class="mb-3 input-group align-items-center">
                        <div class="col-md-6 pr-2">
                            <label for="tradeDate">Trade Date:</label>
                            <input id="tradeDate" class="form-control" type="date" name="trade_date" value="" />
                            @error('trade_date')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-check form-switch d-flex flex-column-reverse">
                                <input class="form-check-input m-0" type="checkbox" role="switch" name="is_normal_trade" id="flexSwitchCheckDefault" value="">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Is normal trade?</label>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4 input-group justify-content-between">
                        <div class="col-md-6">
                            <label for="tradeEntryTime">Opening time:</label>
                            <input id="tradeEntryTime" name="opening_time" class="form-control" type="text" value="" />
                            @error('opening_time')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-5">
                            <label for="tradeClosingTime">Closing time:</label>
                            <input id="tradeClosingTime" name="closing_time" class="form-control" type="text" value="" />
                            @error('closing_time')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3 input-group justify-content-between">
                        <div class="input-group mb-3 w-50">
                            <select class="form-select" id="inputGroupSelect02" name="direction">
                                <option selected>Choose...</option>
                                <option value="Buy">Buy</option>
                                <option value="Sell">Sell</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Directions</label>
                        </div>
                        <div class="input-group mb-3 w-41">
                            <select class="form-select" id="inputGroupSelect02" name="pair">
                                <option selected>Choose...</option>
                                <option value="AUDZND">AUDZND</option>
                                <option value="EURUSD">EURUSD</option>
                                <option value="AUDCHF">AUDCHF</option>
                            </select>
                            <label class="input-group-text" for="inputGroupSelect02">Pair</label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button  type="submit" class="btn btn-primary">Create Trade</button>
                </div>
            </form>
        </div>
    </div>
</div> --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="updateTradeModal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateTradeModal">Update trade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <!-- Date & Time -->
                        <h6 class="heading-small text-muted mb-4">Trade Date & Time</h6>
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="trade_date">Trade Date</label>
                                        <input
                                            class="form-control datepicker"
                                            name="trade_date"
                                            type="text"
                                            onfocus="focused(this)"
                                            onfocusout="defocused(this)"
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="opening_time">Opening Time</label>
                                        <input
                                            class="form-control timepicker opening-time"
                                            id="opening-time"
                                            name="opening_time"
                                            type="text"
                                            onfocus="focused(this)"
                                            onfocusout="defocused(this)"
                                        >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="closing_time">Closing Time</label>
                                        <input
                                            class="form-control timepicker closing-time"
                                            id="closing-time"
                                            name="closing_time"
                                            type="text"
                                            onfocus="focused(this)"
                                            onfocusout="defocused(this)"
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Direction/Pair/Flag -->
                        <h6 class="heading-small text-muted mb-4">Direction/Pair/Flag</h6>
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="direction">Direction</label>
                                        <select class="form-control" name="direction">
                                            <option>Buy</option>
                                            <option>Sell</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pair">Pair</label>
                                        <select class="form-control" name="pair">
                                            <option>EURUSD</option>
                                            <option>AUDNZD</option>
                                            <option>AUDCHF</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex">
                                    <div class="form-group form-check form-switch mt-auto">
                                        <input class="form-check-input" id="is-normal-trade" type="checkbox" name="is_normal_trade" checked="true">
                                        <label class="form-check-label" for="is_normal_trade">Is normal trade?</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark my-4">
                        <!-- Capital/Lotsize/Commission/New Balance -->
                        <h6 class="heading-small text-muted mb-4">Capital/Lotsize/Commission/New Balance</h6>
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="capital">Capital</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 2)" value="0.00" name="capital">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="lotsize">Lotsize</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 2)" id="lotsize" value="0.00" name="lotsize">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="commission">Commission</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 2)" value="0.00" name="commission">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="new_balance">New balance</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 2)" value="0.00" name="new_balance">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark my-4">
                        <!-- Target ROI/Actual ROI/Profit/Additional/Deduction -->
                        <h6 class="heading-small text-muted mb-4">Target ROI/Actual ROI/Profit/Additional/Deduction</h6>
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="target_roi">Target ROI</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 2)" id="target_roi" value="0.00" name="target_roi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="actual_roi">Actual ROI</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 2)" value="0.00" name="actual_roi">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="profit">Profit</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 2)" value="0.00" name="profit">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="additional">Additional/Deduction</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 2)" value="0.00" name="additional">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark my-4">
                        <!-- Entry/Target/Actual Prices -->
                        <h6 class="heading-small text-muted mb-4">Entry/Target/Actual Prices & Total Pips</h6>
                        <div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="entry_price">Entry Price</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 5)" value="0.000000" name="entry_price">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="target_price">Target Price</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 5)" value="0.000000" name="target_price">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="actual_price">Actual Price</label>
                                        <input type="number" class="form-control currency" oninput="limitDecimalPlaces(event, 5)" value="0.000000" name="actual_price">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="form-control-label" for="total_pips">Total Pips</label>
                                        <input type="number" class="form-control currency" value="0" name="total_pips">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark">Save Trade</button>
            </div>
        </div>
    </div>
</div>