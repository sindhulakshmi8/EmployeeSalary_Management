<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<title>Welcome!</title>
    <style type="text/css">		
		/* CLIENT-SPECIFIC STYLES */
        @import url('https://fonts.googleapis.com/css?family=Quicksand');		
		body, table, td, a{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
		table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
		img{-ms-interpolation-mode:bicubic;border:none;} /* Allow smoother rendering of resized image in Internet Explorer */

		/*  Header Image liquid */
		span.fluid img {
			max-width: 100% !important;
			width: 100% !important;
			height: auto !important;
		}
        .font-1{
            font-size:15px;
            /* line-height: 23px;  */
            color:#000;
             /*margin-bottom:13px;        */
        }     
        .heading-1{
            font-size:24px;
            /* line-height: 23px;  */
            color:#000;
             /*margin-bottom:13px;        */
        }     
        .font-2{
            font-size: 11px;
            /* line-height: 11px; */
        }  
		.btn-link{
            padding: 3px 8px;
            border-radius: 5px;
            color: #fff !important;
            text-decoration: none;
            margin-left: 10px;
        }
		.btn-approve{
            background-color: #066a05;
        }
		.btn-reject{
            background-color: #e71010;
        }
        @media screen and (max-width: 315px){
			.font-1{
                font-size:10px;
                /* line-height: 10px;  */
                color:#000;
                /* margin-bottom:8px;        */
            }     
            .heading-1{
                font-size:12px;
                /* line-height: 23px;  */
                color:#000;
                /*margin-bottom:13px;        */
            }     
            .font-2{
                font-size: 8px;
                /* line-height: 11px; */
            }  
           
		 }
		@media screen and (min-width:316px) and (max-width: 400px){
			.font-1{
                font-size:10px;
                /* line-height: 12px;  */
                color:#000;
                /* margin-bottom:8px;        */
            }    
            .heading-1{
                font-size:13px;
                /* line-height: 23px;  */
                color:#000;
                /*margin-bottom:13px;        */
            } 
            .font-2{
                font-size: 8px;
                /* line-height: 11px; */
            }     
            
		 }
         @media screen  and (min-width:401px) and (max-width: 480px){
            .font-1{
                font-size:12px;
                /* line-height: 12px;  */
                color:#000;
               /*  margin-bottom:10px;        */
            }     
            .heading-1{
                font-size:16px;
                /* line-height: 23px;  */
                color:#000;
                /*margin-bottom:13px;        */
            }   
            .font-2{
                font-size: 9px;
                /* line-height: 11px; */
            }  
             
        }
         @media screen and (min-width:481px) and (max-width: 600px){
            .font-1{
                font-size:14px;
                /* line-height: 15px;  */
                color:#000;
                /* margin-bottom:15px;        */
            }       
		 }
		/* RESET STYLES */
		body{margin:0; background-color: rgb(88, 87, 87);font-family: 'Quicksand', sans-serif;}
		img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
		table{border-collapse:collapse !important;}
		body{height:100% !important; margin:0; padding:0; width:100% !important;}
		
	</style>
</head>
{{-- <body style="background-color:rgb(142, 140, 140); padding-top:10px;">	 --}}
<body style=" -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; font-family: 'Noto Sans', sans-serif; ; height: 100% !important; width: 100% !important; margin: 0; padding: 10px;">

	{{-- <table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;width:100%;max-width:600px;margin:20px auto;padding:20px;table-layout:fixed;"> --}}
    <table align="left" border="0" cellpadding="0" cellspacing="0" style="max-width:500px;width:100%;">
		<tbody>	
			<!-- header -->
            <tr>
				<td width="100%" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0pt; mso-table-rspace: 0pt;padding:10px 20px;">
                    <table border="0" width="100%">
                         
                        <tr>
                            <td height="15">&emsp;</td>
                        </tr>
                        <tr>
                            <td style="padding-bottom: 20px;">
                                Dear <strong>{{ $name }}</strong>,
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>This Mail is to Inviting you to join in our team. <br> Email : {{$email}}<br>Password : {{$password}} <a href="#">click here</a> to login and Approve it.</p>         
                            </td>
                        </tr>
                       
                
                        {{-- spaceing --}}
                        <tr>
                            <td>
                                <p>&emsp;</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>
                                    Regards,<br>
                                    <strong>MET Engineering Services</strong>
                                </p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
		</tbody>
	</table>
	

</body>
</html>