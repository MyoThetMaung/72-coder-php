<?php
/*Cookie store data in browser
    First-step => run mySetCookie()
    Second-step => run myGetCookie()
    Third-step => run myDeleteCookie()

*/
    
/*  Set cookie formula 
    setcookie('name','value',('time + custom define time'),'path','domain','secure')
        where
            time()+'from now to what time',
            path = '/' (call call anywhere),
            domain = '',
            secure = if '0',http and if '1',https
*/
    function mySetCookie(){
        setcookie('nitrogen', 'nitrogenbomb31@gmail.com', time()+3600, '/', '',0);
    }
    // mySetCookie();


//  Get cookie  => calling setcookie's name
    function myGetCookie(){
        if(isset($_COOKIE['nitrogen'])){
            echo $_COOKIE['nitrogen'];
        }
    }
    myGetCookie();


/*  Delete cookie formula 
    setcookie('name','value',('time - custom define time'),'path','domain','secure')
*/
    function myDeleteCookie(){
        setcookie('nitrogen','nitrogenbomb31@gmail.com',time()-3600, '/','',0);
    }
    // myDeleteCookie();


?>