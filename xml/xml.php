<?php   
    $xml = 'data.xml';                                                  //reading data from data.xml

    $xml_load_file = simplexml_load_file($xml);                         //xml file reading by 'simplexml_load_file
    print_r($xml_load_file);



    $xml_file = <<<START
    <code>

        <name>saimon</name>
        <age>24</age>
        <address>Hlaing Thar Yar</address>
        <job>Developer</job>

    </code>
    START;
    $xml_load_str = simplexml_load_string($xml_file);                   //xml file reading by 'simplexml_load_string
    print_r($xml_load_str);
    



?>