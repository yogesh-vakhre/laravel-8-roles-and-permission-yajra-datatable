<div class="row">
  <div class="col-12">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
      <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      <strong>Success - </strong> {{ $message }}!
    </div>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
      <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      <strong>Error - </strong> {{ $message }}!
    </div>
    @endif

    @if ($message = Session::get('warning'))
    <div class="alert alert-warning alert-dismissible bg-warning text-white border-0 fade show" role="alert">
      <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      <strong>Warning - </strong> {{ $message }}!
    </div>
    @endif

    @if ($message = Session::get('info'))
    <div class="alert alert-info alert-dismissible bg-info text-white border-0 fade show" role="alert">
      <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
      <strong>Info - </strong> {{ $message }}!
    </div>
    @endif
  </div>
  <div>