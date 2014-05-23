@implements('layouts.business')

@section('content')
<div id="content" class="wrap">
	<div id="wufoo-zvbq1no1wtvcl6">
Fill out my <a href="https://fusionfx.wufoo.com/forms/zvbq1no1wtvcl6">online form</a>.
</div>
<script type="text/javascript">var zvbq1no1wtvcl6;(function(d, t) {
var s = d.createElement(t), options = {
'userName':'fusionfx',
'formHash':'zvbq1no1wtvcl6',
'autoResize':true,
'height':'1062',
'async':true,
'host':'wufoo.com',
'header':'show',
'ssl':true};
s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'wufoo.com/scripts/embed/form.js';
s.onload = s.onreadystatechange = function() {
var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
try { zvbq1no1wtvcl6 = new WufooForm();zvbq1no1wtvcl6.initialize(options);zvbq1no1wtvcl6.display(); } catch (e) {}};
var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
})(document, 'script');</script>
</div>
@stop
