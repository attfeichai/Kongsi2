<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <title></title>
  <meta name="Copyright" content="cvc t        xxxxbbb ln nnbyg7it6gbt5xs">
  <meta name="Generator" content="Cocoa HTML Writer">
  <meta name="CocoaVersion" content="1187.4">
  <style type="text/css">
    p.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica}
    p.p2 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica; min-height: 14.0px}
    span.Apple-tab-span {white-space:pre}
  </style>
</head>
<body>
<p class="p1">&lt;?php</p>
<p class="p2"><br></p>
<p class="p1"><span class="Apple-tab-span">	</span>$pref_path = "/var/www/kongsi/";</p>
<p class="p2"><br></p>
<p class="p1"><span class="Apple-tab-span">	</span>// include the necessary classes</p>
<p class="p1"><span class="Apple-tab-span">	</span>include $pref_path."config.php";</p>
<p class="p1"><span class="Apple-tab-span">	</span>include $pref_path."include/adodb5/adodb.inc.php";</p>
<p class="p1"><span class="Apple-tab-span">	</span>include $pref_path."include/class.DateHelperExt.php";</p>
<p class="p2"><span class="Apple-tab-span">	</span></p>
<p class="p1"><span class="Apple-tab-span">	</span>$smsfolder = '/var/spool/gammu/inbox/';</p>
<p class="p1"><span class="Apple-tab-span">	</span>$sms_error = "";</p>
<p class="p1"><span class="Apple-tab-span">	</span>$date = new DateTime();</p>
<p class="p1"><span class="Apple-tab-span">	</span>$result = "";</p>
<p class="p2"><br></p>
<p class="p1"><span class="Apple-tab-span">	</span>if ($handle = opendir($smsfolder)) {</p>
<p class="p1"><span class="Apple-converted-space">        <span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span></span>while (false !== ($entry = readdir($handle))) {</p>
<p class="p1"><span class="Apple-converted-space">          <span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span></span>if ($entry != "." &amp;&amp; $entry != ".." &amp;&amp; (pathinfo($entry)["extension"]) == "txt") {</p>
<p class="p1"><span class="Apple-converted-space">             <span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span></span>$content<span class="Apple-converted-space">  </span>= file_get_contents($smsfolder . $entry);</p>
<p class="p2"><br></p>
<p class="p1"><span class="Apple-converted-space">                  <span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span></span>$file_part = explode("_",$entry);<span class="Apple-converted-space">       </span></p>
<p class="p1"><span class="Apple-converted-space">                  <span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span></span>$command =<span class="Apple-converted-space">  </span>$file_part[1];</p>
<p class="p1"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>$customer_id =<span class="Apple-converted-space">  </span>$file_part[2];</p>
<p class="p1"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>$menu_id =<span class="Apple-converted-space">  </span>$file_part[3];</p>
<p class="p1"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>$securitycode =<span class="Apple-converted-space">  </span>$file_part[4];</p>
<p class="p1"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>echo "Command: '$command' \n";</p>
<p class="p1"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>}</p>
<p class="p1"><span class="Apple-tab-span">	</span><span class="Apple-tab-span">	</span>}</p>
<p class="p1"><span class="Apple-tab-span">	</span>fclose($handle);</p>
<p class="p1"><span class="Apple-tab-span">	</span>}</p>
<p class="p1">?&gt;</p>
<p class="p2"><span class="Apple-converted-space">                  </span></p>
</body>
</html>
