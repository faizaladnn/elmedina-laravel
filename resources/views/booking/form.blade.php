<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
      <label class="d-block">{{ __('common.date') }}</label>
      {{ Form::text('date', date('Y-m-d'), ['class' => 'form-control date', 'placeholder' => 'Select Date', 'readonly']) }}
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
      <label class="d-block">{{ __('common.branches') }}</label>
      {{ Form::select('branch', $branches, '', ['class' => 'form-control', 'placeholder' => __('common.please_select_branch'), 'required']) }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
      <label class="d-block">{{ __('common.time') }}</label>
      {{ Form::text('time', date('H:i:00'), ['class' => 'form-control time', 'placeholder' => 'Select Time', 'readonly']) }}
    </div>
  </div>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
      <label class="d-block">{{ __('common.gender') }}</label>
      {{ Form::select('gender', $gender, '', ['class' => 'form-control', 'placeholder' => __('common.please_select_gender'), 'required']) }}
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <div class="form-group">
      <label class="d-block">{{ __('common.select_package') }}</label>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="form-group">
            {{ Form::select('package_id', $packages, '', ['class' => 'form-control', 'placeholder' => __('common.please_select_package'), 'required']) }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>