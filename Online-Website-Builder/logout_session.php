<?php

session_start();

//----- check if previous project is closed
if($_SESSION['project_name']!='')
{
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
                        unlink("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i].'/'.$dir_files[$j]);	  
           	   }
        	   rmdir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i].'/');
        	}
        	else if(!($files[$i]=='.' || $files[$i]=='..'))
        	        unlink("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/'.$files[$i]);
        }
	    rmdir("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].'/');
    }
	
	        //$cond=0;
	        //$myfile=fopen("Projects/".$_SESSION['email_id']."/download_project.txt",'r');
            //$str=fread($myfile,filesize("Projects/".$_SESSION['email_id']."/download_project.txt"));
	        //fclose($myfile);
	        //$name=explode(PHP_EOL,$str);
	        //for($i=0;$i<count($name);$i++)
	        //{
	        //    if($name[$i]!='')
	        //	{
	        //	    $var=strcmp($name[$i],$_SESSION['project_name']);
	        //	    if($var==0)
	        //		{
	        //		     $cond=1;
	        //			 break;
	        //		}
	        //	}
	        //}
	        //if($cond==0)
	        //{
	        //    $myfile=fopen("Projects/".$_SESSION['email_id']."/download_project.txt",'a');
            //    fwrite($myfile, $_SESSION['project_name'].PHP_EOL);
	        //    fclose($myfile);
	        //}
	
}

session_destroy();

?>