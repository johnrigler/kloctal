<?php
# Klocktal example
# Copyright 2018, Secret Beach Solutions
# Apache 2.0 License
# John Rigler

        // initialize the kloctal number set


        $kloctal = array( '00'=>'',
                          11=>'a',12=>'b',13=>'c',14=>'d',15=>'e',16=>'f',17=>'g',18=>'h',
                          21=>'i',22=>'j',23=>'k',24=>'l',25=>'m',26=>'n',27=>'o',28=>'p',
                          31=>'q',32=>'r',33=>'s',34=>'t',35=>'u',36=>'v',37=>'w',38=>'x',
                          41=>'y',42=>'z',43=>'.',44=>' ',45=>'(',46=>')',47=>'{',48=>'}');


        $message = array();

        $ch = curl_init();
        $temp = array();
        $account = "t1bhnasipQLVBE4errZP6HQEAvVpiBfp7e5";

        curl_setopt($ch, CURLOPT_URL,"https://api.zcha.in/v2/mainnet/accounts/$account/recv?limit=5&offset=0");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = json_decode(curl_exec($ch));
        foreach($output as $trans)
           {
           $object = $trans->vout;
           $objzero = $object[0];
           $temp[] = $objzero->valueZat;
          }


        $reverse_array = array_reverse($temp);
        $control = array_shift($reverse_array);
        echo "x $control\n";
        foreach ($reverse_array as $set)
           {
           $first = substr($set,0,2);
           $second = substr($set,2,2);
           echo "$kloctal[$first]$kloctal[$second]";
           }
           echo "\n";
        // close curl resource to free up system resources
        curl_close($ch);
?>
