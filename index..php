$tuitionFee=16000;


$commission = $tuitionFee < 7000 ? 'Invalid' : ($tuitionFee < 10000 ? 0.15 * $tuitionFee . " is the commission of tuition fee"  : ($tuitionFee < 20000 ? 0.2 * $tuitionFee . " is the commission of tuition fee" : 0.25 * $tuitionFee));  
echo $commission;


