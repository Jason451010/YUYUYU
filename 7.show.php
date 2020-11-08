<？php
session_start（）;

if（！isset（$ _SESSION [ 'id' ]））{    
   迴聲 “請登錄系統”；
   迴聲 “ <meta http-equiv ='refresh'content ='3; url = login.html''>” ;
}其他{
      echo  “歡迎{$ _SESSION ['id']}登陸<br>” ;  
}

？>
