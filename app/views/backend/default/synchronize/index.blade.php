@section('content')
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN FORM PORTLET-->
            <div class="widget light-gray box">
                <div class="blue widget-title">
                    <h4><i class="icon-reorder"></i>Synchronize</h4>
                </div>
                <div class="widget-body form">
                    @if ($current_user->hasAccess("synchronize.local-to-web"))
                    <a href="{{url('backend/synchronize/localToWeb')}}" class="btn">Synchronize to Remote</a>
                    @endif
                    <br><br>
                    @if ($current_user->hasAccess("synchronize.web-to-local"))
                    <a href="{{url('backend/synchronize/webToLocal')}}" class="btn">Synchronize from Remote</a>
                    @endif
                </div>
            </div>
            <!-- END FORM PORTLET-->
        </div>
    </div>
@stop
