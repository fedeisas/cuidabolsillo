<script type="text/javascript">
    var a = document.getElementsByTagName("a");
    for(var i = 0; i < a.length; i++) {
        if(!a[i].onclick && a[i].getAttribute("target") != "_blank") {
            a[i].onclick = function() {
                window.location = this.getAttribute("href");
                return false;
            }
        }
    }
</script>

<script src="{{{ asset('js/jquery.min.js') }}}" type="text/javascript"></script>
<script src="{{{ asset('js/bootstrap.min.js') }}}" type="text/javascript"></script>


@if (App::environment() == 'production')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-46644132-1', 'cuidabolsillo.com');
  ga('send', 'pageview');
</script>
@endif