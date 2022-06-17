
@include('components.trade.create')
<div class="card mb-4">
    <div class="card-header pb-0 text-center">
        <h6>Trades</h6>
    </div>
    <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
            <table class="table align-items-center justify-content-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Trade Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Lot Size</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Commission</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Entry Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Target Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actual Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Total Pips</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Capital</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Pair</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Direciton</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Opening Time</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Closing Time</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Target ROI</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actual ROI</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Profit</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">New Balance</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Additional/Deduction</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-sm font-weight-bold mb-0">06/17/2022</p>
                        </td>
                        <td class="align-middle text-center">
                            <p class="text-sm font-weight-bold mb-0">0.12</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">3.6</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">1.1234567</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">1.1234567</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">1.1234567</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">56</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">$25</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">AUDNZD</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">Sell</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">22:15</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">22:20</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">4.2</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">9.5</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">5.3</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">30.3</span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">No comment</span>
                        </td>
                    </tr>
                    {{-- <tr>
                        <td>
                            <div class="d-flex px-2">
                                <div>
                                    <img src="{{ asset('img/small-logos/logo-xd.svg') }}" class="avatar avatar-sm rounded-circle me-2">
                                </div>
                                <div class="my-auto">
                                    <h6 class="mb-0 text-sm">Adobe XD</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-sm font-weight-bold mb-0">$2,300</p>
                        </td>
                        <td>
                            <span class="text-xs font-weight-bold">done</span>
                        </td>
                        <td class="align-middle text-center">
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="me-2 text-xs font-weight-bold">100%</span>
                                <div>
                                    <div class="progress">
                                        <div class="progress-bar bg-gradient-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">
                            <button class="btn btn-link text-secondary mb-0" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-ellipsis-v text-xs" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
