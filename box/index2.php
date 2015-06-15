<!DOCTYPE html>
<html>
<head>
<style> 
div {
	margin-top: 0px;
    width: 100px;
    height: 100px;
    background: red;
    transition: margin-top 2s;
    -webkit-transition: margin-top 2s; /* Safari 3.1 to 6.0 */
}

div:focus {
    margin-top:200px;
}
</style>
</head>
<body>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div></div>

<p>Hover over the div element above, to see the transition effect.</p>

</body>
</html>
