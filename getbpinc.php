<?php
    print 'Getting available downloads... Please wait<br>';

    // Set target URL to get download file
    $urlstart = 'http://bp-cdn.cfi3ofcl0jo9umd.maxcdn-edge.com/downloads/BPPremier/au/BPS_Data_';
    $begindate = new DateTime('2020-09-01');
    $enddate = date("Y-m-d");
    $interval = DateInterval::createFromDateString('1 day');
    $period = new DatePeriod($begindate, $interval, $enddate);
    $urlend = '_inc.exe';
    $todaydate = substr(date("yymd"), 2);
    
    function URL_exists($url){
        $headers=get_headers($url);
        return stripos($headers[0],"200 OK")?true:false;
    }
    
    //-- start
    
    function getDownloads($a, $b) {
        echo "$a Text. Something else $b <br>";
    }
    
    
    foreach ($period as $dt) {
        $datestring = $dt->format("yymd");
	    $x = substr($datestring, 2);
        $targeturl = $urlstart . $x . $urlend;
        
        if (URL_exists($targeturl)){
            
            //updateDownloads($targeturl);
            print '<a href="' . $targeturl . '">' . $targeturl . '</a><br>';
            
            /*
            print '<br> Downloading from ' . $targeturl;
            // Initialize the cURL session 
            $ch = curl_init($targeturl); 
          
            // Inintialize directory name where file will be saved
            $dir = './'; 
          
            // Set a filename to save to
            //$file_name = basename($trimmed); 
            $file_name = $x . $urlend;
          
            // Save file into file location 
            $save_file_loc = $dir . $file_name; 
          
            // Open file  
            $fp = fopen($save_file_loc, 'wb'); 
          
            // It set an option for a cURL transfer 
            curl_setopt($ch, CURLOPT_FILE, $fp); 
            curl_setopt($ch, CURLOPT_HEADER, 0); 
          
            // Perform a cURL session 
            curl_exec($ch); 
                  
            // Closes a cURL session and frees all resources 
            curl_close($ch); 
        
            // Close file 
            fclose($fp); 
            } else {
            print '<br> nothing found at ' . $targeturl;
            */
            }
        }
        print 'Done';
        
    //-- end
?>
