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
            <div class="modal-body">
                <div class="card-body">
                    <form>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Username</label>
                                        <input type="text" id="input-username" class="form-control" placeholder="Username" value="lucky.jesse">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email address</label>
                                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">First name</label>
                                        <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-last-name">Last name</label>
                                        <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark my-4">
                        <!-- Address -->
                        <div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Address</label>
                                        <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-city">City</label>
                                        <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Country</label>
                                        <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-country">Postal code</label>
                                        <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="horizontal dark my-4">
                        <!-- Description -->
                        <div>
                            <div class="form-group">
                                <label class="form-control-label">About Me</label>
                                <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 5.</textarea>
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