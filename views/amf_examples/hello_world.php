<html>
<head>
    <title>Zend AMF / Kohana PHP Integration Example</title>
</head>
<body>

<? 
    if(isset($message)) { 
        echo "<h3>HTML Result</h3>";
        echo "<pre>$message</pre>";
    } 

    echo "<h3>HTML Input</H3>";
    echo form::open(NULL);
    echo form::label('name',"Your Name");
    echo form::input('name');
    echo form::submit("submit","Submit");    

?>

</body>
</html>
