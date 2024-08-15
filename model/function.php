

<?php
include './model/DB.php';

session_start();

$page_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";



function ___page_setup__(){
    $page1 = (explode('/', $_SERVER["REQUEST_URI"]));
     
     if($_SERVER['HTTP_HOST']=="localhost"){
         echo 'http://localhost/hotel/'.$page1[2];
    
     }else{
        $par='';
        if(isset($page1[1])){
           echo 'https://www.tarawatergate.com/';    
        }else{
           echo 'https://www.tarawatergate.com/'.$par;    
        }
        
     }
   // print_r($page1);

}




$enkey ="ahajhajja8878gg66aguun";

function encrypt($plaintext, $enkey){

    $td = mcrypt_module_open('cast-256', '', 'ecb', '');
    $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    mcrypt_generic_init($td, $enkey, $iv);
    $encrypted_data = mcrypt_generic($td, $plaintext);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    $encoded_64 = base64_encode($encrypted_data);
    return trim($encoded_64);

}

function decrypt($crypttext, $enkey){

    $decoded_64=base64_decode($crypttext);
    $td = mcrypt_module_open('cast-256', '', 'ecb', '');
    $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
    mcrypt_generic_init($td, $enkey, $iv);
    $decrypted_data = mdecrypt_generic($td, $decoded_64);
    mcrypt_generic_deinit($td);
    mcrypt_module_close($td);
    return trim($decrypted_data);
}


function limit_text($text, $limit) {
    $strings = $text;
      if (strlen($text) > $limit) {
          $words = str_word_count($text, 2);
          $pos = array_keys($words);
          if(sizeof($pos) >$limit)
          {
            $text = substr($text, 0, $pos[$limit]) . '...';
          }
          return $text;
      }
      return $text;
    }


// Function to get all the dates in given range
function getDatesFromRange($start, $end,$format = 'Y-m-d') {
      
    // Declare an empty array
    $array = array();
      
    // Variable that store the date interval
    // of period 1 day
    $interval = new DateInterval('P1D');
  
    $realEnd = new DateTime($end);
    $realEnd->add($interval);
  
    $period = new DatePeriod(new DateTime($start), $interval, $realEnd);
  
    // Use loop to store date into array
    foreach($period as $date) {                 
        $array[] = $date->format($format); 
    }
  
    // Return the array elements
    return $array;
}

function my_encrypt($val){
  $enkey ="ahajhajja8878gg66aguun";
  $crypted_v1 = openssl_encrypt($val,"AES-128-ECB",$enkey);
  $crypted_v2=str_replace("/","100",$crypted_v1); 
  $crypted_v3=str_replace("==","A5000",$crypted_v2);
  $crypted_v=str_replace("+","B5000",$crypted_v3);  
  return $crypted_v;
}

function my_decrypt($val){
  $enkey ="ahajhajja8878gg66aguun";
  $crypted_v1=str_replace("100","/",$val); 
  $crypted_v2=str_replace("A5000","==",$crypted_v1);
  $crypted_v3=str_replace("B5000","+",$crypted_v2);  
  $crypted_v = openssl_decrypt($crypted_v3,"AES-128-ECB",$enkey);

  return $crypted_v;
}
//echo $crypted_password = encrypt("my kade", $salt);
// decrypt
//echo decrypt($crypted_password, $salt);

function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
 }
 function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );
}

function  session_check($val){
    if($val==1){  
         if(!isset( $_SESSION["cid"] ) ){
              
           header("location:./login.prox");    
         }
    }else if($val==2){

         if(!isset( $_SESSION["vid"] ) &&  !isset( $_SESSION["suid"] ) ){
            header("location:./login.prox");    
         }

    }else if($val==3){

         if(!isset( $_SESSION["admin_id"] ) ){
           header("location:./admin-cpanel");    
         }
    }  
}


function  meta_data($con,$pg){

 
 $kw="";
$result = mysqli_query($con, "SELECT * FROM keywords   ");
                            while ($row = mysqli_fetch_array($result)) {
                                $kwords   = $row['kwords'];
                                if($kw==""){
                                    $kw.=$kwords;
                                }else{
                                    $kw.=','.$kwords;
                                }
                                
}
 
echo '<meta name="keywords" content="'.$kw.'">';
$mdescription="";
$result = mysqli_query($con, "SELECT * FROM meta_description  WHERE banner_type_idbanner_type='$pg' ");
                            while ($row = mysqli_fetch_array($result)) {
                                $mdescription   = $row['mdescription'];                             
}

echo '<meta name="description" content="'.$mdescription.'">';


}



function ___page_url__(){
    $page1 = (explode('/', $_SERVER["REQUEST_URI"]));
     $page="";
     if($_SERVER['HTTP_HOST']=="localhost"){
        $page=$page1[2];    
     }else{
         $page=$page1[1]; 
         //echo 'https://test.needcity.lk/'.$page1[1];    
     }
              

         if($page=="" || $page=="home.tara"){
            return 1;
         }else if($page=="about.tara"){
            return 2;
         }else if($page=="rooms.tara"){
            return 3;
         }else if($page=="services.tara"){
            return 4;
         }else if($page=="blog.tara" || $page=="article.tara"){
            return 5;
         }else if($page=="gallery.tara"){
            return 6;
         }else if($page=="contact.tara"){
            return 7;
         }else if($page=="room-details.tara"){
            return 8;
         }else if($page=="things-to-do.tara" || $page=="things-to-do-details.tara"){
            return 9;
         }else if($page=="green-concept.tara"){
            return 10;
         }

    //print_r($page1);

}







?>