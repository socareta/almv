<div class="col-12 p-2 text-center">
    <a href="{{ route('dashboard') }}" class="btn btn-{{ Request::url() == route('dashboard')? 'light':'primary bg-brand' }}">Dashboard</a>
    @if(Auth::user()->role == 'admin')
    <a href="{{ route('photograper') }}" class="btn btn-{{ Request::url() == route('photograper')? 'light':'primary bg-brand' }}">Photografer</a>
    <a href="{{ route('voter') }}" class="btn btn-{{ Request::url() == route('voter')? 'light':'primary bg-brand' }}">Voter</a>
    <a href="{{ route('photo.index') }}" class="btn btn-{{ Request::url() == route('photo.index')? 'light':'primary bg-brand' }}">Photo</a>
    <a href="{{ route('sales.index') }}" class="btn btn-{{ Request::url() == route('sales.index')? 'light':'primary bg-brand' }}">Sales</a>
    @endif
</div>