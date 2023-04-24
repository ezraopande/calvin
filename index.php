<?php

$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];


if ($text == "") {
    
    $response  = "CON Welcome to Erico Tunes \n";
    $response .= "1. Skiza Tunes \n";
    $response .= "2. Artist";

} else if ($text == "1") {
    
    $response = "CON Welcome to Skiza\n";
    $response .= "1. Search Skiza \n";
    $response .= "2. Trending Songs of the week \n";
    $response .= "3. Top Skiza Kenyan Gospels \n";
    $response .= "4. Top Skiza Tanzania Gospel \n";
    $response .= "5. Online catalogue \n";
}

else if($text == "1*1") { 
    
    $response = "CON Artists Available\n";
    $response .= "1. Khaligraph Jones\n";
    $response .= "2. Nadia Nakai \n"; 
    $response .= "3. Alikiba \n";
    $response .= "4. Harmonize \n";

}
else if($text == "1*1") { 
    
    $response = "CON Artists Available\n";
    $response .= "1. Khaligraph Jones\n";
    $response .= "2. Nadia Nakai \n"; 
    $response .= "3. Alikiba \n";
    $response .= "4. Harmonize \n";

}

 else if($text == "1*2") { 
    
    $response = "CON Songs of the week\n";
    $response .= "1. Zuwena\n";
    $response .= "2. Mahaba \n";
    $response .= "3. Ni Wewe \n";
    $response .= "4. Reason with me \n"; 

}

 else if($text == "1*2*1") { 
    
    $response = "CON You are about to subscribe to Zuwena by Diamond charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
} 
 else if($text == "1*2*1*1") {

   $response = "END You have successfully subscribed to Zuwena by Diamond at KES1.5 daily\n";
} 
else if($text == "1*2*1*2") { 
    
    $response = "END Thank you\n";
}

 else if($text == "1*2*2") { 
    
    $response = "CON You are about to subscribe to Mahaba by Alikiba charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
}

else if($text == "1*2*2*1") { 
    
    $response = "END You have successfully subscribed to Mahaba by Alikiba at KES1.5 daily\n";
} 

else if($text == "1*2*2*2") { 
    
    $response = "END Thank you\n";
}

else if($text == "1*2*3") { 
    
    $response = "CON You are about to subscribe to Ni Wewe by Killy charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
} 

else if($text == "1*2*3*1") { 
    
    $response = "END You have successfully subscribed to Ni Wewe by Killy at KES1.5 daily\n";
}

else if($text == "1*2*3*2") { 
    
    $response = "END Thank you\n";
}

else if($text == "1*3") { 
    
    $response = "CON Top Skiza Kenyan Gospels\n";
    $response .= "1. Gospel 1 KE\n";
    $response .= "2. Gospel 2 KE \n";
    $response .= "3. Gospel 3 KE \n";

}

else if($text == "1*3*1") { 
    
    $response = "CON You are about to subscribe to Gospel 1 KE by Artist 1 charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
}

else if($text == "1*3*1*1") { 
    
    $response = "END You have successfully subscribed to Gospel 1 KE by Artist 1 at KES1.5 daily\n";
}

else if($text == "1*3*1*2") { 
    
    $response = "END Thank you\n";
}


else if($text == "1*3*2") { 
    
    $response = "CON You are about to subscribe to Gospel 2 KE by Artist 2 charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
}

else if($text == "1*3*2*1") { 
    
    $response = "END You have successfully subscribed to Gospel 2 KE by Artist 2 at KES1.5 daily\n";
}

else if($text == "1*3*2*2") { 
    
    $response = "END Thank you\n";
}

else if($text == "1*3*3") { 
    
    $response = "CON You are about to subscribe to Gospel 3 KE by Artist 3 charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
}

else if($text == "1*3*3*1") { 
    
    $response = "END You have successfully subscribed to Gospel 3 KE by Artist 3 at KES1.5 daily\n";
}

else if($text == "1*3*3*2") { 
    
    $response = "END Thank you\n";
}

else if($text == "1*4") { 
    
    $response = "CON Top Skiza Tanzania Gospels\n";
    $response .= "1. Gospel 1 TZ\n";
    $response .= "2. Gospel 2 TZ \n";
    $response .= "3. Gospel 3 TZ \n";

}

else if($text == "1*4*1") { 
    
    $response = "CON You are about to subscribe to Gospel 1 TZ by Artist 1 charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
}

else if($text == "1*4*1*1") { 
    
    $response = "END You have successfully subscribed to Gospel 1 TZ by Artist 1 at KES1.5 daily\n";
}

else if($text == "1*4*1*2") { 
    
    $response = "END Thank you\n";
}

 else if($text == "1*4*2") { 
    
    $response = "CON You are about to subscribe to Gospel 2 TZ by Artist 2 charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
}

else if($text == "1*4*2*1") { 
    
    $response = "END You have successfully subscribed to Gospel 2 TZ by Artist 2 at KES1.5 daily\n";
}

else if($text == "1*4*2*2") { 
    
    $response = "END Thank you\n";
}

 else if($text == "1*4*3") { 
    
    $response = "CON You are about to subscribe to Gospel 3 TZ by Artist 3 charging KES1.5 daily\n";
    $response .= "1. Accept\n";
    $response .= "2. Decline \n"; 
}

else if($text == "1*4*3*1") { 
    
    $response = "END You have successfully subscribed to Gospel 3 TZ by Artist 3 at KES1.5 daily\n";
}

else if($text == "1*4*3*2") { 
    
    $response = "END Thank you\n";
}
 else if ($text == "1*5") {
    
    $response = "END www.apensoftwares.co.ke \n";
}


 else if ($text == "2") {
    
    $response = "CON Welcome Artist\n";
    $response .= "1. Login \n";
    $response .= "2. Register \n";
}
else if($text == "2*1") { 
    
    $response = "CON Login\n";
    $response .= "1. Enter ID Number\n";

}
else if($text == "2*1*1") { 
    
    $response = "CON Login\n";
    $response .= "1. Enter MSISDN\n";

}
else if($text == "2*1*1*1") { 
    
    $response = "END Loan Menu Appear Here\n";

}

else if($text == "2*2") { 
    
    $response = "CON Register\n";
    $response .= "1. Enter ID MSISDN\n";

}

else if($text == "2*2*1") { 
    
    $response = "CON Confirm your details\n";
    $response .= "1. Confirm\n";
    $response .= "2. Edit Details\n";

}

else if($text == "2*2*1*1") { 
    
    $response = "END Details Submitted successfully\n";

}
else if($text == "2*2*1*1") { 
    
    $response = "CON Register\n";
    $response .= "1. Enter ID MSISDN\n";

}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;