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
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create new trade</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form method="POST" action="{{ route('trades.store') }}">
            @csrf
                <div class="modal-body">
                    <div class="card-body">
                            <!-- Date & Time -->
                        <h6 class="heading-small text-muted mb-4">Trade Date & Time</h6>
                        <div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="trade_date">Trade Date</label>
                                        <input
                                            class="form-control datepicker  @error('trade_date') is-invalid @enderror"
                                            name="trade_date"
                                            type="text"
                                            onfocus="focused(this)"
                                            onfocusout="defocused(this)"
                                        >
                                        @error('trade_date')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="opening_time">Opening Time</label>
                                        <input
                                            class="form-control timepicker opening-time @error('opening_time') is-invalid @enderror"
                                            id="opening-time"
                                            name="opening_time"
                                            type="text"
                                            onfocus="focused(this)"
                                            onfocusout="defocused(this)"
                                        >
                                        @error('opening_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="closing_time">Closing Time</label>
                                        <input
                                            class="form-control timepicker closing-time @error('closing_time') is-invalid @enderror"
                                            id="closing-time"
                                            name="closing_time"
                                            type="text"
                                            onfocus="focused(this)"
                                            onfocusout="defocused(this)"
                                            disabled="true"
                                        >
                                        @error('closing_time')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                                        <select class="form-control  @error('direction') is-invalid @enderror" name="direction">
                                            <option>Buy</option>
                                            <option>Sell</option>
                                        </select>
                                        @error('direction')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="pair">Pair</label>
                                        <select class="form-control @error('pair') is-invalid @enderror" name="pair" >
                                            <option>EURUSD</option>
                                            <option>AUDNZD</option>
                                            <option>AUDCHF</option>
                                        </select>
                                        @error('pair')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-dark">Save Trade</button>
                </div>
            </form>
        </div>
    </div>
</div>