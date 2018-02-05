<?php
//This function is all about to return the elelment list which are used to
//sum the no between 1 and 16000.

function subset_sum($arr,$target,$list = array())
{
     $arr_levels=array('1'=>"1",'2'=>"2",'4'=>"3",'8'=>"4",'16'=>"5",'32'=>"6",'64'=>"7",'128'=>"8",
                                                '256'=>"9",'512'=>"10",'1024'=>"11",'2048'=>"12",'4096'=>"13",'8192'=>"14",'16384'=>"15");
        if($target<0)
                return;
        if($target!=0 && count($arr)==0)
                return;
        if($target!=0)
        {
                foreach($arr as $key=>$val)
                {
                        unset($arr[$key]);
                        subset_sum($arr,$target-$val,array_merge($list,array($val)));
                }
        }
        else
        {
            //echo count($list);
            $all_levels=array();
            for($i=0;$i<count($list);$i++)
            {
                
                $level=$arr_levels[$list[$i]];
                $key='level'.$level;
                $all_levels[$key]=$level;
                //array_push($all_levels, $level);
                //echo $list[$i];
            }
            echo json_encode($all_levels);
          
        }
                

}