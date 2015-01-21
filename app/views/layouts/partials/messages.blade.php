

@if (Session::get('success'))

<div class='alert alert-success'>
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
  <p>{{ Session::get('success') }}</p>
</div>

@endif



@if (Session::get('info'))

  <div class='alert alert-info'>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <p>{{ Session::get('info') }}</p>
  </div>

@endif



@if (Session::get('warning'))

  <div class='alert alert-warning'>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <p>{{ Session::get('warning') }}</p>
  </div>

@endif



@if (Session::get('danger'))

  <div class='alert alert-danger'>
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
    <p>{{ Session::get('danger') }}</p>
  </div>

@endif

