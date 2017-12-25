<?php

session_start();
$text=$_GET['name'];

include('database.php');
$conn = new PDO("$dbtype:host=$servername;dbname=$dbname", $dbusername, $dbpassword);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


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


$_SESSION['project_name']=$text;
   
   
	//------- $cond is {0 for project not present in local(new project)},{1 for project is present in local} & {2 for project is present in global}
    $cond=0;  
	

	//----- check the local project list 'project_name.txt'
	$myfile=fopen("Projects/".$_SESSION['email_id']."/project_name.txt",'r');
    $str=fread($myfile,filesize("Projects/".$_SESSION['email_id']."/project_name.txt"));
	fclose($myfile);
	$name=explode(PHP_EOL,$str);
	for($i=0;$i<count($name);$i++)
	{
	    if($name[$i]!='')
		{
		    $var=strcmp($name[$i],$text);
		    if($var==0)
			{
			     $cond=1;
				 break;
			}
		}
	}

	//----- check the global project list from the 'shared_project' table
    if($cond==0)
	{
        $sql = "Select project_name from shared_project";
        foreach($conn->query($sql) as $row) 
        {
            if($row[0]==$text)
        	{
                $cond=2;
        		break;
        	}
        }
	}
	
	
	if($cond==0)
	{
	    $myfile=fopen("Projects/".$_SESSION['email_id']."/project_name.txt",'a');
        fwrite($myfile, $text.PHP_EOL);
	    fclose($myfile);
		
		mkdir("Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name']);
		mkdir("Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name']."/backgrounds");
		mkdir("Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name']."/contents");
		copy('tab_org.js',"Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name'].'/tab.js');
		copy('1.gif',"Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name'].'/contents/1.gif');
	}
	elseif($cond==1)
	     {
		     mkdir("Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name']);
             $zip = new ZipArchive;
             $zip->open("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name'].".zip");
             $zip->extractTo("Projects/".$_SESSION['email_id']."/".$_SESSION['project_name']."/");
             $zip->close();
			 
             
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
					    for($j=$i;$j<(count($name)-1);$j++)
						{ 
						    $name[$j]=$name[$j+1];
						}
	                    $myfile=fopen("Projects/".$_SESSION['email_id']."/download_project.txt",'w');
						for($i=0;$i<count($name);$i++)
						{
						    if($name[$i]!='')
                                fwrite($myfile, $name[$i].PHP_EOL);
						}
	                    fclose($myfile);
	        			break;
	        		}
	        	}
	        }
			 
			 copy('1.gif',"Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name'].'/contents/1.gif');
	     }
		 else
		 {
             $pro=explode('_',$_SESSION['project_name']);
		
	         copy("Projects/".$_SESSION['project_name'].".zip","Projects/".$_SESSION['email_id']."/".$pro[0].'_'.$_SESSION['email_id'].".zip");
             copy("Projects/".$_SESSION['project_name'].".json","Projects/".$_SESSION['email_id']."/".$pro[0].'_'.$_SESSION['email_id'].".json");
		 
		     mkdir("Projects/".$_SESSION["email_id"]."/".$pro[0].'_'.$_SESSION['email_id']);
             $zip = new ZipArchive;
             $zip->open("Projects/".$_SESSION['email_id']."/".$pro[0].'_'.$_SESSION['email_id'].".zip");
             $zip->extractTo("Projects/".$_SESSION['email_id']."/".$pro[0].'_'.$_SESSION['email_id']."/");
             $zip->close();
             
			 $cond=0;
	         $myfile=fopen("Projects/".$_SESSION['email_id']."/project_name.txt",'r');
             $str=fread($myfile,filesize("Projects/".$_SESSION['email_id']."/project_name.txt"));
	         fclose($myfile);
	         $name=explode(PHP_EOL,$str);
	         for($i=0;$i<count($name);$i++)
	         {
	             if($name[$i]!='')
	         	{
	         	    $var=strcmp($name[$i],$pro[0].'_'.$_SESSION['email_id']);
	         	    if($var==0)
	         		{
					    $cond=1;
	         			break;
	         		}
	         	}
	         }
	         if($cond==0)
	         {
	             $myfile=fopen("Projects/".$_SESSION['email_id']."/project_name.txt",'a');
                 fwrite($myfile, $pro[0].'_'.$_SESSION['email_id'].PHP_EOL);
	             fclose($myfile);
	         }
			 
             copy('1.gif',"Projects/".$_SESSION["email_id"]."/".$_SESSION['project_name'].'/contents/1.gif');
			 
             $_SESSION['project_name']=$pro[0].'_'.$_SESSION['email_id'];
		 }
	

?>