<?php

///////////////////////////////////////
// (c) Travis Mathis BitPaks.com 2013
///////////////////////////////////////

/////////////////////////////////////////////////////////////////////
// VARIABLES
/////////////////////////////////////////////////////////////////////
	$secret = $_GET["secret"];
	$jsonData = file_get_contents('php://input');
	$postData = json_decode($jsonData, true);
	$orderStatus = $postData['order']['status'];
	$confirmations = $postData['order']['transaction']['confirmations'];
	$orderid = $postData['order']['custom'];
	$transactionid = $postData['order']['transaction']['id'];

//////////////////////////////////////////////////////////////////////
// FUNCTIONS
//////////////////////////////////////////////////////////////////////
	function delLineFromFile($fileName, $lineNum){
			if(!is_writable($fileName))
				{
					print "the file $fileName is not writable";
					exit;
				}
			else
				{
					$arr = file($fileName);
				}

  			// the line to delete is the line number minus 1, because arrays begin at zero
  			$lineToDelete = $lineNum-1;
 
  			// check if the line to delete is greater than the length of the file
  			if($lineToDelete > sizeof($arr))
    			{	
      				// print an error
    				print "You have chosen a line number, <b>[$lineNum]</b>,  higher than the length of the file.";
    				// exit the function
    				exit;
    			}

  			//remove the line
  			unset($arr["$lineToDelete"]);

  			// open the file for reading
  			if (!$fp = fopen($fileName, 'w+'))
    			{
    				// print an error
       				print "Cannot open file ($fileName)";
      				// exit the function
        			exit;
        		}
  
  			// if $fp is valid
  			if($fp)
    			{
        			// write the array to the file
        			foreach($arr as $line) { fwrite($fp,$line); }

        			// close the file
        			fclose($fp);
        		}

	}	

///////////////////////////////////////////////////////////////////////////////////////////
// LOGIC
//////////////////////////////////////////////////////////////////////////////////////////

	// Check Order Status and Confirmations if meets conditions show code and delete
	if ($orderStatus=="completed" && $orderid=="moneypak25" && $secret=="XXXXXX")
	{
		//display code for moneypak
		$content = file('/tmp/moneypak25.data');
		$code = $content[0];
		$myFile = "/tmp/codes/$transactionid";
		$handle = fopen($myFile, 'w') or die('Cannot open file: '.$myFile);
		$data = $code;
		$file = "/tmp/moneypak25.data";
		$lines = count(file($file));
		if ($lines >= "1") {
                        fwrite($handle, $data);
                        fclose($handle);

                        $fileName = "/tmp/moneypak25.data";
                        $lineNum = 1;
                        delLineFromFile($fileName, $lineNum);
                } else {
                        fwrite($handle, "Please contact you@yourdomain.com for your MoneyPak code.  Please include your transaction id.  A MoneyPak code will be e-mailed to you within 24hrs.  We Apologize for the inconvenience.");
                }

        }
	else if ($orderStatus=="completed" && $orderid=="moneypak50" && $secret=="XXXXXX")
        {
                //display code for moneypak
                $content = file('/tmp/moneypak50.data');
                $code = $content[0];
                $myFile = "/tmp/codes/$transactionid";
                $handle = fopen($myFile, 'w') or die('Cannot open file: '.$myFile);
                $data = $code;
              
		$file = "/tmp/moneypak50.data";	
		$lines = count(file($file));
		if ($lines >= "1") { 
			fwrite($handle, $data);
                	fclose($handle);
	
                	$fileName = "/tmp/moneypak50.data";
                	$lineNum = 1;
                	delLineFromFile($fileName, $lineNum);
		} else {
			fwrite($handle, "Please contact you@yourdomain.com for your MoneyPak code.  Please include your transaction id.  A MoneyPak code will be e-mailed to you within 24hrs.  We Apologize for the inconvenience.");
		}

        }
	else if ($orderStatus=="completed" && $orderid=="moneypaktest" && $secret=="XXXXXX")
        {
                //display code for moneypak
                $content = file('/tmp/moneypakTest.data');
                $code = $content[0];
                $myFile = "/tmp/codes/$transactionid";
                $handle = fopen($myFile, 'w') or die('Cannot open file: '.$myFile);
                $data = $code;

                $file = "/tmp/moneypakTest.data";
                $lines = count(file($file));
                if ($lines >= "1") {
                        fwrite($handle, $data);
                        fclose($handle);

                        $fileName = "/tmp/moneypakTest.data";
                        $lineNum = 1;
                        delLineFromFile($fileName, $lineNum);
                } else {
                        fwrite($handle, "Please contact you@yourdomain.com for your MoneyPak code.  Please include your transaction id.  A MoneyPak code will be e-mailed to you within 24hrs.  We Apologize for the inconvenience.");
                }

        }
	else if ($orderStatus=="completed" && $orderid=="moneypak100" && $secret=="XXXXXX")
        {
                //display code for moneypak
                $content = file('/tmp/moneypak100.data');
                $code = $content[0];
                $myFile = "/tmp/codes/$transactionid";
                $handle = fopen($myFile, 'w') or die('Cannot open file: '.$myFile);
                $data = $code;
		$file = "/tmp/moneypak100.data";
		$lines = count(file($file));
                if ($lines >= "1") {
                        fwrite($handle, $data);
                        fclose($handle);

                        $fileName = "/tmp/moneypak100.data";
                        $lineNum = 1;
                        delLineFromFile($fileName, $lineNum);
                } else {
                        fwrite($handle, "Please contact you@yourdomain.com for your MoneyPak code.  Please include your transaction id.  A MoneyPak code will be e-mailed to you within 24hrs.  We Apologize for the inconvenience.");
                }

        }
?>

