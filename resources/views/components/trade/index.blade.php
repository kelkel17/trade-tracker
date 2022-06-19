
@include('components.trade.create')
@include('components.trade.update')
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
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">Actions</th>
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
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">Edit</span>
                        </td>
                    </tr>
                    @foreach ($trades as $trade)
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-sm font-weight-bold mb-0">{{ $trade->trade_date }}</p>
                        </td>
                        <td class="align-middle text-center">
                            <p class="text-sm font-weight-bold mb-0">{{ $trade->lot_size }}</p>
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
                        <td class="align-middle text-center">
                            <span class="text-xs font-weight-bold">Edit</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
