<!doctype html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>BookMark</title>
        <meta name="description" content="Responsive Admin Web App with Bootstrap and AngularJS">
        <meta name="keywords" content="angularjs admin, admin templates, admin themes, bootstrap admin">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

        <!-- google fonts -->
        <script type="text/javascript">
            WebFontConfig = {
                google: { families: [ 'Lato:300,400,700,300italic,400italic:latin' ] }
            };
            (function() {
                var wf = document.createElement('script');
                wf.src = 'bower_components/webfontloader/webfontloader.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>


        <!-- Needs images, font... therefore can not be part of main.css -->
        <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
        <!-- end Needs images -->

            <!-- build:css({.tmp,client}) styles/main.css -->
            <link rel="stylesheet" href="{{ elixir('styles/bootstrap.css') }}">
            <link rel="stylesheet" href="{{ elixir('styles/ui.css') }}">
            <link rel="stylesheet" href="{{ elixir('styles/main.css') }}">
            <!-- endbuild -->

    </head>
	<body>
		@yield('content');
	</body>
	<!-- build:js scripts/vendor.js -->
   <script src="bower_components/jquery/dist/jquery.min.js"></script>
   <script src="bower_components/angular/angular.min.js"></script>
   <script src="bower_components/angular-route/angular-route.min.js"></script>
   <script src="bower_components/angular-aria/angular-aria.min.js"></script>
   <script src="bower_components/angular-animate/angular-animate.min.js"></script>
   <!-- endbuild -->

   <!-- build:js scripts/ui.js -->
   <script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.min.js"></script>
   <script src="bower_components/toastr/toastr.min.js"></script>
   <script src="bower_components/jquery.slimscroll/jquery.slimscroll.min.js"></script>
   <script src="bower_components/angular-loading-bar/build/loading-bar.min.js"></script>
   <script src="bower_components/angular-scroll/angular-scroll.min.js"></script>

   <script src="bower_components/textAngular/dist/textAngular-rangy.min.js"></script>
   <script src="bower_components/textAngular/dist/textAngular-sanitize.min.js"></script>
   <script src="bower_components/textAngular/dist/textAngular.min.js"></script>

   <script src="bower_components/moment/min/moment.min.js"></script>
   <script src="bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
   <script src="bower_components/angular-ui-calendar/src/calendar.js"></script>

   <script src="bower_components/angular-translate/angular-translate.min.js"></script>
   <script src="bower_components/angular-translate-loader-static-files/angular-translate-loader-static-files.min.js"></script>

   <script src="bower_components/ng-tags-input/ng-tags-input.min.js"></script>
   <script src="bower_components/angular-wizard/dist/angular-wizard.min.js"></script>
   <script src="bower_components/bootstrap-file-input/bootstrap.file-input.js"></script>
   <script src="bower_components/angular-validation-match/dist/angular-validation-match.min.js"></script>

   <script src="bower_components/echarts/dist/echarts.min.js"></script>
   <script src="bower_components/echarts/theme/macarons.js"></script>
   <script src="{{ elixir('vendors/ngecharts.js') }}"></script>
   <!-- endbuild -->

   <!-- build:js({.tmp,client}) scripts/app.js -->
   <!-- injector:js -->
   <script src="{{ elixir('app/app.module.js') }}"></script>
   <script src="{{ elixir('app/app/calendar/calendar.module.js') }}"></script>
   <script src="{{ elixir('app/app/task/task.module.js') }}"></script>
   <script src="{{ elixir('app/chart/chart.module.js') }}"></script>
   <script src="{{ elixir('app/form/form.module.js') }}"></script>
   <script src="{{ elixir('app/form/formValidation.module.js') }}"></script>
   <script src="{{ elixir('app/layout/nav.module.js') }}"></script>
   <script src="{{ elixir('app/page/page.module.js') }}"></script>
   <script src="{{ elixir('app/table/table.module.js') }}"></script>
   <script src="{{ elixir('app/ui/ui.module.js') }}"></script>
   <script src="{{ elixir('app/app/calendar/calendar.controller.js') }}"></script>
   <script src="{{ elixir('app/app/task/task.controller.js') }}"></script>
   <script src="{{ elixir('app/app/task/task.directive.js') }}"></script>
   <script src="{{ elixir('app/app/task/task.service.js') }}"></script>
   <script src="{{ elixir('app/chart/echarts.controller.js') }}"></script>
   <script src="{{ elixir('app/core/app.config.js') }}"></script>
   <script src="{{ elixir('app/core/app.controller.js') }}"></script>
   <script src="{{ elixir('app/core/config.route.js') }}"></script>
   <script src="{{ elixir('app/core/i18n.js') }}"></script>
   <script src="{{ elixir('app/dashboard/dashboard.controller.js') }}"></script>
   <script src="{{ elixir('app/form/form.controller.js') }}"></script>
   <script src="{{ elixir('app/form/form.directive.js') }}"></script>
   <script src="{{ elixir('app/form/formValidation.controller.js') }}"></script>
   <script src="{{ elixir('app/form/wizard.controller.js') }}"></script>
   <script src="{{ elixir('app/layout/nav.directive.js') }}"></script>
   <script src="{{ elixir('app/page/page.controller.js') }}"></script>
   <script src="{{ elixir('app/page/page.directive.js') }}"></script>
   <script src="{{ elixir('app/table/table.controller.js') }}"></script>
   <script src="{{ elixir('app/ui/ui.controller.js')  }}"></script>
   <script src="{{ elixir('app/ui/ui.directive.js')  }}"></script>
   <script src="{{ elixir('app/ui/ui.service.js')  }}"></script>
   <!-- endinjector -->
   <!-- endbuild -->
</body>
</html>
