<?php
$version = '';
if(isset($_REQUEST['version']))
{
    $version = $_REQUEST['version'];
}
$v = splitVersionString($version);
$ropbinPayloadFileName = getFilenameFromVersion($v);
header('Content-Length: 0');
header('Location: http://smealum.github.io/ninjhax2/JL1Xf2KFVm/r/' . $ropbinPayloadFileName . '.bin');
exit;
//////////////////////////////////////////////////////
function getRegion($v)
{
    if($v[5]=="USA")
    {
        return "U";
    }
    else if($v[5]=="EUR")
    {
        return "E";
    }
    else if($v[5]=="JPN")
    {
        return "J";
    }
}
function getFirmVersion($v)
{
    if($v[0]=="NEW")
    {
        return "N3DS";
    }else{
        if($v[1]<5)
        {
            return "PRE5";
        }else{
            return "POST5";
        }
    }
}
function getMenuVersion($v)
{
    if($v[1]==9)
    {
        if ($v[2]==0 || $v[2]==1)
        {
            return "11272";
        }
        else if ($v[2]==2)
        {
            return "12288";
        }
        else if ($v[2]==3)
        {
            return "13330";
        }
        else if ($v[2]==4)
        {
            return "14336";
        }
        else if ($v[2]==5)
        {
            return "15360";
        }
        else if ($v[2]==6)
        {
            return "16404";
        }
        else if ($v[2]==7)
        {
            return "17415";
        }
        else if ($v[2]==9 && $v[5]=="USA")
        {
            return "20480_usa";
        }
        else if ($v[2]>=8)
        {
            return "19456";
        }
    }else if($v[1]==10)
    {
        if($v[2]==0)
        {
            if ($v[5]=="USA")
            {
                return "20480_usa";
            }
            else
            {
                return "19456";
            }
        }else if($v[2]==1)
        {
            if ($v[5]=="USA")
            {
                return "21504_usa";
            }
            else
            {
                return "20480";
            }
        }else if($v[2]==2)
        {
            if ($v[5]=="USA")
            {
                return "22528_usa";
            }
            else
            {
                return "21504";
            }
        }else if($v[2]==3)
        {
            if ($v[5]=="USA")
            {
                return "23552_usa";
            }
            else
            {
                return "22528";
            }
        }else if($v[2]==4 || $v[2]==5)
        {
            if ($v[5]=="USA")
            {
                return "20480";
            }
        }else if($v[2]==2)
        {
            if ($v[5]=="USA")
            {
                return "22528_usa";
            }
            else
            {
                return "21504";
            }
        }else if($v[2]==3)
        {
            if ($v[5]=="USA")
            {
                return "23552_usa";
            }
            else
            {
                return "22528";
            }
        }else if($v[2]==4 || $v[2]==5)
        {
            if ($v[5]=="USA")
            {
                return "24578_usa";
            }
            else
            {
                return "23554";
            }
        }else if($v[2]>=6)
        {
            if ($v[5]=="USA")
            {
                return "25600_usa";
            }
            else
            {
                return "24576";
            }
        }
    }else if($v[1]==11)
    {
        if($v[2]==0)
        {
            if ($v[5]=="USA")
            {
                return "25600_usa";
            }
            else
            {
                return "24576";
            }
        }
    }
}
function getMsetVersion($v)
{
    if($v[1] == 9 && $v[2] < 6)
    {
        return "8203";
    }
    else
    {
        return "9221";
    }
}
function getFilenameFromVersion($v)
{
    return getFirmVersion($v)."_".getRegion($v)."_".getMenuVersion($v)."_".getMsetVersion($v);
}
function splitVersionString($version)
{
    $v = explode('-', $version);
    return $v;
}
?>
