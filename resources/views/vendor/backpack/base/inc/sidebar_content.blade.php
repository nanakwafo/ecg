{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('adminuser') }}"><i class="nav-icon la la-users"></i> Adminusers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('smartmeter') }}"><i class="nav-icon la la-tachometer"></i> Smartmeters</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('district') }}"><i class="nav-icon la la-area-chart"></i> Districts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('installer') }}"><i class="nav-icon la la-user-secret"></i> Installers</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('meterrequest') }}"><i class="nav-icon la la-pencil-square-o"></i> Meterrequests</a></li>
