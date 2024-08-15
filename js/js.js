function getXmlHttpRequest() {
    var xmlhttp;

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    } else {
        alert("Browser Doesnt Support Ajax!");
    }

    return xmlhttp;
}


function tour_mail() { 

 
   
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("email").value; 
    var c3=document.getElementById("country").value; 
    var c4=document.getElementById("message").value;   
    var c5=document.getElementById('mtype').value;    

    if(c1=="" || c2=="" || c3=="" || c4==""  ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
        
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
                clear_tour_mail();
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 
            
              
            }
        }

        xmlHttp.open("POST", "control/tours_mail.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}

function clear_tour_mail(){
     document.getElementById("name").value="";
     document.getElementById("email").value="";
     document.getElementById("country").value="";     
     document.getElementById("message").value="";
}



function contact_mail() { 
 
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("email").value; 
    var c3=document.getElementById("phone").value;
    var c4=document.getElementById("subject").value;   
    var c5=document.getElementById("message").value;   
   

    if(c1=="" || c2=="" || c3=="" || c4=="" || c5==""  ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
           
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
                clear_contact_mail();
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 
            
              
            }
        }

        xmlHttp.open("POST", "control/contact_mail.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5);

    }

}

function clear_contact_mail(){
     document.getElementById("name").value="";
     document.getElementById("email").value="";
     document.getElementById("phone").value=""; 
     document.getElementById("subject").value="";     
     document.getElementById("message").value="";
}


function send_taxi_mail() { 
   
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("country").value;
    var c3=document.getElementById("email").value; 
    var c4=document.getElementById("contact").value; 
    var c5=document.getElementById("destination").value;
    var c6=document.getElementById("date").value;
    var c7=document.getElementById("time").value;   
    var c8=document.getElementById("adults").value;   
    var c9=document.getElementById('child').value; 
    var c10=document.getElementById('infant').value; 
    var c11=document.getElementById('message').value; 
   
    if(c1=="" || c2=="" || c3=="" || c4=="" || c7==""  || c8==""  || c9==""  || c11==""   ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
               
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 

                 clear_taxi_mail();
            
              
            }
        }

        xmlHttp.open("POST", "control/taxi_mail.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8+ "&c9=" + c9+ "&c10=" + c10+ "&c11=" + c11);

    }

}

function clear_taxi_mail(){
    document.getElementById('message').value="";
    document.getElementById("name").value="";
    document.getElementById("email").value="";
    document.getElementById("phone").value="";
    document.getElementById("adult").value="";
    document.getElementById('child').value="";
    document.getElementById('pplace').value="";
    document.getElementById('date-range0').value="";
    document.getElementById('ptime').value="";
   
    document.getElementById('country').value="";
}


function room_booking() { 
   
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("address").value; 
    var c3=document.getElementById("email").value; 
    var c4=document.getElementById("contact").value; 
    var c5=document.getElementById("country").value;
    var c6=document.getElementById('room').value;
    var c7=document.getElementById('adults').value;
    var c8=document.getElementById('child').value;
    var c9=document.getElementById("chackin").value;   
    var c10=document.getElementById('chackout').value;
    var c11=document.getElementById("message").value; 
    
   

    if(c1=="" || c2=="" || c3=="" || c4=="" || c5=="" || c6=="" || c7=="" || c8=="" || c9=="" || c10=="" ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
                clear_room_booking();
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 
            
              
            }
        }

        xmlHttp.open("POST", "control/mail1.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8+ "&c9=" + c9+ "&c10=" + c10+ "&c11=" + c11);

    }

}

function clear_room_booking(){
    
    document.getElementById("name").value="";
    document.getElementById("address").value="";
    document.getElementById("email").value="";
    document.getElementById('contact').value="";
    document.getElementById("country").value="";
    document.getElementById('room').value="";
    document.getElementById('adults').value="";
    document.getElementById('child').value="";
    document.getElementById('checkin').value="";    
    document.getElementById('checkout').value="";
    document.getElementById('message').value="";
}

