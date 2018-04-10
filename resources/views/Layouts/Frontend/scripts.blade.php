<!-- Core Js Files -->
{!! Html::script('js/core/jquery.3.2.1.min.js') !!}
{!! Html::script('js/core/popper.min.js') !!}
{!! Html::script('js/core/bootstrap.min.js ') !!}
{!! Html::script('js/plugins/moment.min.js') !!}
<!-- Bootstrap Switch -->
{!! Html::script('js/plugins/bootstrap-switch.js') !!}
<!-- Bootstrap tagsinput -->
{!! Html::script('js/plugins/bootstrap-tagsinput.js') !!}
<!-- Bootstrap tagsinput -->
{!! Html::script('js/plugins/bootstrap-tagsinput.js') !!}
<!-- Bootstrap selectpicker -->
{!! Html::script('js/plugins/bootstrap-selectpicker.js') !!}
<!-- Bootstrap selectpicker -->
{!! Html::script('js/plugins/bootstrap-selectpicker.js') !!}
<!-- Bootstrap selectpicker -->
{!! Html::script('js/plugins/bootstrap-selectpicker.js') !!}
<!-- Plugin for sliders -->
{!! Html::script('js/plugins/nouislider.min.js') !!}
<!-- Sharre -->
{!! Html::script('js/presentation-page/jquery.sharrre.js') !!}
<!-- Plugin for sliders -->
{!! Html::script('js/now-ui-kit.js') !!}
<!-- Sweet alert -->
{!! Html::script('js/sweetalert.min.js') !!}
<!-- Include this after the sweet alert js file -->
@if (Session::has('alert.config'))
    <script>
        swal({!! Session::pull('alert.config') !!});
    </script>
@endif
