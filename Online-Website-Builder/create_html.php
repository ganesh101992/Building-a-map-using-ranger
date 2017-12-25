<?php

session_start();
$json_text_data=$_POST['json_data'];
$json_data=json_decode($json_text_data,true);


$myfile = fopen("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name']."/Your_code_Open_in_browser.html", "w+");
$txt='<html><body style="background-attachment:fixed;';
fwrite($myfile, $txt);
$txt='background-image:'.$json_data['backgroundimage'].';';
fwrite($myfile, $txt);
$txt='background-color:'.$json_data['backgroundcolor'].';';
fwrite($myfile, $txt);
$txt='background-size:'.$json_data['backgroundsize'].';height:'.$json_data['height'].';">';
fwrite($myfile, $txt);

$txt=$json_data['data'];
fwrite($myfile, $txt);

$txt='<script> var tab_count='.$json_data['tab_count'].'; </script>';
fwrite($myfile, $txt);
$txt='<script src="tab.js"></script> </body></html>';
fwrite($myfile, $txt);

fclose($myfile);




//------ create a zip file

    $files = scandir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name']);
    
	unlink("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'.zip');
    $zip = new ZipArchive;
    if ($zip->open("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'.zip',  ZipArchive::CREATE)) 
	{
        for($i=0;$i<count($files);$i++)
        {
            if((count(explode('.',$files[$i])))==1)
            {			
        	   $zip->addEmptyDir($files[$i]);
        	   $dir_files=scandir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i]);	   
        	   for($j=0;$j<count($dir_files);$j++)
        	   {
			        if(!($dir_files[$j]=='.' || $dir_files[$j]=='..'))
					{
        	            $zip->addFile("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i].'/'.$dir_files[$j],$files[$i].'/'.$dir_files[$j]);
					}
           	   }
        	}
        	else if(!($files[$i]=='.' || $files[$i]=='..'))
        	     {
                    $zip->addFile("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i],$files[$i]);
        	     }
        }
        $zip->close();
		
        for($i=0;$i<count($files);$i++)
        {
            if((count(explode('.',$files[$i])))==1)
            {				   
        	   $dir_files=scandir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i]);
        	   for($j=0;$j<count($dir_files);$j++)
        	   {
			        if(!($dir_files[$j]=='.' || $dir_files[$j]=='..'))
					{
                        unlink("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i].'/'.$dir_files[$j]);	 
					}						
           	   }
        	   rmdir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i].'/');
        	}
        	else if(!($files[$i]=='.' || $files[$i]=='..'))
        	        unlink("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i]);
        }
		rmdir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/');
	}
		

	        $cond=0;
	        $myfile=fopen("Projects/".$_SESSION['email_id']."/download_project.txt",'r');
            $str=fread($myfile,filesize("Projects/".$_SESSION['email_id']."/download_project.txt"));
	        fclose($myfile);
	        $name=explode(PHP_EOL,$str);
	        for($i=0;$i<count($name);$i++)
	        {
	            if($name[$i]!='')
	        	{
	        	    $var=strcmp($name[$i],$_SESSION['project_name']);
	        	    if($var==0)
	        		{
	        		     $cond=1;
	        			 break;
	        		}
	        	}
	        }
	        if($cond==0)
	        {
	            $myfile=fopen("Projects/".$_SESSION['email_id']."/download_project.txt",'a');
                fwrite($myfile, $_SESSION['project_name'].PHP_EOL);
	            fclose($myfile);
	        }

$_SESSION['temp_project']=$_SESSION['project_name'];
$_SESSION['project_name']='';

?>