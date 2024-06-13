<div class="content">
    <!-- Header -->
    <div class="header">
        <div class="row">
            <div class="col-lg-4 col-md-12 menu-title">
                JOB VANCANCY
            </div>
            <div class="col-lg-6 col-md-12 link">
                <span><a href="{{ url('job/all') }}" wire:navigate
                        class="{{ Request::is('job/all') ? 'active-link' : '' }}">All</a></span>
                <span><a href="{{ url('job/sales') }}" wire:navigate
                        class="{{ Request::is('job/sales') ? 'active-link' : '' }}">SALES</a></span>
                <span><a href="{{ url('job/counter') }}" wire:navigate
                        class="{{ Request::is('job/counter') ? 'active-link' : '' }}">COUNTER</a></span>
                <span><a href="{{ url('job/mekanik') }}" wire:navigate
                        class="{{ Request::is('job/mekanik') ? 'active-link' : '' }}">MEKANIK</a></span>
                <span><a href="{{ url('job/admin') }}" wire:navigate
                        class="{{ Request::is('job/admin') ? 'active-link' : '' }}">ADMIN</a></span>
                <span><a href="{{ url('job/sopir') }}" wire:navigate
                        class="{{ Request::is('job/sopir') ? 'active-link' : '' }}">SOPIR</a></span>
                <span><a href="{{ url('job/other') }}" wire:navigate
                        class="{{ Request::is('job/other') ? 'active-link' : '' }}">OTHER</a></span>
            </div>
            <div class="col-lg-2 col-md-12 search">
                <x-search />
            </div>
        </div>
    </div>
    <!-- END Header -->
    <div class="container-fluid text-center">
        <div class="row">
            @forelse($data as $o)
            <div class="col-lg-4 col-md-6 col-sm-12 item">
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

                    <a href="mailto:karir.yamahabisma@gmail.com" class="apply slide-bottom">
                        Apply Now
                    </a>
                </a>
            </div>
            @empty
            <div class="col-lg-4 col-md-6 col-sm-12 item">
                <a href="#">
                    <p>No Data Available</p>
                </a>
            </div>
            @endforelse
        </div>
    </div>

    <x-back-to-top />
</div>
