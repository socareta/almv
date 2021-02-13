@if(Session::has('message'))
<div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
  {{ Session::get('message') }}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif