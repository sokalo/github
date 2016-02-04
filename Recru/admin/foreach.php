<?php
$json = 'get yo JSON';
$array = json_decode($json, true); // The `true` says to parse the JSON into an array,
                                   // instead of an object.
foreach($array['workers']['myemail@gmail.com'] as $stat => $value) {
  // Do what you want with the stats
  echo "ea"."$stat: $value<br>";
}

?>

<?php

$json ='{ "results" : [ { "entities" : 
[ { "urls" : [ { "expanded_url" : "http://instagr.am/p/Vz4Nnbnjd6/",
                    "url" : "http://t.co/WZnUf68j"
                  } ] } ],
        "from_user" : "A-user-name",
        "from_user_id" : 457304735,
        "text" : "Ich R U #BoysNoize #SuperRola"
      } ] }';
$json_array = (array)(json_decode($json));
echo '<pre>';
 //print_r($json_array);

 echo $json_array['results'][0]->entities[0]->urls[0]->url;
?>

<?php
function get_appointments($connection,$email)//να μάθω για το μηνυμα που σχετίζεται με το κιτρινο τριγωνακι  
{        $connection->set_charset("utf8");       
 		 $result=$connection->query('select appointments.name,appointments.apID,staffID,appointments.apps_origin,FROM_UNIXTIME( startDate ) as startDate ,
 		 	FROM_UNIXTIME( endDate ) as endDate  
 		  from appointments,users            where users.email="'.$email.'"          
 		    and appointments.bookedfor=users.user_ID');  
 		  if(!$result)        {printf("Errormessage for result: %sn", $connection->error);         return false;}        
 		   elseif($result->num_rows>0)             
 		        {   while ($appdetails = $result->fetch_object())
 		        	{          $appdata[]=['name'=>$appdetails->name,'apID'=>$appdetails->apID,       
 		        	           'start'=>$appdetails->startDate,'end'=>$appdetails->endDate,'staffID'=>$appdetails->staffID      
 		        	                       ,'origin'=>$appdetails->apps_origin];           }        }             
 		        	                          for($i=0;$i < count($appdata);++$i)        {        
 		        	                             $result1 = $connection->query('select serviceID from services_list,appoint_servi_chosen         
 		        	                                   where services_list.serviceID=appoint_servi_chosen.service_ID             
 		        	                                     and appoint_servi_chosen.app_ID="'. $appdata[0]['apID'].'"');     
 		        	                                        }            
 		        	                                         if(!$result1)  
 		        	                                               {printf("Errormessage for result1: %sn", $connection->error);  
 		        	                                                      return false;        }     

 		        	                                                          elseif($result1->num_rows>0)    
 		        	                                                              {       
 		        	                                                                 while($service = $result1->fetch_object())    
 		        	                                                                        {    
 		        	                                                                                $appdata[0]['service'][] = $service->serviceID;     
 		        	                                                                                      }        }   
 		        	                                                                                              return  $appdata;  
 		        	                                                                                                          }

?>
