<?php

$curl = curl_init();

curl_setopt_array($curl, array(
CURLOPT_URL => 'https://userapi.helomobile.co.ke/api/v2/SendBulkSMS',
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS =>'{
"SenderId": "Helo_SMS",
"ApiKey": "V/GERN9XpWxEEdteAXO/0TAMII5sEMStY2ECUwygKUo=",
"ClientId": "60faf435-4205-4050-8e97-91303275876e",
"MessageParameters": [
    {
        "Number": "254707071957",
        "Text": "message testing for kihiko"
    }
]
}',
CURLOPT_HTTPHEADER => array(
'Content-Type: application/json'
),
 ));
echo $response = curl_exec($curl);
echo curl_close($curl);
echo $response;

?>
<button onclick="testing()">Testing</button>
<script>   

	function testing(){
		alert('testing');
    $(function () {     
         var Jsondata = {
            'SenderId': 'Helo_SMS',
            'ApiKey': 'V/GERN9XpWxEEdteAXO/0TAMII5sEMStY2ECUwygKUo=',
            'ClientId': '60faf435-4205-4050-8e97-91303275876e',
            "Messages": [  
             {  
               "Number": "7894561230",  
               "Text": "test"  
             },
            {  
               "Number": "7894561231",  
               "Text": "test"  
             }
           ]  
        };
        $.ajax({
            type: "POST",
            url: "https://userapi.helomobile.co.ke/api/v2/SendBulkSMS",
            contentType: "application/json",
            dataType: 'json',
            data: JSON.stringify(Jsondata),
            success: function (response) {                
            }
        });
    });
}
</script>