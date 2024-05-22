<?php

function compatibility($listeUser,$listeContent,$compatibilityNumberWord = 60)
    {
        $table = array(
            ' '=>'', 'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj', 'Ž'=>'Z', 'ž'=>'z', 'C'=>'C', 'c'=>'c',
            'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O',
            'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss',
            'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e',
            'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o',
            'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b',
            'ÿ'=>'y', 'R'=>'R', 'r'=>'r', "'"=>'-', '"'=>'-'
        );
        
        $compatibilityWord = 0;
        $compatibilityGen = 0;


        for($lengthContent = 0; $lengthContent < COUNT($listeContent); $lengthContent++)
        {
            for($lengthUser = 0; $lengthUser < COUNT($listeUser); $lengthUser++)
            {
                $add1 = 0;
                $add2 = 0;

                $checklisteContent = strtolower(strtr($listeContent[$lengthContent],$table));
                $checklisteUser = strtolower(strtr($listeUser[$lengthUser],$table));

                for($wordlength = 0; $wordlength+$add1 < strlen($checklisteContent) AND $wordlength+$add2 < strlen($checklisteUser); $wordlength++)
                {

                    if($checklisteContent[$wordlength+$add1] == $checklisteUser[$wordlength+$add2])
                    {
                        $compatibilityWord++;
                    }
                    else if($wordlength+$add1+1 < strlen($checklisteContent) AND $wordlength+$add2+1 < strlen($checklisteUser))
                    {
                        if($checklisteContent[$wordlength+$add1+1] == $checklisteUser[$wordlength])
                        {
                            $compatibilityWord++;
                            if($wordlength+$add1+1 < strlen($checklisteContent))
                            {
                                $add1++;
                            }
                        }
                        else if($checklisteContent[$wordlength] == $checklisteUser[$wordlength+$add2+1])
                        {
                            $compatibilityWord++;
                            if($wordlength+$add2+1 < strlen($checklisteUser))
                            {
                                $add2++;
                            }
                        }
                    }
                    else if($wordlength+$add1-1 >= 0 AND $wordlength+$add2-1 >= 0)
                    {

                        if($checklisteContent[$wordlength+$add1-1] == $checklisteUser[$wordlength+$add2])  //
                        {
                            $compatibilityWord++;
                            if($wordlength-$add1-1 >= 0)
                            {
                                $add1--;
                            }
                        }
                        else if($checklisteContent[$wordlength+$add1] == $checklisteUser[$wordlength+$add2-1])   // //
                        {
                            $compatibilityWord++;
                            if($wordlength-$add2-1 >= 0)
                            {
                                $add2--;
                            }
                        }
                    }
                }
                if((($compatibilityWord/strlen($checklisteContent))*100) >= $compatibilityNumberWord)
                {
                    $compatibilityGen++;
                }
                $compatibilityWord = 0;
            }
        }
        return (($compatibilityGen/COUNT($listeUser))*100);
    };