function room_page_booking() { 
   
    var c1=document.getElementById("name").value;
    var c2=document.getElementById("address").value; 
    var c3=document.getElementById("email").value; 
    var c4=document.getElementById("contact").value; 
    var c5=document.getElementById("country").value;
    var c7=document.getElementById('adults').value;
    var c8=document.getElementById('child').value;
    var c9=document.getElementById("chackin").value;   
    var c10=document.getElementById('chackout').value;
    var c11=document.getElementById("message").value; 
    
   

    if(c1=="" || c2=="" || c3=="" || c4=="" || c5=="" ||  c7=="" || c8=="" || c9=="" || c10=="" ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
        
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
             
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
                clear_room_booking();
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 
            
              
            }
        }

        xmlHttp.open("POST", "control/mail1.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c7=" + c7+ "&c8=" + c8+ "&c9=" + c9+ "&c10=" + c10+ "&c11=" + c11);

    }

}

function clear_room_page_booking(){
    
    document.getElementById("name").value="";
    document.getElementById("address").value="";
    document.getElementById("email").value="";
    document.getElementById('contact').value="";
    document.getElementById("country").value="";
    document.getElementById('room').value="";
    document.getElementById('adults').value="";
    document.getElementById('child').value="";
    document.getElementById('checkin').value="";    
    document.getElementById('checkout').value="";
    document.getElementById('message').value="";
}

function send_handcrafted() { 
    
    
    var c1=""; 
    var c2=document.getElementById("name").value; 
    var c4=document.getElementById("country").value; 
    var c3=document.getElementById("email").value;  
    var c4=document.getElementById("contact").value;
    var c5=document.getElementById("days").value;   
    var c6=document.getElementById('arrival_date').value;
    var c7=document.getElementById('departure_date').value; 
    var c8=document.getElementById('adults').value;    
    var c9=document.getElementById('child').value;
    var c10=document.getElementById('infant').value;  
    var c11=document.getElementById('message').value; 
    
    
   

    if(c2=="" || c3=="" || c4=="" || c5=="" || c6=="" || c7=="" || c8=="" || c11==""  ){
        document.getElementById("success").style.display="none";
        document.getElementById("error").style.display="block";
        setTimeout(function(){
           document.getElementById("error").style.display="none";
        }, 3000);
       
        return false;
    }
    
    document.getElementById("send_btn").disabled=true;
   
    xmlHttp = getXmlHttpRequest();
   
    if (xmlHttp != null) {
        xmlHttp.onreadystatechange = function () {
            if (xmlHttp.readyState == 1 || xmlHttp.readyState == 2 || xmlHttp.readyState == 3) {
               
            }
            if (xmlHttp.readyState == 4) {
               var res = xmlHttp.responseText; 
            
                document.getElementById("error").style.display="none";
                document.getElementById("success").style.display="block";
                document.getElementById("send_btn").disabled=false;
               
                setTimeout(function(){
                    document.getElementById("success").style.display="none";
                }, 3000); 

                 clear_send_handcrafted();
            
              
            }
        }

        xmlHttp.open("POST", "control/tailor_maid_mails.php", true);
        xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xmlHttp.send("c1=" + c1 + "&c2=" + c2+ "&c3=" + c3+ "&c4=" + c4+ "&c5=" + c5+ "&c6=" + c6+ "&c7=" + c7+ "&c8=" + c8+ "&c9=" + c9+ "&c10=" + c10+ "&c11=" + c11);

    }

}

function clear_send_handcrafted(){
    document.getElementById("name").value="";
    document.getElementById("country").value="";
    document.getElementById("email").value="";
    document.getElementById('contact').value="";
    document.getElementById("days").value="";
    document.getElementById('arrival_date').value="";
    document.getElementById('departure_date').value="";
    document.getElementById('adults').value="";
    document.getElementById('child').value="";  
    document.getElementById('infant').value="";
    document.getElementById('message').value="";
   
  
         
}



