<div class="content">
    <!-- Header -->
    <div class="header">
        <div class="row">
            <div class="col-lg-6 col-md-12 menu-title">
                Search '{{ $title }}'
            </div>
            <div class="col-lg-6 col-md-12 search">
                <x-search/>
            </div>
        </div>
    </div>
    <!-- END Header -->
    <div class="container-fluid text-center">
        <div class="row">
            @forelse($data as $o)
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                @if(Request::is('product/*'))
                <a href="/product/{{ str_replace(' ', '_', $o['model_name']) }}/show" wire:navigate>
                    <img src="http://sibisma.yamahabismagroup.com/public/img/motorcycle/{{ $o['image'] }}" class="img-fluid">
                    <p class="model-name">{{ $o['model_name'] }}</p>
                    <p class="price"><span class="strip"></span>Rp{{ number_format($o['price'], 0, ',','.') }}<span
                            class="strip"></span></p>
                </a>
                @elseif(Request::is('spart/*'))
                <a href="#">
                    <img src="http://sibisma.yamahabismagroup.com/public/img/sparepart/{{ $o['image'] }}" class="img-fluid">
                    <p class="model-name">{{ $o['parts_name'] }}</p>
                    <p class="price"><span class="strip"></span>Rp{{ $o['price'] }}<span
                            class="strip"></span></p>
                    <button class="order">
                        <img src="{{ asset('img/ic-order.png') }}">Order Parts
                    </button>
                </a>
                @elseif(Request::is('job/*'))
                <a href="#">
                    <p class="job-name slide-top">{{ $o['title'] }}</p>
                    <span class="head-strip flip-in-ver-right"></span>
                    <div class="qualification slide-left">
                        <table>
                            <tr>
                                <th class="table-head">Qualification</th>
                            </tr>
                            <tr>
                                <td>{{ $o['qualification'] }}</td>
                            </tr>
                        </table>
                    </div>

                    <div class="jobdesc slide-right">
                        <div class="table-head">
                            Jobdesc
                        </div>
                        <div class="description">
                            <p>
                                {{ $o['jobdesc'] }}
                            </p>
                        </div>
                    </div>

                    <button class="apply slide-bottom">
                        Apply Now
                    </button>
                </a>
                @endif
            </div>
            @empty
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <p>No Data</p>
            </div>
            @endforelse
        </div>
    </div>

    <x-back-to-top/>
</div>
