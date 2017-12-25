<?php

session_start();

?>

<html>
<head>

<title>Woyo Online Editor</title>
<link rel="shortcut icon" href="logo.png" type="image/x-icon"/>
<meta name="Description" content="Design your own website online with Woyo website builder/developer for free - just drag, drop & edit to create your website using website creator, it doesn't get any simpler." />
<meta name="keywords" content="free,Web Developer,Create website,HTML editor,Website builder,online,web editor,HTML,build website, website creator, how to make a website, make your own website, create a website, creating a website, do it yourself website builder">

  
<link rel="stylesheet" type="text/css" href="woyo_style.css">
  
<script src="jquery.min.js"></script>
<script src="jquery-ui.min.js"></script>

</head>
<body oncontextmenu="return false;">

<H2 style="position:absolute;left:300px;color:red;">
<?php
   $viewer = getenv( "HTTP_USER_AGENT" );
   if( preg_match( "/MSIE/i", "$viewer" ) )
   {
      $browser = "Internet Explorer";
      echo("For all the functionality use a browser from this list : Google Chrome");
   }
?>
</h2>

    <div id="logo">
	    
		<!--   For valueof.site
        <div style="position:absolute;left:1000px;max-width:200px; font-size: 12px; word-wrap: break-word; text-align:center; background-color: #ffffff; border: 1px solid #dddddd; -webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.05); box-shadow: 0 1px 1px rgba(0,0,0,0.05);">
          <div style="color: #333333; background-color: #f5f5f5; padding:5px; border-bottom: 1px solid #dddddd;">
            <a style="color: #008cba; text-decoration: underline;" href="http://valueof.site/en/cost/woyo.in" target="_blank">
              woyo.in    </a>
          </div>
          <div style="padding:5px; color: #222222; line-height: 1.5;">
            Estimated worth<br/>
            &#8226;&nbsp;<span style="font-size: 14px"><strong>&#36; 3.800,78</strong></span>&nbsp;&#8226;
          </div>
        </div>
		-->
	
	
	    <a href="https://flippa.com/4590760-online-website-builder" target="_blank"> <img src="sale.png" style="position:absolute"> </a>
        <img src="logos/login_logo6.png" style="position:absolute;left:80px;top:70px;width:300px;height:136px;">
		
		<table style="position:relative;width:50%;left:50%;top:80%;">
		<tr>
		
		    <td width="26.5%">
			<span id="change_project" style="left:587px;top:213px;color: cornflowerblue; font-size: 30px; cursor: pointer;"> Change Project</span>
			</td>
			<td width="4.2%">
			<div id="s_h" style="width:1px;height:34px;left:777px;top:214px;background-color:cornflowerblue;"> </div>
			</td>
		    <td width="12.5%">
		    <span style="left: 820px; top: 213px; color: cornflowerblue; font-size: 30px; cursor: pointer;">Home</span>
		    </td>
			<td width="5%">
			<div style="width:1px;height:34px;background-color:cornflowerblue;"> </div>
			</td>
			<td width="30.3%">
			<span style="left: 948px; top: 213px; color: cornflowerblue; font-size: 30px; cursor: pointer;">Build your website</span>
			</td>
			<td width="4.5%">
			<div style="width:1px;height:34px;left:1160px;top:214px;background-color:cornflowerblue;"> </div>	
			</td>
			<td>
			<span id="logo_log_in" style="left: 1200px; top: 213px; color:cornflowerblue; font-size: 30px; cursor: pointer;">Log in</span>
			</td>
		
		<!--
		<span id="change_project" style="position:absolute;left:587px;top:213px;color: cornflowerblue; font-size: 30px; cursor: pointer;"> Change Project</span>
		
		<div id="s_h" style="width:1px;height:34px;position:absolute;left:777px;top:214px;background-color:cornflowerblue;"> </div>
		<span style="position: absolute; left: 820px; top: 213px; color: cornflowerblue; font-size: 30px; cursor: pointer;">Home</span>
		<div style="width:1px;height:34px;position:absolute;left:910px;top:214px;background-color:cornflowerblue;"> </div>
		<span style="position: absolute; left: 948px; top: 213px; color: cornflowerblue; font-size: 30px; cursor: pointer;">Build your website</span>
		<div style="width:1px;height:34px;position:absolute;left:1160px;top:214px;background-color:cornflowerblue;"> </div>	
		<span id="logo_log_in" style="position: absolute; left: 1200px; top: 213px; color:cornflowerblue; font-size: 30px; cursor: pointer;">Log in</span>
		-->
		
		</tr>
		</table>
		
    </div>
	
	<div id="home">
        <div id="center" style="position:relative;width:1100px;height:440px;overflow:hidden;">
           <img id="m1" src="m1.jpg" style="position:absolute;float:left;width:570px;height:360px;left:265px;top:45px;border:2px solid black;box-shadow:0px 0px 20px black;"/>
	       <img id="m2" src="m2.png" style="position:absolute;float:left;width:200px;height:125px;opacity:0.5;left:850px;top:187px;border:2px solid black;box-shadow:0px 0px 20px black;"/>
	       <img id="m3" src="m3.jpg" style="position:absolute;float:left;width:200px;height:125px;opacity:0.5;left:50px;top:187px;border:2px solid black;box-shadow:0px 0px 20px black;"/>
	       <img id="m4" src="m4.jpg" style="position:absolute;float:left;width:200px;height:125px;opacity:0.5;left:50px;top:187px;border:2px solid black;box-shadow:0px 0px 20px black;"/>
	       <img id="m5" src="m5.jpg" style="position:absolute;float:left;width:200px;height:125px;opacity:0.5;left:50px;top:187px;border:2px solid black;box-shadow:0px 0px 20px black;"/>
	       <img id="m6" src="m6.jpg" style="position:absolute;float:left;width:200px;height:125px;opacity:0.5;left:50px;top:187px;border:2px solid black;box-shadow:0px 0px 20px black;"/>
	       <img id="m7" src="m7.jpg" style="position:absolute;float:left;width:200px;height:125px;opacity:0.5;left:50px;top:187px;border:2px solid black;box-shadow:0px 0px 20px black;"/>
	    </div>
		
		<div style="position:absolute;left:1111px;width:239px;height:430px;background-color:gray;border-radius:5px;top:8px;">
		     <B style="position:relative;left:35px;top:5px;"> Download your Project:</b>
			 <div id="download_project" style="position:relative;width:219px;height:393px;left:10px;top:10px;background-color:white;overflow:auto;"></div>
		</div>
		<!-- <div id="change_project" style="position:absolute;height:28px;width:225px;background-color:cornflowerblue;border-radius:2px;left:1109px;top:485px;"> <B><span style="position:relative;top:3px;color:darkblue;left:51px;font-size:18px;">Change Project</span></b> </div> -->
	
	</div>
	
	
	    <div id="editor">
         
		</div>
		
	
	    <!-- These are circles to increase/decrease size -->
        <div id="mover1" style="position: absolute; width: 6px; height: 6px; border-radius: 3px; border: 1px solid rgb(211, 211, 211); background-color: rgb(135, 206, 235);" ondragend="text_move(this)" ondrag="text_move(this)"> </div>
        <div id="mover2" style="position: absolute; width: 6px; height: 6px; border-radius: 3px; border: 1px solid rgb(211, 211, 211); background-color: rgb(135, 206, 235);" ondragend="text_move(this)" ondrag="text_move(this)"> </div>
        <div id="mover3" style="position: absolute; width: 6px; height: 6px; border-radius: 3px; border: 1px solid rgb(211, 211, 211); background-color: rgb(135, 206, 235);" ondragend="text_move(this)" ondrag="text_move(this)"> </div>
        <div id="mover4" style="position: absolute; width: 6px; height: 6px; border-radius: 3px; border: 1px solid rgb(211, 211, 211); background-color: rgb(135, 206, 235);" ondragend="text_move(this)" ondrag="text_move(this)"> </div>
                                                                  
        <div id="mover5" style="position: absolute; width: 6px; height: 6px; border: 1px solid rgb(211, 211, 211);background-color: rgb(135, 206, 235);" ondragend="text_move(this)" ondrag="text_move(this)"> </div>

	
	
	
	
	<div id="html_edit">
	    <div id="tools_div">
	        <div id="tools" onmousewheel="scroller1()">
			    <img id="backgrd" onclick="createtags(this)" src="logos/backgrd.jpg">
				<img id="division" onclick="createtags(this)" src="logos/division.png">
		        <img id="text" onclick="createtags(this)" src="logos/text.png">
		    	<img id="image" onclick="image_handle=this;" src="logos/image.png">
		    	<img id="button" onclick="createtags(this)" src="logos/button.png">
				<img id="list" onclick="createtags(this)" src="logos/list.png">
				<img id="audio" onclick="audio_handle=this" src="logos/audio.png">
				<img id="video" onclick="video_handle=this" src="logos/video.png">
				<img id="tabs" onclick="createtags(this)" src="logos/tab.png" style="margin-bottom:7px;">
				
				<div id="scroller1"></div>
		        <div id="scrollBar1" ondrag="scroller_drag1()"></div>
		    </div>		
			
			
			<!-- Code for the Button & Link Element -->
            <div id="button_link_div">
            <div id="link_tab_button"> <span style="position:relative;left:10px;top:2px;">Links</span>  <div id="link_triangle_r"></div>  <div id="link_triangle_l"></div>  </div>
            
            <div id="button_tab_button">  <span style="position:relative;left:7px;top:2px;">Button</span> <div id="button_triangle_r"></div>  <div id="button_triangle_l"></div>  </div>
            
            
            <div id="link_tab">
               <p style="position:absolute;left:12px;top:6px;">Value:</p><input type="text" id="a_text" value="Link..." onchange="change_a_property(this,'text')">
               <p style="position:absolute;left:14px;top:42px;">Link:</p><input type="text" id="a_href" value="www.google.com" onchange="change_a_property(this,'href')">
               <p style="position:absolute;left:14px;top:78px;">Type:</p><select id="a_target" onchange="change_a_property(this,'target')">
              <option value="_self">Same Tab</option>
              <option value="_blank">New Tab or Window</option>
            </select>
            </div>
            
            <div id="button_tab">
                <p style="position:absolute;background-color:cornflowerblue;cursor:pointer;width:180px;height:25px;padding-left:70px;padding-top:2px;font-size:20px;top:5px;" onclick="">Text Button</p>
            	
            	<p style="position:absolute;background-color:cornflowerblue;cursor:pointer;width:186px;height:25px;padding-left:64px;padding-top:2px;font-size:20px;top:60px;" onclick="">Image Button</p>
            </div>
            
            <div id="button_button">
                 <p style="position:absolute;left:12px;top:6px;">Value:</p><input type="text" id="button_text" value="button" onchange="change_text_button_property(this,'text')">
            	 <p style="position:absolute;left:14px;top:42px;">Link:</p><input type="text" id="button_href" value="www.google.com" onchange="change_text_button_property(this,'href')">
            </div>
            <div id="button_image">
                 <p style="position:absolute;left:12px;top:6px;">Upload:</p> <form id="uploadForm_button"> <input type="file" id="button_img" name="button_img" onchange="change_img_button_property(this,'text')"> </form>
            	 <p style="position:absolute;left:14px;top:42px;">Link:</p><input type="text" id="button_img_href" value="www.google.com" onchange="change_img_button_property(this,'href')">
                 <p style="position:absolute;left:14px;top:78px;">Type:</p><select id="button_target" onchange="change_img_button_property(this,'target')">
              <option value="_self">Same Tab</option>
              <option value="_blank">New Tab or Window</option>
            </select>
			<div id="progress_out_button" style="position:absolute;top:0px;border:2px solid gray;width:98.7%;height:4px;border-radius:8px;"> <div id="progress_in_button" style="posititon:relative;background-color:limeGreen;width:0%;height:100%;border-radius:8px;"></div> </div>
            </div>
            			
            </div>
			
			
			
		    <div id="tools_style" onmousewheel="scroller()">
			    <div style="position:relative;background-color:cornflowerblue;border-top-left-radius:10px;border-top-right-radius:10px;width:100%;height:50px;margin-bottom:15px;">
		        <span style="position:relative;font-size:25px;margin-left:80px;top:20px;font-family:Agency FB;font-size:30px;">  Editor  </span>
				</div>
	
					
				<div id="tag">
				    <span>Background Image</span>
				</div>
				<div id="div_image" style="position:relative;height:100px;width:100%">
                    <div id="background">
					    <b style="position:relative;top:7px;">Upload the Image</b>
					</div>

					<div id="background">
					    <b style="position:relative;top:7px;">Background Images</b>
					</div>
				</div>

				<div id="tag">
				    <span>Background Color</span>
				</div>
				<div id="div_color" style="position:relative;height:205px;width:92.9%;margin-top:15px;border:8px solid gray; margin-bottom:30px;">
                    <div id="color" title="AliceBlue" style="background-color:AliceBlue;"></div>
                    <div id="color" title="AntiqueWhite" style="background-color:AntiqueWhite;"></div>
                    <div id="color" title="Aqua" style="background-color:Aqua;"></div>
                    <div id="color" title="Aquamarine" style="background-color:Aquamarine;"></div>
                    <div id="color" title="Azure" style="background-color:Azure;"></div>
                    <div id="color" title="Beige" style="background-color:Beige;"></div>
                    <div id="color" title="Bisque" style="background-color:Bisque;"></div>
                    <div id="color" title="Black" style="background-color:Black;"></div>
                    <div id="color" title="BlanchedAlmond" style="background-color:BlanchedAlmond;"></div>
                    <div id="color" title="Blue" style="background-color:Blue;"></div>
                    <div id="color" title="BlueViolet" style="background-color:BlueViolet;"></div>
                    <div id="color" title="Brown" style="background-color:Brown;"></div>
                    <div id="color" title="BurlyWood" style="background-color:BurlyWood;"></div>
                    <div id="color" title="CadetBlue" style="background-color:CadetBlue;"></div>
                    <div id="color" title="Chartreuse" style="background-color:Chartreuse;"></div>
                    <div id="color" title="Chocolate" style="background-color:Chocolate;"></div>
                    <div id="color" title="Coral" style="background-color:Coral;"></div>
                    <div id="color" title="CornflowerBlue" style="background-color:CornflowerBlue;"></div>
                    <div id="color" title="Cornsilk" style="background-color:Cornsilk;"></div>
                    <div id="color" title="Crimson" style="background-color:Crimson;"></div>
                    <div id="color" title="Cyan" style="background-color:Cyan;"></div>
                    <div id="color" title="DarkBlue" style="background-color:DarkBlue;"></div>
                    <div id="color" title="DarkCyan" style="background-color:DarkCyan;"></div>
                    <div id="color" title="DarkGoldenRod" style="background-color:DarkGoldenRod;"></div>
                    <div id="color" title="DarkGray" style="background-color:DarkGray;"></div>
                    <div id="color" title="DarkGreen" style="background-color:DarkGreen;"></div>
                    <div id="color" title="DarkKhaki" style="background-color:DarkKhaki;"></div>
                    <div id="color" title="DarkMagenta" style="background-color:DarkMagenta;"></div>
                    <div id="color" title="DarkOliveGreen" style="background-color:DarkOliveGreen;"></div>
                    <div id="color" title="DarkOrange" style="background-color:DarkOrange;"></div>
                    <div id="color" title="DarkOrchid" style="background-color:DarkOrchid;"></div>
                    <div id="color" title="DarkRed" style="background-color:DarkRed;"></div>
                    <div id="color" title="DarkSalmon" style="background-color:DarkSalmon;"></div>
                    <div id="color" title="DarkSeaGreen" style="background-color:DarkSeaGreen;"></div>
                    <div id="color" title="DarkSlateBlue" style="background-color:DarkSlateBlue;"></div>
                    <div id="color" title="DarkSlateGray" style="background-color:DarkSlateGray;"></div>
                    <div id="color" title="DarkTurquoise" style="background-color:DarkTurquoise;"></div>
                    <div id="color" title="DarkViolet" style="background-color:DarkViolet;"></div>
                    <div id="color" title="DeepPink" style="background-color:DeepPink;"></div>
                    <div id="color" title="DeepSkyBlue" style="background-color:DeepSkyBlue;"></div>
                    <div id="color" title="DimGray" style="background-color:DimGray;"></div>
                    <div id="color" title="DodgerBlue" style="background-color:DodgerBlue;"></div>
                    <div id="color" title="FireBrick" style="background-color:FireBrick;"></div>
                    <div id="color" title="FloralWhite" style="background-color:FloralWhite;"></div>
                    <div id="color" title="ForestGreen" style="background-color:ForestGreen;"></div>
                    <div id="color" title="Fuchsia" style="background-color:Fuchsia;"></div>
                    <div id="color" title="Gainsboro" style="background-color:Gainsboro;"></div>
                    <div id="color" title="GhostWhite" style="background-color:GhostWhite;"></div>
                    <div id="color" title="Gold" style="background-color:Gold;"></div>
                    <div id="color" title="GoldenRod" style="background-color:GoldenRod;"></div>
                    <div id="color" title="Gray" style="background-color:Gray;"></div>
                    <div id="color" title="Green" style="background-color:Green;"></div>
                    <div id="color" title="GreenYellow" style="background-color:GreenYellow;"></div>
                    <div id="color" title="HoneyDew" style="background-color:HoneyDew;"></div>
                    <div id="color" title="HotPink" style="background-color:HotPink;"></div>
                    <div id="color" title="IndianRed" style="background-color:IndianRed;"></div>
                    <div id="color" title="Indigo" style="background-color:Indigo;"></div>
                    <div id="color" title="Ivory" style="background-color:Ivory;"></div>
                    <div id="color" title="Khaki" style="background-color:Khaki;"></div>
                    <div id="color" title="Lavender" style="background-color:Lavender;"></div>
                    <div id="color" title="LavenderBlush" style="background-color:LavenderBlush;"></div>
                    <div id="color" title="LawnGreen" style="background-color:LawnGreen;"></div>
                    <div id="color" title="LemonChiffon" style="background-color:LemonChiffon;"></div>
                    <div id="color" title="LightBlue" style="background-color:LightBlue;"></div>
                    <div id="color" title="LightCoral" style="background-color:LightCoral;"></div>
                    <div id="color" title="LightCyan" style="background-color:LightCyan;"></div>
                    <div id="color" title="LightGoldenRodYellow" style="background-color:LightGoldenRodYellow;"></div>
                    <div id="color" title="LightGray" style="background-color:LightGray;"></div>
                    <div id="color" title="LightGreen" style="background-color:LightGreen;"></div>
                    <div id="color" title="LightPink" style="background-color:LightPink;"></div>
                    <div id="color" title="LightSalmon" style="background-color:LightSalmon;"></div>
                    <div id="color" title="LightSeaGreen" style="background-color:LightSeaGreen;"></div>
                    <div id="color" title="LightSkyBlue" style="background-color:LightSkyBlue;"></div>
                    <div id="color" title="LightSlateGray" style="background-color:LightSlateGray;"></div>
                    <div id="color" title="LightSteelBlue" style="background-color:LightSteelBlue;"></div>
                    <div id="color" title="LightYellow" style="background-color:LightYellow;"></div>
                    <div id="color" title="Lime" style="background-color:Lime;"></div>
                    <div id="color" title="LimeGreen" style="background-color:LimeGreen;"></div>
                    <div id="color" title="Linen" style="background-color:Linen;"></div>
                    <div id="color" title="Magenta " style="background-color:Magenta ;"></div>
                    <div id="color" title="Maroon" style="background-color:Maroon;"></div>
                    <div id="color" title="MediumAquaMarine" style="background-color:MediumAquaMarine;"></div>
                    <div id="color" title="MediumBlue" style="background-color:MediumBlue;"></div>
                    <div id="color" title="MediumOrchid" style="background-color:MediumOrchid;"></div>
                    <div id="color" title="MediumPurple" style="background-color:MediumPurple;"></div>
                    <div id="color" title="MediumSeaGreen" style="background-color:MediumSeaGreen;"></div>
                    <div id="color" title="MediumSlateBlue" style="background-color:MediumSlateBlue;"></div>
                    <div id="color" title="MediumSpringGreen" style="background-color:MediumSpringGreen;"></div>
                    <div id="color" title="MediumTurquoise" style="background-color:MediumTurquoise;"></div>
                    <div id="color" title="MediumVioletRed" style="background-color:MediumVioletRed;"></div>
                    <div id="color" title="MidnightBlue" style="background-color:MidnightBlue;"></div>
                    <div id="color" title="MintCream" style="background-color:MintCream;"></div>
                    <div id="color" title="MistyRose" style="background-color:MistyRose;"></div>
                    <div id="color" title="Moccasin" style="background-color:Moccasin;"></div>
                    <div id="color" title="NavajoWhite" style="background-color:NavajoWhite;"></div>
                    <div id="color" title="Navy" style="background-color:Navy;"></div>
                    <div id="color" title="OldLace" style="background-color:OldLace;"></div>
                    <div id="color" title="Olive" style="background-color:Olive;"></div>
                    <div id="color" title="OliveDrab" style="background-color:OliveDrab;"></div>
                    <div id="color" title="Orange" style="background-color:Orange;"></div>
                    <div id="color" title="OrangeRed" style="background-color:OrangeRed;"></div>
                    <div id="color" title="Orchid" style="background-color:Orchid;"></div>
                    <div id="color" title="PaleGoldenRod" style="background-color:PaleGoldenRod;"></div>
                    <div id="color" title="PaleGreen" style="background-color:PaleGreen;"></div>
                    <div id="color" title="PaleTurquoise" style="background-color:PaleTurquoise;"></div>
                    <div id="color" title="PaleVioletRed" style="background-color:PaleVioletRed;"></div>
                    <div id="color" title="PapayaWhip" style="background-color:PapayaWhip;"></div>
                    <div id="color" title="PeachPuff" style="background-color:PeachPuff;"></div>
                    <div id="color" title="Peru" style="background-color:Peru;"></div>
                    <div id="color" title="Pink" style="background-color:Pink;"></div>
                    <div id="color" title="Plum" style="background-color:Plum;"></div>
                    <div id="color" title="PowderBlue" style="background-color:PowderBlue;"></div>
                    <div id="color" title="Purple" style="background-color:Purple;"></div>
                    <div id="color" title="Red" style="background-color:Red;"></div>
                    <div id="color" title="RosyBrown" style="background-color:RosyBrown;"></div>
                    <div id="color" title="RoyalBlue" style="background-color:RoyalBlue;"></div>
                    <div id="color" title="SaddleBrown" style="background-color:SaddleBrown;"></div>
                    <div id="color" title="Salmon" style="background-color:Salmon;"></div>
                    <div id="color" title="SandyBrown" style="background-color:SandyBrown;"></div>
                    <div id="color" title="SeaGreen" style="background-color:SeaGreen;"></div>
                    <div id="color" title="SeaShell" style="background-color:SeaShell;"></div>
                    <div id="color" title="Sienna" style="background-color:Sienna;"></div>
                    <div id="color" title="Silver" style="background-color:Silver;"></div>
                    <div id="color" title="SkyBlue" style="background-color:SkyBlue;"></div>
                    <div id="color" title="SlateBlue" style="background-color:SlateBlue;"></div>
                    <div id="color" title="SlateGray" style="background-color:SlateGray;"></div>
                    <div id="color" title="Snow" style="background-color:Snow;"></div>
                    <div id="color" title="SpringGreen" style="background-color:SpringGreen;"></div>
                    <div id="color" title="SteelBlue" style="background-color:SteelBlue;"></div>
                    <div id="color" title="Tan" style="background-color:Tan;"></div>
                    <div id="color" title="Teal" style="background-color:Teal;"></div>
                    <div id="color" title="Thistle" style="background-color:Thistle;"></div>
                    <div id="color" title="Tomato" style="background-color:Tomato;"></div>
                    <div id="color" title="Turquoise" style="background-color:Turquoise;"></div>
                    <div id="color" title="Violet" style="background-color:Violet;"></div>
					<div id="color" title="Transparent" style="background-color:Transparent;"></div>
                    <div id="color" title="Wheat" style="background-color:Wheat;"></div>
                    <div id="color" title="White" style="background-color:White;"></div>
                    <div id="color" title="WhiteSmoke" style="background-color:WhiteSmoke;"></div>
                    <div id="color" title="Yellow" style="background-color:Yellow;"></div>
				</div>

				<div id="tag">
				    <span>Text Color</span>
				</div>
				<div id="text_color" style="position:relative;height:205px;width:92.9%;margin-top:15px;border:8px solid gray; margin-bottom:30px;">
                    <div id="color" title="AliceBlue" style="background-color:AliceBlue;"></div>
                    <div id="color" title="AntiqueWhite" style="background-color:AntiqueWhite;"></div>
                    <div id="color" title="Aqua" style="background-color:Aqua;"></div>
                    <div id="color" title="Aquamarine" style="background-color:Aquamarine;"></div>
                    <div id="color" title="Azure" style="background-color:Azure;"></div>
                    <div id="color" title="Beige" style="background-color:Beige;"></div>
                    <div id="color" title="Bisque" style="background-color:Bisque;"></div>
                    <div id="color" title="Black" style="background-color:Black;"></div>
                    <div id="color" title="BlanchedAlmond" style="background-color:BlanchedAlmond;"></div>
                    <div id="color" title="Blue" style="background-color:Blue;"></div>
                    <div id="color" title="BlueViolet" style="background-color:BlueViolet;"></div>
                    <div id="color" title="Brown" style="background-color:Brown;"></div>
                    <div id="color" title="BurlyWood" style="background-color:BurlyWood;"></div>
                    <div id="color" title="CadetBlue" style="background-color:CadetBlue;"></div>
                    <div id="color" title="Chartreuse" style="background-color:Chartreuse;"></div>
                    <div id="color" title="Chocolate" style="background-color:Chocolate;"></div>
                    <div id="color" title="Coral" style="background-color:Coral;"></div>
                    <div id="color" title="CornflowerBlue" style="background-color:CornflowerBlue;"></div>
                    <div id="color" title="Cornsilk" style="background-color:Cornsilk;"></div>
                    <div id="color" title="Crimson" style="background-color:Crimson;"></div>
                    <div id="color" title="Cyan" style="background-color:Cyan;"></div>
                    <div id="color" title="DarkBlue" style="background-color:DarkBlue;"></div>
                    <div id="color" title="DarkCyan" style="background-color:DarkCyan;"></div>
                    <div id="color" title="DarkGoldenRod" style="background-color:DarkGoldenRod;"></div>
                    <div id="color" title="DarkGray" style="background-color:DarkGray;"></div>
                    <div id="color" title="DarkGreen" style="background-color:DarkGreen;"></div>
                    <div id="color" title="DarkKhaki" style="background-color:DarkKhaki;"></div>
                    <div id="color" title="DarkMagenta" style="background-color:DarkMagenta;"></div>
                    <div id="color" title="DarkOliveGreen" style="background-color:DarkOliveGreen;"></div>
                    <div id="color" title="DarkOrange" style="background-color:DarkOrange;"></div>
                    <div id="color" title="DarkOrchid" style="background-color:DarkOrchid;"></div>
                    <div id="color" title="DarkRed" style="background-color:DarkRed;"></div>
                    <div id="color" title="DarkSalmon" style="background-color:DarkSalmon;"></div>
                    <div id="color" title="DarkSeaGreen" style="background-color:DarkSeaGreen;"></div>
                    <div id="color" title="DarkSlateBlue" style="background-color:DarkSlateBlue;"></div>
                    <div id="color" title="DarkSlateGray" style="background-color:DarkSlateGray;"></div>
                    <div id="color" title="DarkTurquoise" style="background-color:DarkTurquoise;"></div>
                    <div id="color" title="DarkViolet" style="background-color:DarkViolet;"></div>
                    <div id="color" title="DeepPink" style="background-color:DeepPink;"></div>
                    <div id="color" title="DeepSkyBlue" style="background-color:DeepSkyBlue;"></div>
                    <div id="color" title="DimGray" style="background-color:DimGray;"></div>
                    <div id="color" title="DodgerBlue" style="background-color:DodgerBlue;"></div>
                    <div id="color" title="FireBrick" style="background-color:FireBrick;"></div>
                    <div id="color" title="FloralWhite" style="background-color:FloralWhite;"></div>
                    <div id="color" title="ForestGreen" style="background-color:ForestGreen;"></div>
                    <div id="color" title="Fuchsia" style="background-color:Fuchsia;"></div>
                    <div id="color" title="Gainsboro" style="background-color:Gainsboro;"></div>
                    <div id="color" title="GhostWhite" style="background-color:GhostWhite;"></div>
                    <div id="color" title="Gold" style="background-color:Gold;"></div>
                    <div id="color" title="GoldenRod" style="background-color:GoldenRod;"></div>
                    <div id="color" title="Gray" style="background-color:Gray;"></div>
                    <div id="color" title="Green" style="background-color:Green;"></div>
                    <div id="color" title="GreenYellow" style="background-color:GreenYellow;"></div>
                    <div id="color" title="HoneyDew" style="background-color:HoneyDew;"></div>
                    <div id="color" title="HotPink" style="background-color:HotPink;"></div>
                    <div id="color" title="IndianRed" style="background-color:IndianRed;"></div>
                    <div id="color" title="Indigo" style="background-color:Indigo;"></div>
                    <div id="color" title="Ivory" style="background-color:Ivory;"></div>
                    <div id="color" title="Khaki" style="background-color:Khaki;"></div>
                    <div id="color" title="Lavender" style="background-color:Lavender;"></div>
                    <div id="color" title="LavenderBlush" style="background-color:LavenderBlush;"></div>
                    <div id="color" title="LawnGreen" style="background-color:LawnGreen;"></div>
                    <div id="color" title="LemonChiffon" style="background-color:LemonChiffon;"></div>
                    <div id="color" title="LightBlue" style="background-color:LightBlue;"></div>
                    <div id="color" title="LightCoral" style="background-color:LightCoral;"></div>
                    <div id="color" title="LightCyan" style="background-color:LightCyan;"></div>
                    <div id="color" title="LightGoldenRodYellow" style="background-color:LightGoldenRodYellow;"></div>
                    <div id="color" title="LightGray" style="background-color:LightGray;"></div>
                    <div id="color" title="LightGreen" style="background-color:LightGreen;"></div>
                    <div id="color" title="LightPink" style="background-color:LightPink;"></div>
                    <div id="color" title="LightSalmon" style="background-color:LightSalmon;"></div>
                    <div id="color" title="LightSeaGreen" style="background-color:LightSeaGreen;"></div>
                    <div id="color" title="LightSkyBlue" style="background-color:LightSkyBlue;"></div>
                    <div id="color" title="LightSlateGray" style="background-color:LightSlateGray;"></div>
                    <div id="color" title="LightSteelBlue" style="background-color:LightSteelBlue;"></div>
                    <div id="color" title="LightYellow" style="background-color:LightYellow;"></div>
                    <div id="color" title="Lime" style="background-color:Lime;"></div>
                    <div id="color" title="LimeGreen" style="background-color:LimeGreen;"></div>
                    <div id="color" title="Linen" style="background-color:Linen;"></div>
                    <div id="color" title="Magenta " style="background-color:Magenta ;"></div>
                    <div id="color" title="Maroon" style="background-color:Maroon;"></div>
                    <div id="color" title="MediumAquaMarine" style="background-color:MediumAquaMarine;"></div>
                    <div id="color" title="MediumBlue" style="background-color:MediumBlue;"></div>
                    <div id="color" title="MediumOrchid" style="background-color:MediumOrchid;"></div>
                    <div id="color" title="MediumPurple" style="background-color:MediumPurple;"></div>
                    <div id="color" title="MediumSeaGreen" style="background-color:MediumSeaGreen;"></div>
                    <div id="color" title="MediumSlateBlue" style="background-color:MediumSlateBlue;"></div>
                    <div id="color" title="MediumSpringGreen" style="background-color:MediumSpringGreen;"></div>
                    <div id="color" title="MediumTurquoise" style="background-color:MediumTurquoise;"></div>
                    <div id="color" title="MediumVioletRed" style="background-color:MediumVioletRed;"></div>
                    <div id="color" title="MidnightBlue" style="background-color:MidnightBlue;"></div>
                    <div id="color" title="MintCream" style="background-color:MintCream;"></div>
                    <div id="color" title="MistyRose" style="background-color:MistyRose;"></div>
                    <div id="color" title="Moccasin" style="background-color:Moccasin;"></div>
                    <div id="color" title="NavajoWhite" style="background-color:NavajoWhite;"></div>
                    <div id="color" title="Navy" style="background-color:Navy;"></div>
                    <div id="color" title="OldLace" style="background-color:OldLace;"></div>
                    <div id="color" title="Olive" style="background-color:Olive;"></div>
                    <div id="color" title="OliveDrab" style="background-color:OliveDrab;"></div>
                    <div id="color" title="Orange" style="background-color:Orange;"></div>
                    <div id="color" title="OrangeRed" style="background-color:OrangeRed;"></div>
                    <div id="color" title="Orchid" style="background-color:Orchid;"></div>
                    <div id="color" title="PaleGoldenRod" style="background-color:PaleGoldenRod;"></div>
                    <div id="color" title="PaleGreen" style="background-color:PaleGreen;"></div>
                    <div id="color" title="PaleTurquoise" style="background-color:PaleTurquoise;"></div>
                    <div id="color" title="PaleVioletRed" style="background-color:PaleVioletRed;"></div>
                    <div id="color" title="PapayaWhip" style="background-color:PapayaWhip;"></div>
                    <div id="color" title="PeachPuff" style="background-color:PeachPuff;"></div>
                    <div id="color" title="Peru" style="background-color:Peru;"></div>
                    <div id="color" title="Pink" style="background-color:Pink;"></div>
                    <div id="color" title="Plum" style="background-color:Plum;"></div>
                    <div id="color" title="PowderBlue" style="background-color:PowderBlue;"></div>
                    <div id="color" title="Purple" style="background-color:Purple;"></div>
                    <div id="color" title="Red" style="background-color:Red;"></div>
                    <div id="color" title="RosyBrown" style="background-color:RosyBrown;"></div>
                    <div id="color" title="RoyalBlue" style="background-color:RoyalBlue;"></div>
                    <div id="color" title="SaddleBrown" style="background-color:SaddleBrown;"></div>
                    <div id="color" title="Salmon" style="background-color:Salmon;"></div>
                    <div id="color" title="SandyBrown" style="background-color:SandyBrown;"></div>
                    <div id="color" title="SeaGreen" style="background-color:SeaGreen;"></div>
                    <div id="color" title="SeaShell" style="background-color:SeaShell;"></div>
                    <div id="color" title="Sienna" style="background-color:Sienna;"></div>
                    <div id="color" title="Silver" style="background-color:Silver;"></div>
                    <div id="color" title="SkyBlue" style="background-color:SkyBlue;"></div>
                    <div id="color" title="SlateBlue" style="background-color:SlateBlue;"></div>
                    <div id="color" title="SlateGray" style="background-color:SlateGray;"></div>
                    <div id="color" title="Snow" style="background-color:Snow;"></div>
                    <div id="color" title="SpringGreen" style="background-color:SpringGreen;"></div>
                    <div id="color" title="SteelBlue" style="background-color:SteelBlue;"></div>
                    <div id="color" title="Tan" style="background-color:Tan;"></div>
                    <div id="color" title="Teal" style="background-color:Teal;"></div>
                    <div id="color" title="Thistle" style="background-color:Thistle;"></div>
                    <div id="color" title="Tomato" style="background-color:Tomato;"></div>
                    <div id="color" title="Turquoise" style="background-color:Turquoise;"></div>
                    <div id="color" title="Violet" style="background-color:Violet;"></div>
					<div id="color" title="Transparent" style="background-color:Transparent;"></div>
                    <div id="color" title="Wheat" style="background-color:Wheat;"></div>
                    <div id="color" title="White" style="background-color:White;"></div>
                    <div id="color" title="WhiteSmoke" style="background-color:WhiteSmoke;"></div>
                    <div id="color" title="Yellow" style="background-color:Yellow;"></div>
				</div>
				
				<div id="tag">
				    <span>Text Style/Size</span>
				</div>
				<div id="text_styling">
				<div style="position:relative;top:10px;left:15px;height:25px;margin-top:8px;color:deepskyblue;">
				    <b>Font : </b>
                    <select id="fbar" onchange="changefont()">
                      <option value="">Select a font</option>
                      <option value="Agency FB">Agency FB</option>
                      <option value="Antiqua">Antiqua</option>
                      <option value="Architect">Architect</option>
                      <option value="Arial">Arial</option>
                      <option value="BankFuturistic">BankFuturistic</option>
                      <option value="BankGothic">BankGothic</option>
                      <option value="Blackletter">Blackletter</option>
                      <option value="Blagovest">Blagovest</option>
                      <option value="Calibri">Calibri</option>
                      <option value="Comic Sans">Comic Sans</option>
                      <option value="Courier">Courier</option>
                      <option value="Cursive">Cursive</option>
                      <option value="Decorative">Decorative</option>
                      <option value="Fantasy">Fantasy</option>
                      <option value="Fraktur">Fraktur</option>
                      <option value="Frosty">Frosty</option>
                      <option value="Garamond">Garamond</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Helvetica">Helvetica</option>
                      <option value="Impact">Impact
                      </option><option value="Minion">Minion</option>
                      <option value="Modern">Modern</option>
                      <option value="Monospace">Monospace</option>
                      <option value="Palatino">Palatino</option>
                      <option value="Roman">Roman</option>
                      <option value="Sans-serif">Sans-serif</option>
                      <option value="Serif">Serif</option>
                      <option value="Script">Script</option>
                      <option value="Swiss">Swiss</option>
                      <option value="Times">Times</option>
                      <option value="Times New Roman">Times New Roman</option>
                      <option value="Tw Cen MT">Tw Cen MT</option>
                      <option value="Verdana">Verdana</option>
                    </select>
				</div>
				<div style="position:relative;top:15px;left:15px;height:25px;margin-bottom:40px;color:deepskyblue;">
				    <b>Size  : </b>
				    <div id="scale" style="left:45px;width:140px;top:-10px;"> <div id="text_size" ondrag="textsize(this)"></div> </div>
				</div>
				</div>
				
				
				
				<div id="tag">
				    <span>Text Shadow</span>
				</div>
				<div id="text_shadowing">
                <div style="position:relative;top:15px;left:15px;height:25px;color:deepskyblue;">				
				    <b>Blur Rate  : </b>
				    <div id="scale" style="left:83px;width:110px;top:-10px;"> <div id="text_blur_shadow_size" ondrag="changetextshadow(this)"></div> </div>
		        </div>
                <div style="position:relative;top:18px;left:15px;height:25px;color:deepskyblue;">				
				    <b>H-Size : </b>
				    <div id="scale" style="left:83px;width:110px;top:-10px;"> <div id="text_h_shadow_size" ondrag="changetextshadow(this)" style="left:51px"></div> </div>
		        </div>
                <div style="position:relative;top:20px;left:15px;height:25px;color:deepskyblue;">				
				    <b>V-Size : </b>
				    <div id="scale" style="left:83px;width:110px;top:-10px;"> <div id="text_v_shadow_size" ondrag="changetextshadow(this)" style="left:51px"></div> </div>
		        </div>
                <div style="position:relative;top:22px;left:15px;color:deepskyblue;">				
				    <b>Shadow Color  : </b>
		        </div>
				<div id="text_shadow_color" style="position:relative;height:205px;width:92.9%;margin-top:25px;border:8px solid gray; margin-bottom:30px;">
                    <div id="color" title="AliceBlue" style="background-color:AliceBlue;"></div>
                    <div id="color" title="AntiqueWhite" style="background-color:AntiqueWhite;"></div>
                    <div id="color" title="Aqua" style="background-color:Aqua;"></div>
                    <div id="color" title="Aquamarine" style="background-color:Aquamarine;"></div>
                    <div id="color" title="Azure" style="background-color:Azure;"></div>
                    <div id="color" title="Beige" style="background-color:Beige;"></div>
                    <div id="color" title="Bisque" style="background-color:Bisque;"></div>
                    <div id="color" title="Black" style="background-color:Black;"></div>
                    <div id="color" title="BlanchedAlmond" style="background-color:BlanchedAlmond;"></div>
                    <div id="color" title="Blue" style="background-color:Blue;"></div>
                    <div id="color" title="BlueViolet" style="background-color:BlueViolet;"></div>
                    <div id="color" title="Brown" style="background-color:Brown;"></div>
                    <div id="color" title="BurlyWood" style="background-color:BurlyWood;"></div>
                    <div id="color" title="CadetBlue" style="background-color:CadetBlue;"></div>
                    <div id="color" title="Chartreuse" style="background-color:Chartreuse;"></div>
                    <div id="color" title="Chocolate" style="background-color:Chocolate;"></div>
                    <div id="color" title="Coral" style="background-color:Coral;"></div>
                    <div id="color" title="CornflowerBlue" style="background-color:CornflowerBlue;"></div>
                    <div id="color" title="Cornsilk" style="background-color:Cornsilk;"></div>
                    <div id="color" title="Crimson" style="background-color:Crimson;"></div>
                    <div id="color" title="Cyan" style="background-color:Cyan;"></div>
                    <div id="color" title="DarkBlue" style="background-color:DarkBlue;"></div>
                    <div id="color" title="DarkCyan" style="background-color:DarkCyan;"></div>
                    <div id="color" title="DarkGoldenRod" style="background-color:DarkGoldenRod;"></div>
                    <div id="color" title="DarkGray" style="background-color:DarkGray;"></div>
                    <div id="color" title="DarkGreen" style="background-color:DarkGreen;"></div>
                    <div id="color" title="DarkKhaki" style="background-color:DarkKhaki;"></div>
                    <div id="color" title="DarkMagenta" style="background-color:DarkMagenta;"></div>
                    <div id="color" title="DarkOliveGreen" style="background-color:DarkOliveGreen;"></div>
                    <div id="color" title="DarkOrange" style="background-color:DarkOrange;"></div>
                    <div id="color" title="DarkOrchid" style="background-color:DarkOrchid;"></div>
                    <div id="color" title="DarkRed" style="background-color:DarkRed;"></div>
                    <div id="color" title="DarkSalmon" style="background-color:DarkSalmon;"></div>
                    <div id="color" title="DarkSeaGreen" style="background-color:DarkSeaGreen;"></div>
                    <div id="color" title="DarkSlateBlue" style="background-color:DarkSlateBlue;"></div>
                    <div id="color" title="DarkSlateGray" style="background-color:DarkSlateGray;"></div>
                    <div id="color" title="DarkTurquoise" style="background-color:DarkTurquoise;"></div>
                    <div id="color" title="DarkViolet" style="background-color:DarkViolet;"></div>
                    <div id="color" title="DeepPink" style="background-color:DeepPink;"></div>
                    <div id="color" title="DeepSkyBlue" style="background-color:DeepSkyBlue;"></div>
                    <div id="color" title="DimGray" style="background-color:DimGray;"></div>
                    <div id="color" title="DodgerBlue" style="background-color:DodgerBlue;"></div>
                    <div id="color" title="FireBrick" style="background-color:FireBrick;"></div>
                    <div id="color" title="FloralWhite" style="background-color:FloralWhite;"></div>
                    <div id="color" title="ForestGreen" style="background-color:ForestGreen;"></div>
                    <div id="color" title="Fuchsia" style="background-color:Fuchsia;"></div>
                    <div id="color" title="Gainsboro" style="background-color:Gainsboro;"></div>
                    <div id="color" title="GhostWhite" style="background-color:GhostWhite;"></div>
                    <div id="color" title="Gold" style="background-color:Gold;"></div>
                    <div id="color" title="GoldenRod" style="background-color:GoldenRod;"></div>
                    <div id="color" title="Gray" style="background-color:Gray;"></div>
                    <div id="color" title="Green" style="background-color:Green;"></div>
                    <div id="color" title="GreenYellow" style="background-color:GreenYellow;"></div>
                    <div id="color" title="HoneyDew" style="background-color:HoneyDew;"></div>
                    <div id="color" title="HotPink" style="background-color:HotPink;"></div>
                    <div id="color" title="IndianRed" style="background-color:IndianRed;"></div>
                    <div id="color" title="Indigo" style="background-color:Indigo;"></div>
                    <div id="color" title="Ivory" style="background-color:Ivory;"></div>
                    <div id="color" title="Khaki" style="background-color:Khaki;"></div>
                    <div id="color" title="Lavender" style="background-color:Lavender;"></div>
                    <div id="color" title="LavenderBlush" style="background-color:LavenderBlush;"></div>
                    <div id="color" title="LawnGreen" style="background-color:LawnGreen;"></div>
                    <div id="color" title="LemonChiffon" style="background-color:LemonChiffon;"></div>
                    <div id="color" title="LightBlue" style="background-color:LightBlue;"></div>
                    <div id="color" title="LightCoral" style="background-color:LightCoral;"></div>
                    <div id="color" title="LightCyan" style="background-color:LightCyan;"></div>
                    <div id="color" title="LightGoldenRodYellow" style="background-color:LightGoldenRodYellow;"></div>
                    <div id="color" title="LightGray" style="background-color:LightGray;"></div>
                    <div id="color" title="LightGreen" style="background-color:LightGreen;"></div>
                    <div id="color" title="LightPink" style="background-color:LightPink;"></div>
                    <div id="color" title="LightSalmon" style="background-color:LightSalmon;"></div>
                    <div id="color" title="LightSeaGreen" style="background-color:LightSeaGreen;"></div>
                    <div id="color" title="LightSkyBlue" style="background-color:LightSkyBlue;"></div>
                    <div id="color" title="LightSlateGray" style="background-color:LightSlateGray;"></div>
                    <div id="color" title="LightSteelBlue" style="background-color:LightSteelBlue;"></div>
                    <div id="color" title="LightYellow" style="background-color:LightYellow;"></div>
                    <div id="color" title="Lime" style="background-color:Lime;"></div>
                    <div id="color" title="LimeGreen" style="background-color:LimeGreen;"></div>
                    <div id="color" title="Linen" style="background-color:Linen;"></div>
                    <div id="color" title="Magenta " style="background-color:Magenta ;"></div>
                    <div id="color" title="Maroon" style="background-color:Maroon;"></div>
                    <div id="color" title="MediumAquaMarine" style="background-color:MediumAquaMarine;"></div>
                    <div id="color" title="MediumBlue" style="background-color:MediumBlue;"></div>
                    <div id="color" title="MediumOrchid" style="background-color:MediumOrchid;"></div>
                    <div id="color" title="MediumPurple" style="background-color:MediumPurple;"></div>
                    <div id="color" title="MediumSeaGreen" style="background-color:MediumSeaGreen;"></div>
                    <div id="color" title="MediumSlateBlue" style="background-color:MediumSlateBlue;"></div>
                    <div id="color" title="MediumSpringGreen" style="background-color:MediumSpringGreen;"></div>
                    <div id="color" title="MediumTurquoise" style="background-color:MediumTurquoise;"></div>
                    <div id="color" title="MediumVioletRed" style="background-color:MediumVioletRed;"></div>
                    <div id="color" title="MidnightBlue" style="background-color:MidnightBlue;"></div>
                    <div id="color" title="MintCream" style="background-color:MintCream;"></div>
                    <div id="color" title="MistyRose" style="background-color:MistyRose;"></div>
                    <div id="color" title="Moccasin" style="background-color:Moccasin;"></div>
                    <div id="color" title="NavajoWhite" style="background-color:NavajoWhite;"></div>
                    <div id="color" title="Navy" style="background-color:Navy;"></div>
                    <div id="color" title="OldLace" style="background-color:OldLace;"></div>
                    <div id="color" title="Olive" style="background-color:Olive;"></div>
                    <div id="color" title="OliveDrab" style="background-color:OliveDrab;"></div>
                    <div id="color" title="Orange" style="background-color:Orange;"></div>
                    <div id="color" title="OrangeRed" style="background-color:OrangeRed;"></div>
                    <div id="color" title="Orchid" style="background-color:Orchid;"></div>
                    <div id="color" title="PaleGoldenRod" style="background-color:PaleGoldenRod;"></div>
                    <div id="color" title="PaleGreen" style="background-color:PaleGreen;"></div>
                    <div id="color" title="PaleTurquoise" style="background-color:PaleTurquoise;"></div>
                    <div id="color" title="PaleVioletRed" style="background-color:PaleVioletRed;"></div>
                    <div id="color" title="PapayaWhip" style="background-color:PapayaWhip;"></div>
                    <div id="color" title="PeachPuff" style="background-color:PeachPuff;"></div>
                    <div id="color" title="Peru" style="background-color:Peru;"></div>
                    <div id="color" title="Pink" style="background-color:Pink;"></div>
                    <div id="color" title="Plum" style="background-color:Plum;"></div>
                    <div id="color" title="PowderBlue" style="background-color:PowderBlue;"></div>
                    <div id="color" title="Purple" style="background-color:Purple;"></div>
                    <div id="color" title="Red" style="background-color:Red;"></div>
                    <div id="color" title="RosyBrown" style="background-color:RosyBrown;"></div>
                    <div id="color" title="RoyalBlue" style="background-color:RoyalBlue;"></div>
                    <div id="color" title="SaddleBrown" style="background-color:SaddleBrown;"></div>
                    <div id="color" title="Salmon" style="background-color:Salmon;"></div>
                    <div id="color" title="SandyBrown" style="background-color:SandyBrown;"></div>
                    <div id="color" title="SeaGreen" style="background-color:SeaGreen;"></div>
                    <div id="color" title="SeaShell" style="background-color:SeaShell;"></div>
                    <div id="color" title="Sienna" style="background-color:Sienna;"></div>
                    <div id="color" title="Silver" style="background-color:Silver;"></div>
                    <div id="color" title="SkyBlue" style="background-color:SkyBlue;"></div>
                    <div id="color" title="SlateBlue" style="background-color:SlateBlue;"></div>
                    <div id="color" title="SlateGray" style="background-color:SlateGray;"></div>
                    <div id="color" title="Snow" style="background-color:Snow;"></div>
                    <div id="color" title="SpringGreen" style="background-color:SpringGreen;"></div>
                    <div id="color" title="SteelBlue" style="background-color:SteelBlue;"></div>
                    <div id="color" title="Tan" style="background-color:Tan;"></div>
                    <div id="color" title="Teal" style="background-color:Teal;"></div>
                    <div id="color" title="Thistle" style="background-color:Thistle;"></div>
                    <div id="color" title="Tomato" style="background-color:Tomato;"></div>
                    <div id="color" title="Turquoise" style="background-color:Turquoise;"></div>
                    <div id="color" title="Violet" style="background-color:Violet;"></div>
					<div id="color" title="Transparent" style="background-color:Transparent;"></div>
                    <div id="color" title="Wheat" style="background-color:Wheat;"></div>
                    <div id="color" title="White" style="background-color:White;"></div>
                    <div id="color" title="WhiteSmoke" style="background-color:WhiteSmoke;"></div>
                    <div id="color" title="Yellow" style="background-color:Yellow;"></div>
				</div>
				</div>
				
				
				<div id="tag">
				    <span>Border</span>
				</div>
				<div id="bordering">
                <div style="position:relative;top:5px;left:15px;height:25px;">
				    <select id="border" onchange="border(this)">
                      <option value="All borders">All borders</option>
                      <option>Left border</option>
                      <option>Right border</option>
                      <option>Top border</option>
                      <option>Bottom border</option>
                    </select>
				</div>
                <div style="position:relative;top:12px;left:12px;height:25px;">
                <table>
                <tr>                
                    <td> <b style="color:deepskyblue;">Style:</b> </td>
                    <td>
                    <select id="border_style" onchange="changeborderstyle(this)">
                      <option value="solid">solid</option>
                      <option>dotted</option>
                      <option>dashed</option>
                      <option>double</option>
                      <option>groove</option>
                      <option>ridge</option>
                      <option>inset</option>
                      <option>outset</option>
                    </select> 
                    </td>
                </tr>
                </table>
				</div>
                <div style="position:relative;top:16px;left:15px;height:25px;color:deepskyblue;">				
				    <b>Size  : </b>
				    <div id="scale" style="left:45px;width:143px;top:-10px;"> <div id="border_size" ondrag="changebordersize(this)"></div> </div>
		        </div>
                <div style="position:relative;top:19px;left:15px;color:deepskyblue;">				
				    <b>Color  : </b>
		        </div>
				<div id="border_color" style="position:relative;height:205px;width:92.9%;margin-top:20px;border:8px solid gray;">
                    <div id="color" title="AliceBlue" style="background-color:AliceBlue;"></div>
                    <div id="color" title="AntiqueWhite" style="background-color:AntiqueWhite;"></div>
                    <div id="color" title="Aqua" style="background-color:Aqua;"></div>
                    <div id="color" title="Aquamarine" style="background-color:Aquamarine;"></div>
                    <div id="color" title="Azure" style="background-color:Azure;"></div>
                    <div id="color" title="Beige" style="background-color:Beige;"></div>
                    <div id="color" title="Bisque" style="background-color:Bisque;"></div>
                    <div id="color" title="Black" style="background-color:Black;"></div>
                    <div id="color" title="BlanchedAlmond" style="background-color:BlanchedAlmond;"></div>
                    <div id="color" title="Blue" style="background-color:Blue;"></div>
                    <div id="color" title="BlueViolet" style="background-color:BlueViolet;"></div>
                    <div id="color" title="Brown" style="background-color:Brown;"></div>
                    <div id="color" title="BurlyWood" style="background-color:BurlyWood;"></div>
                    <div id="color" title="CadetBlue" style="background-color:CadetBlue;"></div>
                    <div id="color" title="Chartreuse" style="background-color:Chartreuse;"></div>
                    <div id="color" title="Chocolate" style="background-color:Chocolate;"></div>
                    <div id="color" title="Coral" style="background-color:Coral;"></div>
                    <div id="color" title="CornflowerBlue" style="background-color:CornflowerBlue;"></div>
                    <div id="color" title="Cornsilk" style="background-color:Cornsilk;"></div>
                    <div id="color" title="Crimson" style="background-color:Crimson;"></div>
                    <div id="color" title="Cyan" style="background-color:Cyan;"></div>
                    <div id="color" title="DarkBlue" style="background-color:DarkBlue;"></div>
                    <div id="color" title="DarkCyan" style="background-color:DarkCyan;"></div>
                    <div id="color" title="DarkGoldenRod" style="background-color:DarkGoldenRod;"></div>
                    <div id="color" title="DarkGray" style="background-color:DarkGray;"></div>
                    <div id="color" title="DarkGreen" style="background-color:DarkGreen;"></div>
                    <div id="color" title="DarkKhaki" style="background-color:DarkKhaki;"></div>
                    <div id="color" title="DarkMagenta" style="background-color:DarkMagenta;"></div>
                    <div id="color" title="DarkOliveGreen" style="background-color:DarkOliveGreen;"></div>
                    <div id="color" title="DarkOrange" style="background-color:DarkOrange;"></div>
                    <div id="color" title="DarkOrchid" style="background-color:DarkOrchid;"></div>
                    <div id="color" title="DarkRed" style="background-color:DarkRed;"></div>
                    <div id="color" title="DarkSalmon" style="background-color:DarkSalmon;"></div>
                    <div id="color" title="DarkSeaGreen" style="background-color:DarkSeaGreen;"></div>
                    <div id="color" title="DarkSlateBlue" style="background-color:DarkSlateBlue;"></div>
                    <div id="color" title="DarkSlateGray" style="background-color:DarkSlateGray;"></div>
                    <div id="color" title="DarkTurquoise" style="background-color:DarkTurquoise;"></div>
                    <div id="color" title="DarkViolet" style="background-color:DarkViolet;"></div>
                    <div id="color" title="DeepPink" style="background-color:DeepPink;"></div>
                    <div id="color" title="DeepSkyBlue" style="background-color:DeepSkyBlue;"></div>
                    <div id="color" title="DimGray" style="background-color:DimGray;"></div>
                    <div id="color" title="DodgerBlue" style="background-color:DodgerBlue;"></div>
                    <div id="color" title="FireBrick" style="background-color:FireBrick;"></div>
                    <div id="color" title="FloralWhite" style="background-color:FloralWhite;"></div>
                    <div id="color" title="ForestGreen" style="background-color:ForestGreen;"></div>
                    <div id="color" title="Fuchsia" style="background-color:Fuchsia;"></div>
                    <div id="color" title="Gainsboro" style="background-color:Gainsboro;"></div>
                    <div id="color" title="GhostWhite" style="background-color:GhostWhite;"></div>
                    <div id="color" title="Gold" style="background-color:Gold;"></div>
                    <div id="color" title="GoldenRod" style="background-color:GoldenRod;"></div>
                    <div id="color" title="Gray" style="background-color:Gray;"></div>
                    <div id="color" title="Green" style="background-color:Green;"></div>
                    <div id="color" title="GreenYellow" style="background-color:GreenYellow;"></div>
                    <div id="color" title="HoneyDew" style="background-color:HoneyDew;"></div>
                    <div id="color" title="HotPink" style="background-color:HotPink;"></div>
                    <div id="color" title="IndianRed" style="background-color:IndianRed;"></div>
                    <div id="color" title="Indigo" style="background-color:Indigo;"></div>
                    <div id="color" title="Ivory" style="background-color:Ivory;"></div>
                    <div id="color" title="Khaki" style="background-color:Khaki;"></div>
                    <div id="color" title="Lavender" style="background-color:Lavender;"></div>
                    <div id="color" title="LavenderBlush" style="background-color:LavenderBlush;"></div>
                    <div id="color" title="LawnGreen" style="background-color:LawnGreen;"></div>
                    <div id="color" title="LemonChiffon" style="background-color:LemonChiffon;"></div>
                    <div id="color" title="LightBlue" style="background-color:LightBlue;"></div>
                    <div id="color" title="LightCoral" style="background-color:LightCoral;"></div>
                    <div id="color" title="LightCyan" style="background-color:LightCyan;"></div>
                    <div id="color" title="LightGoldenRodYellow" style="background-color:LightGoldenRodYellow;"></div>
                    <div id="color" title="LightGray" style="background-color:LightGray;"></div>
                    <div id="color" title="LightGreen" style="background-color:LightGreen;"></div>
                    <div id="color" title="LightPink" style="background-color:LightPink;"></div>
                    <div id="color" title="LightSalmon" style="background-color:LightSalmon;"></div>
                    <div id="color" title="LightSeaGreen" style="background-color:LightSeaGreen;"></div>
                    <div id="color" title="LightSkyBlue" style="background-color:LightSkyBlue;"></div>
                    <div id="color" title="LightSlateGray" style="background-color:LightSlateGray;"></div>
                    <div id="color" title="LightSteelBlue" style="background-color:LightSteelBlue;"></div>
                    <div id="color" title="LightYellow" style="background-color:LightYellow;"></div>
                    <div id="color" title="Lime" style="background-color:Lime;"></div>
                    <div id="color" title="LimeGreen" style="background-color:LimeGreen;"></div>
                    <div id="color" title="Linen" style="background-color:Linen;"></div>
                    <div id="color" title="Magenta " style="background-color:Magenta ;"></div>
                    <div id="color" title="Maroon" style="background-color:Maroon;"></div>
                    <div id="color" title="MediumAquaMarine" style="background-color:MediumAquaMarine;"></div>
                    <div id="color" title="MediumBlue" style="background-color:MediumBlue;"></div>
                    <div id="color" title="MediumOrchid" style="background-color:MediumOrchid;"></div>
                    <div id="color" title="MediumPurple" style="background-color:MediumPurple;"></div>
                    <div id="color" title="MediumSeaGreen" style="background-color:MediumSeaGreen;"></div>
                    <div id="color" title="MediumSlateBlue" style="background-color:MediumSlateBlue;"></div>
                    <div id="color" title="MediumSpringGreen" style="background-color:MediumSpringGreen;"></div>
                    <div id="color" title="MediumTurquoise" style="background-color:MediumTurquoise;"></div>
                    <div id="color" title="MediumVioletRed" style="background-color:MediumVioletRed;"></div>
                    <div id="color" title="MidnightBlue" style="background-color:MidnightBlue;"></div>
                    <div id="color" title="MintCream" style="background-color:MintCream;"></div>
                    <div id="color" title="MistyRose" style="background-color:MistyRose;"></div>
                    <div id="color" title="Moccasin" style="background-color:Moccasin;"></div>
                    <div id="color" title="NavajoWhite" style="background-color:NavajoWhite;"></div>
                    <div id="color" title="Navy" style="background-color:Navy;"></div>
                    <div id="color" title="OldLace" style="background-color:OldLace;"></div>
                    <div id="color" title="Olive" style="background-color:Olive;"></div>
                    <div id="color" title="OliveDrab" style="background-color:OliveDrab;"></div>
                    <div id="color" title="Orange" style="background-color:Orange;"></div>
                    <div id="color" title="OrangeRed" style="background-color:OrangeRed;"></div>
                    <div id="color" title="Orchid" style="background-color:Orchid;"></div>
                    <div id="color" title="PaleGoldenRod" style="background-color:PaleGoldenRod;"></div>
                    <div id="color" title="PaleGreen" style="background-color:PaleGreen;"></div>
                    <div id="color" title="PaleTurquoise" style="background-color:PaleTurquoise;"></div>
                    <div id="color" title="PaleVioletRed" style="background-color:PaleVioletRed;"></div>
                    <div id="color" title="PapayaWhip" style="background-color:PapayaWhip;"></div>
                    <div id="color" title="PeachPuff" style="background-color:PeachPuff;"></div>
                    <div id="color" title="Peru" style="background-color:Peru;"></div>
                    <div id="color" title="Pink" style="background-color:Pink;"></div>
                    <div id="color" title="Plum" style="background-color:Plum;"></div>
                    <div id="color" title="PowderBlue" style="background-color:PowderBlue;"></div>
                    <div id="color" title="Purple" style="background-color:Purple;"></div>
                    <div id="color" title="Red" style="background-color:Red;"></div>
                    <div id="color" title="RosyBrown" style="background-color:RosyBrown;"></div>
                    <div id="color" title="RoyalBlue" style="background-color:RoyalBlue;"></div>
                    <div id="color" title="SaddleBrown" style="background-color:SaddleBrown;"></div>
                    <div id="color" title="Salmon" style="background-color:Salmon;"></div>
                    <div id="color" title="SandyBrown" style="background-color:SandyBrown;"></div>
                    <div id="color" title="SeaGreen" style="background-color:SeaGreen;"></div>
                    <div id="color" title="SeaShell" style="background-color:SeaShell;"></div>
                    <div id="color" title="Sienna" style="background-color:Sienna;"></div>
                    <div id="color" title="Silver" style="background-color:Silver;"></div>
                    <div id="color" title="SkyBlue" style="background-color:SkyBlue;"></div>
                    <div id="color" title="SlateBlue" style="background-color:SlateBlue;"></div>
                    <div id="color" title="SlateGray" style="background-color:SlateGray;"></div>
                    <div id="color" title="Snow" style="background-color:Snow;"></div>
                    <div id="color" title="SpringGreen" style="background-color:SpringGreen;"></div>
                    <div id="color" title="SteelBlue" style="background-color:SteelBlue;"></div>
                    <div id="color" title="Tan" style="background-color:Tan;"></div>
                    <div id="color" title="Teal" style="background-color:Teal;"></div>
                    <div id="color" title="Thistle" style="background-color:Thistle;"></div>
                    <div id="color" title="Tomato" style="background-color:Tomato;"></div>
                    <div id="color" title="Turquoise" style="background-color:Turquoise;"></div>
                    <div id="color" title="Violet" style="background-color:Violet;"></div>
					<div id="color" title="Transparent" style="background-color:Transparent;"></div>
                    <div id="color" title="Wheat" style="background-color:Wheat;"></div>
                    <div id="color" title="White" style="background-color:White;"></div>
                    <div id="color" title="WhiteSmoke" style="background-color:WhiteSmoke;"></div>
                    <div id="color" title="Yellow" style="background-color:Yellow;"></div>
				</div>
                <div style="position:relative;top:10px;left:10px;height:50px;margin-bottom:40px;">
                <table>
                <tbody><tr>                
                    <td> <b style="color:deepskyblue;">Edge radius:</b> </td>
                    <td>
                       <select id="border_radius" onchange="changeborderradius(this)">
                         <option value="All Edges">All Edges</option>
                         <option>Top Left Edge</option>
                         <option>Top Right Edge</option>
                       </select>
                    </td>
                </tr>
                </tbody></table>
				   <div id="scale" style="left:35px;width:140px;top:12px;"> <div id="border_radius_size" ondrag="changeborderradiussize(this)"></div> </div>
				</div>
				</div>
		
		
				<div id="tag" style="margin-bottom:7px;">
				    <span>Shadow</span>
				</div>
				<div id="box_shadowing">
				<span id="shadow_style_p" style="position:relative;top:5px;left:45px;margin-top:3px;color:deepskyblue;"><i><b>
                   <input type="radio" id="outer" name="Shadow-type" value="">Outer
                   <input type="radio" id="inner" name="Shadow-type" value="inset">Inner</b></i>
                </span>
                <div style="position:relative;top:15px;left:15px;height:25px;color:deepskyblue;">				
				    <b>Blur Rate  : </b>
				    <div id="scale" style="left:83px;width:110px;top:-10px;"> <div id="blur_shadow_size" ondrag="changeshadow(this)"></div> </div>
		        </div>
                <div style="position:relative;top:17px;left:15px;height:25px;color:deepskyblue;">				
				    <b>Spread  : </b>
				    <div id="scale" style="left:83px;width:110px;top:-10px;"> <div id="spread_shadow_size" ondrag="changeshadow(this)"></div> </div>
		        </div>
                <div style="position:relative;top:19px;left:15px;height:25px;color:deepskyblue;">				
				    <b>H-Size : </b>
				    <div id="scale" style="left:83px;width:110px;top:-10px;"> <div id="h_shadow_size" ondrag="changeshadow(this)" style="left:51px"></div> </div>
		        </div>
                <div style="position:relative;top:21px;left:15px;height:25px;color:deepskyblue;">				
				    <b>V-Size : </b>
				    <div id="scale" style="left:83px;width:110px;top:-10px;"> <div id="v_shadow_size" ondrag="changeshadow(this)" style="left:51px"></div> </div>
		        </div>
                <div style="position:relative;top:23px;left:15px;color:deepskyblue;">				
				    <b>Shadow Color  : </b>
		        </div>
				<div id="shadow_color" style="position:relative;height:205px;width:92.9%;margin-top:25px;border:8px solid gray; margin-bottom:25px;">
                    <div id="color" title="AliceBlue" style="background-color:AliceBlue;"></div>
                    <div id="color" title="AntiqueWhite" style="background-color:AntiqueWhite;"></div>
                    <div id="color" title="Aqua" style="background-color:Aqua;"></div>
                    <div id="color" title="Aquamarine" style="background-color:Aquamarine;"></div>
                    <div id="color" title="Azure" style="background-color:Azure;"></div>
                    <div id="color" title="Beige" style="background-color:Beige;"></div>
                    <div id="color" title="Bisque" style="background-color:Bisque;"></div>
                    <div id="color" title="Black" style="background-color:Black;"></div>
                    <div id="color" title="BlanchedAlmond" style="background-color:BlanchedAlmond;"></div>
                    <div id="color" title="Blue" style="background-color:Blue;"></div>
                    <div id="color" title="BlueViolet" style="background-color:BlueViolet;"></div>
                    <div id="color" title="Brown" style="background-color:Brown;"></div>
                    <div id="color" title="BurlyWood" style="background-color:BurlyWood;"></div>
                    <div id="color" title="CadetBlue" style="background-color:CadetBlue;"></div>
                    <div id="color" title="Chartreuse" style="background-color:Chartreuse;"></div>
                    <div id="color" title="Chocolate" style="background-color:Chocolate;"></div>
                    <div id="color" title="Coral" style="background-color:Coral;"></div>
                    <div id="color" title="CornflowerBlue" style="background-color:CornflowerBlue;"></div>
                    <div id="color" title="Cornsilk" style="background-color:Cornsilk;"></div>
                    <div id="color" title="Crimson" style="background-color:Crimson;"></div>
                    <div id="color" title="Cyan" style="background-color:Cyan;"></div>
                    <div id="color" title="DarkBlue" style="background-color:DarkBlue;"></div>
                    <div id="color" title="DarkCyan" style="background-color:DarkCyan;"></div>
                    <div id="color" title="DarkGoldenRod" style="background-color:DarkGoldenRod;"></div>
                    <div id="color" title="DarkGray" style="background-color:DarkGray;"></div>
                    <div id="color" title="DarkGreen" style="background-color:DarkGreen;"></div>
                    <div id="color" title="DarkKhaki" style="background-color:DarkKhaki;"></div>
                    <div id="color" title="DarkMagenta" style="background-color:DarkMagenta;"></div>
                    <div id="color" title="DarkOliveGreen" style="background-color:DarkOliveGreen;"></div>
                    <div id="color" title="DarkOrange" style="background-color:DarkOrange;"></div>
                    <div id="color" title="DarkOrchid" style="background-color:DarkOrchid;"></div>
                    <div id="color" title="DarkRed" style="background-color:DarkRed;"></div>
                    <div id="color" title="DarkSalmon" style="background-color:DarkSalmon;"></div>
                    <div id="color" title="DarkSeaGreen" style="background-color:DarkSeaGreen;"></div>
                    <div id="color" title="DarkSlateBlue" style="background-color:DarkSlateBlue;"></div>
                    <div id="color" title="DarkSlateGray" style="background-color:DarkSlateGray;"></div>
                    <div id="color" title="DarkTurquoise" style="background-color:DarkTurquoise;"></div>
                    <div id="color" title="DarkViolet" style="background-color:DarkViolet;"></div>
                    <div id="color" title="DeepPink" style="background-color:DeepPink;"></div>
                    <div id="color" title="DeepSkyBlue" style="background-color:DeepSkyBlue;"></div>
                    <div id="color" title="DimGray" style="background-color:DimGray;"></div>
                    <div id="color" title="DodgerBlue" style="background-color:DodgerBlue;"></div>
                    <div id="color" title="FireBrick" style="background-color:FireBrick;"></div>
                    <div id="color" title="FloralWhite" style="background-color:FloralWhite;"></div>
                    <div id="color" title="ForestGreen" style="background-color:ForestGreen;"></div>
                    <div id="color" title="Fuchsia" style="background-color:Fuchsia;"></div>
                    <div id="color" title="Gainsboro" style="background-color:Gainsboro;"></div>
                    <div id="color" title="GhostWhite" style="background-color:GhostWhite;"></div>
                    <div id="color" title="Gold" style="background-color:Gold;"></div>
                    <div id="color" title="GoldenRod" style="background-color:GoldenRod;"></div>
                    <div id="color" title="Gray" style="background-color:Gray;"></div>
                    <div id="color" title="Green" style="background-color:Green;"></div>
                    <div id="color" title="GreenYellow" style="background-color:GreenYellow;"></div>
                    <div id="color" title="HoneyDew" style="background-color:HoneyDew;"></div>
                    <div id="color" title="HotPink" style="background-color:HotPink;"></div>
                    <div id="color" title="IndianRed" style="background-color:IndianRed;"></div>
                    <div id="color" title="Indigo" style="background-color:Indigo;"></div>
                    <div id="color" title="Ivory" style="background-color:Ivory;"></div>
                    <div id="color" title="Khaki" style="background-color:Khaki;"></div>
                    <div id="color" title="Lavender" style="background-color:Lavender;"></div>
                    <div id="color" title="LavenderBlush" style="background-color:LavenderBlush;"></div>
                    <div id="color" title="LawnGreen" style="background-color:LawnGreen;"></div>
                    <div id="color" title="LemonChiffon" style="background-color:LemonChiffon;"></div>
                    <div id="color" title="LightBlue" style="background-color:LightBlue;"></div>
                    <div id="color" title="LightCoral" style="background-color:LightCoral;"></div>
                    <div id="color" title="LightCyan" style="background-color:LightCyan;"></div>
                    <div id="color" title="LightGoldenRodYellow" style="background-color:LightGoldenRodYellow;"></div>
                    <div id="color" title="LightGray" style="background-color:LightGray;"></div>
                    <div id="color" title="LightGreen" style="background-color:LightGreen;"></div>
                    <div id="color" title="LightPink" style="background-color:LightPink;"></div>
                    <div id="color" title="LightSalmon" style="background-color:LightSalmon;"></div>
                    <div id="color" title="LightSeaGreen" style="background-color:LightSeaGreen;"></div>
                    <div id="color" title="LightSkyBlue" style="background-color:LightSkyBlue;"></div>
                    <div id="color" title="LightSlateGray" style="background-color:LightSlateGray;"></div>
                    <div id="color" title="LightSteelBlue" style="background-color:LightSteelBlue;"></div>
                    <div id="color" title="LightYellow" style="background-color:LightYellow;"></div>
                    <div id="color" title="Lime" style="background-color:Lime;"></div>
                    <div id="color" title="LimeGreen" style="background-color:LimeGreen;"></div>
                    <div id="color" title="Linen" style="background-color:Linen;"></div>
                    <div id="color" title="Magenta " style="background-color:Magenta ;"></div>
                    <div id="color" title="Maroon" style="background-color:Maroon;"></div>
                    <div id="color" title="MediumAquaMarine" style="background-color:MediumAquaMarine;"></div>
                    <div id="color" title="MediumBlue" style="background-color:MediumBlue;"></div>
                    <div id="color" title="MediumOrchid" style="background-color:MediumOrchid;"></div>
                    <div id="color" title="MediumPurple" style="background-color:MediumPurple;"></div>
                    <div id="color" title="MediumSeaGreen" style="background-color:MediumSeaGreen;"></div>
                    <div id="color" title="MediumSlateBlue" style="background-color:MediumSlateBlue;"></div>
                    <div id="color" title="MediumSpringGreen" style="background-color:MediumSpringGreen;"></div>
                    <div id="color" title="MediumTurquoise" style="background-color:MediumTurquoise;"></div>
                    <div id="color" title="MediumVioletRed" style="background-color:MediumVioletRed;"></div>
                    <div id="color" title="MidnightBlue" style="background-color:MidnightBlue;"></div>
                    <div id="color" title="MintCream" style="background-color:MintCream;"></div>
                    <div id="color" title="MistyRose" style="background-color:MistyRose;"></div>
                    <div id="color" title="Moccasin" style="background-color:Moccasin;"></div>
                    <div id="color" title="NavajoWhite" style="background-color:NavajoWhite;"></div>
                    <div id="color" title="Navy" style="background-color:Navy;"></div>
                    <div id="color" title="OldLace" style="background-color:OldLace;"></div>
                    <div id="color" title="Olive" style="background-color:Olive;"></div>
                    <div id="color" title="OliveDrab" style="background-color:OliveDrab;"></div>
                    <div id="color" title="Orange" style="background-color:Orange;"></div>
                    <div id="color" title="OrangeRed" style="background-color:OrangeRed;"></div>
                    <div id="color" title="Orchid" style="background-color:Orchid;"></div>
                    <div id="color" title="PaleGoldenRod" style="background-color:PaleGoldenRod;"></div>
                    <div id="color" title="PaleGreen" style="background-color:PaleGreen;"></div>
                    <div id="color" title="PaleTurquoise" style="background-color:PaleTurquoise;"></div>
                    <div id="color" title="PaleVioletRed" style="background-color:PaleVioletRed;"></div>
                    <div id="color" title="PapayaWhip" style="background-color:PapayaWhip;"></div>
                    <div id="color" title="PeachPuff" style="background-color:PeachPuff;"></div>
                    <div id="color" title="Peru" style="background-color:Peru;"></div>
                    <div id="color" title="Pink" style="background-color:Pink;"></div>
                    <div id="color" title="Plum" style="background-color:Plum;"></div>
                    <div id="color" title="PowderBlue" style="background-color:PowderBlue;"></div>
                    <div id="color" title="Purple" style="background-color:Purple;"></div>
                    <div id="color" title="Red" style="background-color:Red;"></div>
                    <div id="color" title="RosyBrown" style="background-color:RosyBrown;"></div>
                    <div id="color" title="RoyalBlue" style="background-color:RoyalBlue;"></div>
                    <div id="color" title="SaddleBrown" style="background-color:SaddleBrown;"></div>
                    <div id="color" title="Salmon" style="background-color:Salmon;"></div>
                    <div id="color" title="SandyBrown" style="background-color:SandyBrown;"></div>
                    <div id="color" title="SeaGreen" style="background-color:SeaGreen;"></div>
                    <div id="color" title="SeaShell" style="background-color:SeaShell;"></div>
                    <div id="color" title="Sienna" style="background-color:Sienna;"></div>
                    <div id="color" title="Silver" style="background-color:Silver;"></div>
                    <div id="color" title="SkyBlue" style="background-color:SkyBlue;"></div>
                    <div id="color" title="SlateBlue" style="background-color:SlateBlue;"></div>
                    <div id="color" title="SlateGray" style="background-color:SlateGray;"></div>
                    <div id="color" title="Snow" style="background-color:Snow;"></div>
                    <div id="color" title="SpringGreen" style="background-color:SpringGreen;"></div>
                    <div id="color" title="SteelBlue" style="background-color:SteelBlue;"></div>
                    <div id="color" title="Tan" style="background-color:Tan;"></div>
                    <div id="color" title="Teal" style="background-color:Teal;"></div>
                    <div id="color" title="Thistle" style="background-color:Thistle;"></div>
                    <div id="color" title="Tomato" style="background-color:Tomato;"></div>
                    <div id="color" title="Turquoise" style="background-color:Turquoise;"></div>
                    <div id="color" title="Violet" style="background-color:Violet;"></div>
					<div id="color" title="Transparent" style="background-color:Transparent;"></div>
                    <div id="color" title="Wheat" style="background-color:Wheat;"></div>
                    <div id="color" title="White" style="background-color:White;"></div>
                    <div id="color" title="WhiteSmoke" style="background-color:WhiteSmoke;"></div>
                    <div id="color" title="Yellow" style="background-color:Yellow;"></div>
				</div>
				</div>
				
				
				<div id="scroller"></div>
		        <div id="scrollBar" ondrag="scroller_drag()"></div>
			</div>
				<table id="save_cancel" align="center" cellspacing="8">
					
				    <tbody>
				    <tr id="row">
				        <td> <span><img id="save" src="logos/save.png" onclick="submit_cancel(this)"></span> </td>
				        <td> <span><img id="cancel" src="logos/cancel.png" onclick="submit_cancel(this)"></span> </td>
				    </tr>
				    </tbody>
			
    			</table>
		</div>
	</div>
	<div id="hide_tools_div" style="position:absolute;left:226px;top:325px;background-color:gray;width:15px;height:50px;overflow:hidden;box-shadow:2px 2px 4px black;"> <p style="margin-top:17px;margin-left:3px;opacity:0"> Hide/Show </p> </div>

	
	
	<div id="upload_img" style="opacity: 0.5;">               <!-- For background-image -->
	    <div id="upload_img_move" style="position:relative;width:100%;height:15px"> <hr width="80%"> </div>
		<p style="margin-left:5px;margin-top:2px">Upload an Image:<i>( Limit 5MB )</i></p>
		<form id="uploadForm"> <p align="center" style="margin-top:2px;border:2px solid Aquamarine"> <input type="file" id="myFile" name="myFile" value=""> </p> </form>
		<div id="progress_out" style="position:absolute;top:84px;border:2px solid gray;width:98.7%;height:4px;border-radius:8px;"> <div id="progress_in" style="posititon:relative;background-color:limeGreen;width:0%;height:100%;border-radius:8px;"></div> </div>
		<span style="position:relative;margin-left:20px;top:19px;">(no <i>SPACES</i> in name...)</span><span style="margin-left:75%"><button>undo</button></span>
	</div>
	
	                                                                        <!-- For selecting background image -->
	<div id="select_img" style="opacity: 0.5;">	</div>
	
		
	<div id="upload_img1" style="opacity: 0.5;">              <!-- For Image tag -->
	    <div id="upload_img_move1" style="position:relative;width:100%;height:15px"> <hr width="80%"> </div>
		<p style="margin-left:5px;margin-top:2px">Upload an Image:<i>( Limit 5MB )</i></p>
		<form id="uploadForm1"> <p align="center" style="margin-top:2px;border:2px solid Aquamarine"> <input type="file" id="myFile1" name="myFile1" value=""> </p> </form>
		<div id="progress_out1" style="position:absolute;top:84px;border:2px solid gray;width:98.7%;height:4px;border-radius:8px;"> <div id="progress_in1" style="posititon:relative;background-color:limeGreen;width:0%;height:100%;border-radius:8px;"></div> </div>
		<span style="position:relative;margin-left:20px;top:19px;">(no <i>SPACES</i> in name...)</span><span style="margin-left:75%"><button>undo</button></span>
	</div>
	
	<div id="upload_img2" style="opacity: 0.5;">              <!-- For Audio tag -->
	    <div id="upload_img_move2" style="position:relative;width:100%;height:15px"> <hr width="80%"> </div>
		<p style="margin-left:5px;margin-top:2px">Upload an Audio:<i>( Limit 25MB )</i></p>
		<form id="uploadForm2"> <p align="center" style="margin-top:2px;border:2px solid Aquamarine"> <input type="file" id="myFile2" name="myFile2" value=""> </p> </form>
		<div id="progress_out2" style="position:absolute;top:84px;border:2px solid gray;width:98.7%;height:4px;border-radius:8px;"> <div id="progress_in2" style="posititon:relative;background-color:limeGreen;width:0%;height:100%;border-radius:8px;"></div> </div>
		<span style="position:relative;margin-left:20px;top:19px;">(no <i>SPACES</i> in name...)</span><span style="margin-left:75%"><button>undo</button></span>
	</div>
	
	<div id="upload_img3" style="opacity: 0.5;">              <!-- For Video tag -->
	    <div id="upload_img_move3" style="position:relative;width:100%;height:15px"> <hr width="80%"> </div>
		<p style="margin-left:5px;margin-top:2px">Upload a Video:<i>( Limit 100MB)</i></p>
		<form id="uploadForm3"> <p align="center" style="margin-top:2px;border:2px solid Aquamarine"> <input type="file" id="myFile3" name="myFile3" value=""> </p> </form>
		<div id="progress_out3" style="position:absolute;top:84px;border:2px solid gray;width:98.7%;height:4px;border-radius:8px;"> <div id="progress_in3" style="posititon:relative;background-color:limeGreen;width:0%;height:100%;border-radius:8px;"></div> </div>
		<span style="position:relative;margin-left:20px;top:19px;">(no <i>SPACES</i> in name...)</span><span style="margin-left:75%"><button>undo</button></span>
	</div>
	
	
	
	<!-- Lists division -->
    <!--<div id="lists" title="press Done when the list is completed!!!" tabindex="0" style="position:absolute;border:1px solid;width:250px;height:250px;overflow:hidden;left:105px"> </div>-->
    <div id="blinker" style="position: absolute; width: 1px; height: 18px; visibility: visible; opacity: 0.5; background-color: blue;"></div>
    
    <div id="list_style_table" style="position: absolute; left: 50px; top: 50px; opacity: 0.5; background-color: rgb(211, 211, 211);">
        <table style="position:relative;margin-top:5px;">
            <tbody><tr>
    		
            <td> <p>Style of list :</p> </td>
            <td>
            <select onchange="change_list_style(this)">
               <option value="1">1,2,3..</option>
               <option value="A">A,B,C..</option>
               <option value="a">a,b,c..</option>
               <option value="I">I,II,III..</option>
               <option value="i">i,ii,iii..</option>
               <option value="circle">circle</option>
               <option value="disc">disc</option>
               <option value="square">square</option>
               <option value="none">none</option>
            </select>
            </td>
            
            </tr>
        </tbody></table>
        
        <table style="position:relative;left:57px;" cellspacing="5">
            <tbody><tr>
               <td> <img title="Increase Indent Level" id="inc_indent" src="logos/increaseindent.png" style="width:50px;height:40px;border-radius:10px;" onclick="increase_decrease_list(1)"> </td>
               <td> <img title="Decrease Indent Level" id="dec_indent" src="logos/decreaseindent.png" style="width:50px;height:40px;" onclick="increase_decrease_list(0)"> </td>
            </tr>
        </tbody></table>
		<button id="list_done" style="position:relative;left:87px;margin-bottom:5px;">Done</button>
    </div>


	
	<!-- Custom context-menu -->
    <div id="context_menu" style="position: absolute; width: 155px; height: 87px; border: 1px solid rgb(211, 211, 211); box-shadow: gray 2px 2px 2px 0px;opacity: 0.5; background-color: white;">
    <p id="element_edit" style="height:24px;margin-top:2px;"><span style="position:relative;left:30px;top:4px;"> Edit </span></p>
    <p id="element_delete" style="height:24px;margin-top:-16px;"><span style="position:relative;left:30px;top:4px;"> Delete </span></p>
	<hr style="margin-top:-11px;">
	<p id="code_submit" style="height:24px;margin-top:-4px;"><span style="position:relative;left:30px;top:4px;"> Submit </span></p>
    </div>

	
	
	<!-- Login Division -->
  <div id="Register_login_div_bg" style="position:absolute;background-color:gray;width:100.15%;height:104.32%;left:-2px;top:-30px;"></div>
  
  <div id="project_name" style="position:fixed;width:300px;height:500px;background-color:white;left:550px;top:150px;border-radius:5px;box-shadow:0px 0px 15px black;">
  <b style="position:relative;left:50px;color:blue;top:5px;"><i> Give a name to your project </i></b>
  <p style="margin-left:12px;margin-top:35px;"> Project Name:<input id="input_pg_name" type="text" style="background-color:lightgray;border-radius:2px;border:1px solid black;height:22px;margin-left:5px;"> </p>
  <button id="pg_name_done" style="position:relative;left:230px;border-radius:2px;height:22px;border:0px solid black;width:50px;">Done</button>
  <hr style="position:relative;width:280px;top:10px;">
  <b style="position:relative;left:47px;color:blue;top:5px;"><i> Select one from the project list </i></b>
  <div id="list_project_name" style="position:relative;width:280px;height:318px;background-color:lightgray;top:25px;left:10px;overflow:auto;"> </div>
  </div>
  
  <div id="Register_login_div">
  
    <div id="Register_login_div_tab">
        <div id="register" style="cursor: pointer;"> <span> Register </span> </div>
	    <div id="login" style="opacity: 1; cursor: pointer;">    <span> Login </span> </div>
	</div>
	
	<img src="logos/login_logo6.png" style="position:absolute;left:110px;top:180px;"> 
	
	<div style="position:absolute;width:1px;height:300px;background-color:gray;left:395px;top:95px;"> </div>
	
    <p id="r_error" style="position:absolute;top:43px;left:400px;color:red;"> </p>
	
	<div id="login_form">
       <table cellspacing="25">
       <tbody><tr>
       <td> <input type="text" placeholder="username" id="l_username" value=""> </td>
       </tr>
       <tr>
       <td> <input type="password" placeholder="password" id="l_password" value=""> </td>
       </tr>
	   <tr>
	   <td> <button> Submit </button> </td>
	   </tr>
	   </tbody></table>
    </div>
	<div id="Register_form">
       <table cellspacing="25">
       <tbody><tr>
       <td> <input type="text" placeholder="name" id="name" value=""> </td>
       </tr>
       <tr>
       <td> <input type="text" placeholder="username" id="r_username" value=""> </td>
       </tr>
       <tr>
       <td> <input type="password" placeholder="password" id="r_password" value=""> </td>
       </tr>
       <tr>
       <td> <input type="password" placeholder="confirm password" id="c_password" value="confirm password"> </td>
       </tr>
	   <tr>
	   <td> <button> Register </button> </td>
	   </tr>
	   </tbody></table>
    </div>
	   
  </div>
	

	

  <div id="share" style="position:absolute;width:275px;height:200px;left:500px;top:250px;background-color:lightgray;box-shadow:0px 0px 7px black;">
      <span style="position:absolute;left:18px;top:20px;color:red;"><b> Download Your Website from the Link created at Homepage... </b></span>
	  <hr style="position:relative;width:250px;top:70px;"/>
      <span style="position:relative;margin-left:28px;top:90px;"><b><i> Share Your Websites with Others </i></b></span>
	  <button id="do_share" style="position:relative;left:30px;top:110px;width:90px;height:30px;background-color:cornflowerblue;border:1px solid lightblue;border-radius:2px;"> Share </button> 
	  <button id="dont_share" style="position:relative;left:60px;top:110px;width:90px;height:30px;background-color:cornflowerblue;border:1px solid lightblue;border-radius:2px;"> Don't Share </button>
  </div>  
  
  
  
  <div id="triangle_r"></div>
  <div id="triangle_l"></div>
  <div id="right_info"> 
      <p> Right-click for more options</p>
  </div>

	
	
	<!-- Script for Tabs show/hide -->
	<script src="tab.js"></script>


  <script>
    var user_file='';
	var user_id='';
	var project_names='';
	var editor_height_pre;
	var json_data_final;
  
	var drop_id;
	
	var list_max_indent=[];
	
	//----------------- Code for creating the tags
	var editor_left;
    var editor_top;
	var temp_count=0;
	var temp_id='';
	var para;
	var element;
	var tag;
	
	var tab_count=0;
	function createtags(this1)
	{	
	    width_pre=0;
		height_pre=0;
		editor_left=$("#editor").position().left;
		editor_top=$("#editor").position().top;
		
	    temp_count=temp_count+1;
	    
	    tag=this1.id;
	    if(tag=="text")
		{
            para = document.createElement("textarea");
            var node = document.createTextNode("");
            para.appendChild(node);
            element = document.getElementById("editor");
            element.appendChild(para);
			para.id="temp"+temp_count;
			temp_id="temp"+temp_count;
            para.style.width="100px";
			para.style.maxWidth="100%";
			para.style.height="100px";
			para.style.border="1px solid CornflowerBlue"
			para.style.backgroundColor='transparent';
			para.style.left=editor_left+400+'px';
			para.style.top=editor_top+100+'px';
			para.style.position="absolute";
			para.style.boxShadow="0px 0px 0px 0px black";
			para.style.textShadow="0px 0px 0px 0px black";
			para.style.overflow="hidden";
			para.style.resize="none";
			para.style.backgroundSize="100% 100%";
			para.style.fontSize="16px";
			para.style.fontFamily="Arial";
			
			initialize_mover();
			$('#mover1').show();
	        $('#mover2').show();
	        $('#mover3').show();
	        $('#mover4').show();
	        $('#mover5').show();
	        $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		    $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		    											  $("#editor").position().top,
		    											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		    											  $("#editor").position().top+parseInt($("#editor").css('height'))
		    											  ],axis:""});

	               $('#tools').slideUp();
	               $('#tools_style').show();
	               $('#save_cancel').show();
				   
			       $('#div_image').show();
			       $('#div_color').show();
			       $('#text_color').show();
			       $('#text_styling').show();
			       $('#text_shadowing').show();
			       $('#bordering').show();
			       $('#box_shadowing').show();
	    }
		if(tag=="image")
		{	
			    var v=document.getElementById("myFile1").value;
		        str=v.toString();
		        var ext;
		        var name;
                ext=str.slice(str.lastIndexOf("."),str.length);
				if(!(ext=='.jpg'||ext==".png"||ext==".gif"))
		        {
		            alert("File format not supported...Please select '.jpg','.png' OR '.gif' Image format");
		        }
		        else
		        {
                    para = document.createElement("img");
			        element = document.getElementById("editor");
                    element.appendChild(para);
			        para.id="temp"+temp_count;
			        temp_id="temp"+temp_count;
				
		            name=str.slice(str.lastIndexOf("\\")+1,str.length);
                    path="Projects/"+user_id+"/"+project_names+"/contents/";
		            str=path.concat(name);
			        para.src=str;
                    para.style.width="100px";
			        para.style.maxWidth="100%";
			        para.style.height="100px";
					para.style.border="1px solid black"
			        para.style.left=editor_left+400+'px';
			        para.style.top=editor_top+100+'px';
			        para.style.position="absolute";
					para.style.boxShadow="0px 0px 0px 0px black";
				
			        initialize_mover();
			        $('#mover1').show();
	                $('#mover2').show();
	                $('#mover3').show();
	                $('#mover4').show();
	                $('#mover5').show();
	        $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		    $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		    											  $("#editor").position().top,
		    											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		    											  $("#editor").position().top+parseInt($("#editor").css('height'))
		    											  ],axis:""});
					
	               $('#tools').slideUp();
	               $('#tools_style').show();
	               $('#save_cancel').show();
				   
			       $('#div_image').show();
			       $('#div_color').show();
			       $('#text_color').hide();
			       $('#text_styling').hide();
			       $('#text_shadowing').hide();
			       $('#bordering').show();
			       $('#box_shadowing').show();
		        }
	    }
		if(tag=="button")
		{ 
		    para = document.createElement("a");
			
			tag='A';
            var node = document.createTextNode("link...");
            para.appendChild(node);
			
			para.href="https://www.google.com";
            element = document.getElementById("editor");
            element.appendChild(para);
			para.id="temp"+temp_count;
			temp_id="temp"+temp_count;
			para.style.left=editor_left+400+'px';
			para.style.top=editor_top+100+'px';
			para.style.position="absolute";
			para.style.boxShadow="0px 0px 0px 0px black";
			para.style.border="0px solid black"
			para.style.textShadow="0px 0px 0px 0px black";
			para.style.backgroundSize="100% 100%";
			para.style.fontSize="16px";
			para.style.fontFamily="Arial";
			
			$("#"+temp_id).css({"cursor":"move"});
			
			$("#"+temp_id).draggable({cancel:'',containment: "#editor"});
			
	               $('#tools').slideUp();
				   
                   $("#button_tab").hide();
	               $("#button_button").hide();
	               $("#button_image").hide();
                   $("#button_tab_button").css('opacity','0.4');
				   $('#link_tab').show();
				   $("#link_tab_button").css('opacity','1');
				   
				   $('#button_link_div').show();
	               $('#tools_style').show();
	               $('#save_cancel').show();
				   
			       $('#div_image').show();
			       $('#div_color').show();
			       $('#text_color').show();
			       $('#text_styling').show();
			       $('#text_shadowing').show();
			       $('#bordering').show();
			       $('#box_shadowing').show();
		}
	    if(tag=="division")
		{
            para = document.createElement("div");
            element = document.getElementById("editor");
            element.appendChild(para);
			para.id="temp"+temp_count;
			temp_id="temp"+temp_count;
            para.style.width="300px";
			para.style.maxWidth="100%";
			para.style.height="200px";
			para.style.border="1px solid black"
			para.style.backgroundColor='white';
			para.style.left=editor_left+400+'px';
			para.style.top=editor_top+100+'px';
			para.style.position="absolute";
			para.style.boxShadow="0px 0px 0px 0px black";
			para.style.textShadow="0px 0px 0px 0px black";
			para.style.backgroundSize="100% 100%";
			
			initialize_mover();
			$('#mover1').show();
	        $('#mover2').show();
	        $('#mover3').show();
	        $('#mover4').show();
	        $('#mover5').show();
	        $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		    $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		    											  $("#editor").position().top,
		    											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		    											  $("#editor").position().top+parseInt($("#editor").css('height'))
		    											  ],axis:""});
		
	               $('#tools').slideUp();
	               $('#tools_style').show();
	               $('#save_cancel').show();
				   
			       $('#div_image').show();
			       $('#div_color').show();
			       $('#text_color').hide();
			       $('#text_styling').hide();
			       $('#text_shadowing').hide();
			       $('#bordering').show();
			       $('#box_shadowing').show();
		}
		if(tag=="list")
		{		
		   list_max_indent[no_list]=[];
		   list_max_indent[no_list][0]=temp_count;

		   no_list=no_list+1;
		
	       $("#list_style_table").show();
	       $("#blinker").show();
		   $("#lists").show();

		   para = document.createElement('div');

		   para.tabIndex='';
		   para.style.position="absolute";
		   para.style.border="1px solid";
		   para.style.width="250px";
		   para.style.height="250px";
		   para.style.overflow="hidden";
		   para.style.left="105px";
		   
           element = document.getElementById("editor");
		   
		   para.id="temp"+temp_count;
		   temp_id="temp"+temp_count;
		   
		   para.style.backgroundColor='transparent';
		   para.style.left=editor_left+400+'px';
		   para.style.top=editor_top+100+'px';
		   para.style.boxShadow="0px 0px 0px 0px black";
		   para.style.textShadow="0px 0px 0px 0px black";
		   para.style.backgroundSize="100% 100%";
		   
		   inc_dec_list[0]=0;
		   
		   element.appendChild(para);
		   initialize_list();
		   
		   document.getElementById('list_style_table').style.left=parseInt(para.style.left)+10+'px';
		   document.getElementById('list_style_table').style.top=parseInt(para.style.top)+20+parseInt(para.style.height)+'px';
		   
	             $('#tools').slideUp();
	             $('#tools_style').show();
		   
			       $('#div_image').show();
			       $('#div_color').show();
			       $('#text_color').show();
			       $('#text_styling').show();
			       $('#text_shadowing').show();
			       $('#bordering').show();
			       $('#box_shadowing').show();
		}
		if(tag=="audio")
		{		
			   var v=document.getElementById("myFile2").value;
		       str=v.toString();		
		       var ext;
		       var name;
               ext=str.slice(str.lastIndexOf("."),str.length);
		       if(!(ext=='.mp3'||ext==".wav"||ext==".ogg"))
		       {
		           alert("File format not supported...Please select '.mp3','.wav' OR '.ogg' Audio format");
		       }
		       else
		       {
                   para = document.createElement("audio");
			       element = document.getElementById("editor");
                   element.appendChild(para);
			       para.id="temp"+temp_count;
			       temp_id="temp"+temp_count;	
		
		           name=str.slice(str.lastIndexOf("\\")+1,str.length);
                   path="Projects/"+user_id+"/"+project_names+"/contents/";
		           str=path.concat(name);
			       para.src=str;
			       para.style.maxWidth="100%";
			       para.style.height="30px";
				   para.style.border="1px solid black"
			       para.style.left=editor_left+400+'px';
			       para.style.top=editor_top+100+'px';
			       para.style.position="absolute";
				   para.setAttribute("controls","controls");
                   para.addEventListener('contextmenu',function(event){ mouse_right_click(event); return false});				   
				   para.style.boxShadow="0px 0px 0px 0px black";
				   para.style.backgroundSize="100% 100%";
			
			       initialize_mover();
			       $('#mover1').show();
	               $('#mover2').show();
	               $('#mover3').show();
	               $('#mover4').show();
	               $('#mover5').show();
	               $("#mover1").draggable({cancel:'',containment: "#editor",axis: "x"});
	               $("#mover2").draggable({cancel:'',containment: "#editor",axis: "x"});
	               $("#mover3").draggable({cancel:'',containment: "#editor",axis: "x"});
	               $("#mover4").draggable({cancel:'',containment: "#editor",axis: "x"});
		    $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		    											  $("#editor").position().top,
		    											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		    											  $("#editor").position().top+parseInt($("#editor").css('height'))
		    											  ],axis:""});
				  
	               $('#tools').slideUp();
	               $('#tools_style').show();
	               $('#save_cancel').show();
				   
			       $('#div_image').show();
			       $('#div_color').show();
			       $('#text_color').hide();
			       $('#text_styling').hide();
			       $('#text_shadowing').hide();
			       $('#bordering').show();
			       $('#box_shadowing').show();
		       }
	    }
		if(tag=="video")
		{		
			   var v=document.getElementById("myFile3").value;
		       str=v.toString();		
		       var ext;
		       var name;
               ext=str.slice(str.lastIndexOf("."),str.length);
		       if(!(ext=='.mp4'||ext==".webm"||ext==".ogg"))
		       {
		           alert("File format not supported...Please select '.mp4','.webm' OR '.ogg' Audio format");
		       }
		       else
		       {
                   para = document.createElement("video");
			       element = document.getElementById("editor");
                   element.appendChild(para);
			       para.id="temp"+temp_count;
			       temp_id="temp"+temp_count;	
		
		           name=str.slice(str.lastIndexOf("\\")+1,str.length);
                   path="Projects/"+user_id+"/"+project_names+"/contents/";
		           str=path.concat(name);
			       para.src=str;
				   para.style.width="350px";
			       para.style.height="200px";
				   para.style.border="1px solid black"
			       para.style.left=editor_left+400+'px';
			       para.style.top=editor_top+100+'px';
			       para.style.position="absolute";
				   para.setAttribute("controls","controls"); 
				   para.style.boxShadow="0px 0px 0px 0px black";
				   para.style.backgroundSize="100% 100%";
			
			       initialize_mover();
			       $('#mover1').show();
	               $('#mover2').show();
	               $('#mover3').show();
	               $('#mover4').show();
	               $('#mover5').show();
	        $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		    $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		    											  $("#editor").position().top,
		    											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		    											  $("#editor").position().top+parseInt($("#editor").css('height'))
		    											  ],axis:""});
				   
	               $('#tools').slideUp();
	               $('#tools_style').show();
	               $('#save_cancel').show();
				   
			       $('#div_image').show();
			       $('#div_color').show();
			       $('#text_color').hide();
			       $('#text_styling').hide();
			       $('#text_shadowing').hide();
			       $('#bordering').show();
			       $('#box_shadowing').show();
		       }
	    }
		if(tag=='tabs')
		{
            tab_count=tab_count+1;
            var panels=document.createElement("div");
            var panel_p=document.createElement("pre");
            node=document.createTextNode("panel"+tab_count);
            panel_p.appendChild(node);
            panel_p.style.opacity="0.5";    
            panels.appendChild(panel_p);
            panels.id="panel"+tab_count;
            panels.style.width="200px";
            panels.style.height="200px";
			panels.style.left=editor_left+350+'px';
			panels.style.top=editor_top+140+'px';
            panels.style.border="1px solid black";
            panels.style.backgroundColor="white";
			panels.style.position="absolute";
			panels.style.boxShadow="0px 0px 0px 0px black";
			panels.style.backgroundSize="100% 100%";
            panels.style.visibility="visible";
            if(tab_count>1) 
            {
                for(var i=1;i<tab_count;i++)
                { 
	                if(document.getElementById("panel"+i)!=null)
	                {
                       document.getElementById("panel"+i).style.visibility="hidden";
					   
			           panels.style.left=document.getElementById("panel"+i).style.left;
			           panels.style.top=document.getElementById("panel"+i).style.top;
			           panels.style.width=document.getElementById("panel"+i).style.width;
			           panels.style.height=document.getElementById("panel"+i).style.height;
				       
				       
	                   panels.style.borderWidth=$("#panel"+i).css('borderWidth');
		               panels.style.borderStyle=$("#panel"+i).css('borderStyle');
		               panels.style.borderColor=$("#panel"+i).css('borderColor');
					   panels.style.borderRadius=$("#panel"+i).css('borderRadius');
					}
                }
	        }
   		    document.getElementById("editor").appendChild(panels);
			$("#panel"+tab_count).droppable({cancel:'',
			                drop:function(event)
			                {
								drop_id=event.target.id;
								if(temp_id.replace(/[0-9]/g,'')!='panel' && temp_id.replace(/[0-9]/g,'')!='tab' && drop_id.replace(/[0-9]/g,'')!='mover')
                                {	
                                    if(document.getElementById(drop_id).style.visibility=="visible")
                                    {													
                                        if(document.getElementById(temp_id).parentNode.id=="editor")
                                        {	
                                            if(document.getElementById(drop_id).childNodes.length!=0)
                                            {																		
                                               if(document.getElementById(drop_id).childNodes[0].innerHTML.replace(/[0-9]/g,'')=="panel")																		
								                   document.getElementById(drop_id).innerHTML=''; 
										    }
								            document.getElementById(temp_id).style.left=parseFloat(document.getElementById(temp_id).style.left)-parseFloat(document.getElementById(drop_id).style.left)+'px';
								            document.getElementById(temp_id).style.top=parseFloat(document.getElementById(temp_id).style.top)-parseFloat(document.getElementById(drop_id).style.top)+'px';
								            document.getElementById(drop_id).appendChild(document.getElementById(temp_id));
										    element=document.getElementById(drop_id);
										    initialize_mover();
									    }
									    else 
									    {
								           document.getElementById(temp_id).style.left=document.getElementById(temp_id).style.left;
								           document.getElementById(temp_id).style.top=document.getElementById(temp_id).style.top;																	    
									    }
								    }
								}
							},
							out:function(event)
						    {											
			              	   document.getElementById(temp_id).style.left=parseFloat(document.getElementById(temp_id).style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.left)+'px';
			              	   document.getElementById(temp_id).style.top=parseFloat(document.getElementById(temp_id).style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.top)+'px';
			              	   document.getElementById("editor").appendChild(document.getElementById(temp_id));
			              	   element=document.getElementById("editor");
			              	   initialize_mover();	
                            }
			});
		
		
            var tab=document.createElement("div");  
            var tab_p=document.createElement("pre");
            var node=document.createTextNode("tab"+tab_count);
            tab_p.appendChild(node);
            tab_p.style.opacity="0.5";
            tab.appendChild(tab_p);
            tab.id="tab"+tab_count;
            tab.style.width="40px";
            tab.style.height="25px";
            tab.style.border="1px solid black";
            tab.style.backgroundColor="white";
            tab.style.cursor="pointer";
			tab.style.left=editor_left+(tab_count*50)+300+'px';
			tab.style.top=editor_top+100+'px';
			tab.style.position="absolute";
			tab.style.boxShadow="0px 0px 0px 0px black";
			tab.style.backgroundSize="100% 100%";
            if(tab_count>1) 
            {
                for(var i=1;i<tab_count;i++)
                { 
	                if(document.getElementById("tab"+i)!=null)
	                {
			           tab.style.width=document.getElementById("tab"+i).style.width;
			           tab.style.height=document.getElementById("tab"+i).style.height;
				       
	                   tab.style.borderWidth=$("#tab"+i).css('borderWidth');
		               tab.style.borderStyle=$("#tab"+i).css('borderStyle');
		               tab.style.borderColor=$("#tab"+i).css('borderColor');			   
					   tab.style.borderRadius=$("#tab"+i).css('borderRadius');
                    } 
                }
            }				
            document.getElementById("editor").appendChild(tab);
			$("#tab"+tab_count).droppable({cancel:'',drop:function(event)
			                                                  {
															     drop_id=event.target.id;
                                                                 if(temp_id.replace(/[0-9]/g,'')!='tab' && temp_id.replace(/[0-9]/g,'')!='panel' && drop_id.replace(/[0-9]/g,'')!='mover')
                                                                 {																 
                                                                    if(document.getElementById(temp_id).parentNode.id=="editor")
                                                                    {																													
															           document.getElementById(drop_id).innerHTML=''; 
																       document.getElementById(temp_id).style.left=parseFloat(document.getElementById(temp_id).style.left)-parseFloat(document.getElementById(drop_id).style.left)+'px';
																       document.getElementById(temp_id).style.top=parseFloat(document.getElementById(temp_id).style.top)-parseFloat(document.getElementById(drop_id).style.top)+'px';
																       document.getElementById(drop_id).appendChild(document.getElementById(temp_id));
																	   initialize_mover();
																	}
																	else 
																	{
																       document.getElementById(temp_id).style.left=document.getElementById(temp_id).style.left;
																       document.getElementById(temp_id).style.top=document.getElementById(temp_id).style.top;																	    
																	}
																 }
															  }
											});            //create after the element is created
		}
		if(tag=='backgrd')
		{
		     temp_id="editor";
			 para=document.getElementById("editor");
			 
	         $('#tools').slideUp();
	         $('#tools_style').show();
	         $('#save_cancel').show();
			 
			 $('#div_image').show();
			 $('#div_color').show();
			 $('#text_color').hide();
			 $('#text_styling').hide();
			 $('#text_shadowing').hide();
			 $('#bordering').hide();
			 $('#box_shadowing').hide();
		}
				
				
	    scroll_size();			
		scroller_top_initial=parseFloat($("#scroller").css('top'));
	    $("#tools_style").scrollTop(0);
	}
	
	
	
	
	//------------ Background style
	function changebackground()                                      
	{
		var v=document.getElementById("myFile").value;
		str=v.toString();
		
		var ext;
		var name;
        ext=str.slice(str.lastIndexOf("."),str.length);
		if(!(ext=='.jpg'||ext==".png"||ext==".gif"))
		{
		    alert("File format not supported...Please select another Image");
		}
		else
		{
		    name=str.slice(str.lastIndexOf("\\")+1,str.length);
            path="Projects/"+user_id+"/"+project_names+"/backgrounds/";
		    str=path.concat(name);
			
			document.getElementById(temp_id).style.backgroundImage="url('')";
	        para.style.backgroundImage="url('"+str+"')";
		}
	}
	function changebackground_select(this1)
	{
	    var str=this1.src;
		
		str=str.slice(str.lastIndexOf("/")+1,str.length);
		
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","copy_selected_images.php?data="+str,false);                 // asynchronous->true
        xmlhttp.send();
		
		str="url('Projects/"+user_id+"/"+project_names+"/backgrounds/"+str+"')";
		
		document.getElementById(temp_id).style.backgroundImage="url('')";
        para.style.backgroundImage=str;

	}
	function changebackgroundstyle(this1)                                        //-------- NA
	{
	    para.style.backgroundRepeat=this1.value;
	}
	function create_scrollimage()
	{
		for(var image_count=1;image_count<=37;image_count++)
		{
            var im = document.createElement("img");
	        var el = document.getElementById("select_img");
            el.appendChild(im);
		    im.id="b";
		    im.src="backgrounds/woyo_b/b"+image_count+".jpg";
	    }
	}

	
	
	
	//-------------- NA
	var width_pre;
	var height_pre;
	function increasesize(this1)
	{
	    if(this1.id=="width_inc")
		{
		    if(parseFloat(this1.style.left)>width_pre)
			{
		        var w=parseFloat(para.style.width)+(parseFloat(this1.style.left)-width_pre);
		        para.style.width=w+"px";
				width_pre=parseFloat(this1.style.left);
			}
			else
			{
		        var w=parseFloat(para.style.width)-(width_pre-parseFloat(this1.style.left));
		        para.style.width=w+"px";
				width_pre=parseFloat(this1.style.left);
			}
		}
		else
		{
		    if(parseFloat(this1.style.left)>height_pre)
			{
		        var h=parseFloat(para.style.height)+(parseFloat(this1.style.left)-height_pre);
		        para.style.height=h+"px";
				height_pre=parseFloat(this1.style.left);
			}
			else
			{
		        var h=parseFloat(para.style.height)-(height_pre-parseFloat(this1.style.left));
		        para.style.height=h+"px";
				height_pre=parseFloat(this1.style.left);
			}
		}
	}
	
	
	
	
	//----------- Code for submitting OR cancelling the element
    var padding_top;
    var padding_left;	
    var text_indent_left;	
    var text_indent_top;
	function submit_cancel(this1)
	{	
		if(this1.id=="save")
		{
			$('#mover1').hide();
	        $('#mover2').hide();
	        $('#mover3').hide();
	        $('#mover4').hide();
	        $('#mover5').hide();
			
		    if(tag=="text")
			{	
			    var att=document.getElementById(temp_id).attributes;
				
                padding_top=(2*parseInt($("#"+temp_id).css('padding-top')))-parseInt($("#"+temp_id).css('borderWidth'));
                padding_left=(2*parseInt($("#"+temp_id).css('padding-left')))-parseInt($("#"+temp_id).css('borderWidth'));
                text_indent_left=parseInt($("#"+temp_id).css('padding-left'));
                text_indent_top=parseInt($("#"+temp_id).css('padding-top'));
				
				
				var text_content=document.getElementById(temp_id).value;
				
                para = document.createElement("pre");
                var node = document.createTextNode(text_content);
                para.appendChild(node);
                document.getElementById(temp_id).parentNode.appendChild(para);
				
				document.getElementById(temp_id).parentNode.removeChild(document.getElementById(temp_id));

				for(var i=0;i<att.length;i++)
				{
				    switch(att[i].name)
					{
				        case 'id' : para.id=att[i].value;
						            break;
									
						case 'style' : var str=att[i].value;
									   var arr_line=[];
									   arr_line=str.split(';');
									   for(var i=0;i<arr_line.length;i++)
									   {
									       if(arr_line[i]!='')
										   {
										      var arr_key_val=arr_line[i].split(':');
                                              switch(arr_key_val[0].trim())
                                              {
                                                 case 'position' : para.style.position=arr_key_val[1]; break;
												 case 'border' : para.style.border=arr_key_val[1]; break;
												 case 'border-radius' : para.style.borderRadius=arr_key_val[1]; break;
												 case 'border-width' : para.style.borderWidth=arr_key_val[1]; break;
												 case 'border-style' : para.style.borderStyle=arr_key_val[1]; break;	
												 case 'border-color' : para.style.borderColor=arr_key_val[1]; break;												 
												 case 'color' : para.style.color=arr_key_val[1]; break;
												 case 'font-family' : para.style.fontFamily=arr_key_val[1]; break;
												 case 'font-size' : para.style.fontSize=arr_key_val[1]; break;
												 case 'background-image' : str=arr_line[i];	str=str.slice(str.lastIndexOf("/"),str.length-1); str="url('Projects/"+user_id+"/"+project_names+"/backgrounds"+str+"')"; para.style.backgroundImage=str; break;
												 case 'left' : para.style.left=parseFloat(arr_key_val[1]); break;
												 case 'top' : para.style.top=parseFloat(arr_key_val[1]); break;
												 case 'width' : para.style.width=arr_key_val[1]; break;
												 case 'height' : para.style.height=arr_key_val[1]; break;
												 case 'max-width' : para.style.maxWidth=arr_key_val[1]; break;
												 case 'background-color' : para.style.backgroundColor=arr_key_val[1]; break;
												 case 'background-repeat' : para.style.backgroundRepeat=arr_key_val[1]; break;
												 case 'box-shadow' : para.style.boxShadow=arr_key_val[1]; break;
												 case 'text-shadow' : para.style.textShadow=arr_key_val[1]; break;
												 default : break;
                                              }	
										   }
									   }
						               break;
									
						default   : break;
					}
				}
				para.style.backgroundSize="100% 100%";
				
				para.style.whiteSpace="pre-wrap";                                     //------------ To enter new-line before a word and not in between the long word
                para.style.wordWrap="break-word";
				
				if((para.style.borderWidth.split(" ")).length==4)
				{
				    para.style.width=(parseFloat(para.style.width)-(parseFloat($("#"+temp_id).css('borderLeftWidth'))+parseFloat($("#"+temp_id).css('borderRightWidth'))))+'px';
				    para.style.height=(parseFloat(para.style.height)-(parseFloat($("#"+temp_id).css('borderTopWidth'))+parseFloat($("#"+temp_id).css('borderBottomWidth'))+2))+'px'; 
                }
 
                var s=parseFloat($("#"+temp_id).css('font-size'));
                if(parseInt($("#"+temp_id).css('borderWidth'))==1)
                {
                   document.getElementById(temp_id).style.border="0px solid black";     
                 
                   document.getElementById(temp_id).style.top=parseFloat($("#"+temp_id).css('top'))-s+padding_top+'px';
                
                   document.getElementById(temp_id).style.left=parseFloat($("#"+temp_id).css('left'))+padding_left+'px';
                }
                else
                {				
                    document.getElementById(temp_id).style.top=parseFloat($("#"+temp_id).css('top'))-s+'px';
		            
		            document.getElementById(temp_id).style.textIndent=text_indent_left+"px";
		            document.getElementById(temp_id).style.paddingTop=text_indent_top+"px";
					
				     para.style.width=parseFloat(para.style.width)-(2*parseInt($("#"+temp_id).css('border')))+'px';
					 para.style.height=parseFloat(para.style.height)-(2*parseInt($("#"+temp_id).css('border')))-text_indent_top+'px';       //when padding is applied the resp. widthor height increases
                }
			}
			
			if(tag=='button'||tag=='BUTTON'||tag=='A')
			{
		        document.getElementById(temp_id).style.cursor="pointer";
				if(document.getElementById(temp_id).tagName!='BUTTON' && para.childNodes[0].tagName!='IMG')
				{
			       document.getElementById(temp_id).removeAttribute("class");
			       $("#"+temp_id).draggable("destroy");
				}
			    else if(parseInt(document.getElementById(temp_id).style.border)==1)
			         {
			         	 document.getElementById(temp_id).style.left=parseInt(document.getElementById(temp_id).style.left)+parseInt(document.getElementById(temp_id).style.border)+'px';
			         	 document.getElementById(temp_id).style.top=parseInt(document.getElementById(temp_id).style.top)+parseInt(document.getElementById(temp_id).style.border)+'px';
			             document.getElementById(temp_id).style.border="0px";
			         }
			}
			else if(parseInt(document.getElementById(temp_id).style.border)==1)
			     {
			     	 document.getElementById(temp_id).style.left=parseInt(document.getElementById(temp_id).style.left)+parseInt(document.getElementById(temp_id).style.border)+'px';
			     	 document.getElementById(temp_id).style.top=parseInt(document.getElementById(temp_id).style.top)+parseInt(document.getElementById(temp_id).style.border)+'px';
			         document.getElementById(temp_id).style.border="0px";
			     }
				 
			if(temp_id.replace(/[0-9]/g,'')=='panel' || temp_id.replace(/[0-9]/g,'')=='tab')
			{
			    var panel_edited=temp_id.replace(/[a-z]/g,'');
				if(temp_id.replace(/[0-9]/g,'')=='panel')
				{
                    for(var i=1;i<=tab_count;i++)
                    {
	                    if(document.getElementById("panel"+i)!=null)
	                    {					
				          if(i!=panel_edited)
				          {
			                document.getElementById("panel"+i).style.left=document.getElementById(temp_id).style.left;
			                document.getElementById("panel"+i).style.top=document.getElementById(temp_id).style.top;
				        	if(parseInt(document.getElementById(temp_id).style.border)!=0)
				        	{
			                   document.getElementById("panel"+i).style.width=document.getElementById(temp_id).style.width;
			                   document.getElementById("panel"+i).style.height=document.getElementById(temp_id).style.height;
				        	   
	                           document.getElementById("panel"+i).style.borderWidth=$("#"+temp_id).css('borderWidth');
		                       document.getElementById("panel"+i).style.borderStyle=$("#"+temp_id).css('borderStyle');
		                       document.getElementById("panel"+i).style.borderColor=$("#"+temp_id).css('borderColor');
							   document.getElementById("panel"+i).style.borderRadius=$("#"+temp_id).css('borderRadius');
				        	}
				        	else
				        	{
			                   document.getElementById("panel"+i).style.width=parseFloat(document.getElementById(temp_id).style.width)-2+'px';
			                   document.getElementById("panel"+i).style.height=parseFloat(document.getElementById(temp_id).style.height)-2+'px';
				        	}
				          }
					    }
                    }
				}
				else
				{
                    for(var i=1;i<=tab_count;i++)
                    { 
	                   if(document.getElementById("panel"+i)!=null)
	                   {
				         if(i!=panel_edited)
				         {
			                document.getElementById("tab"+i).style.width=document.getElementById(temp_id).style.width;
			                document.getElementById("tab"+i).style.height=document.getElementById(temp_id).style.height;
				       	 
	                        document.getElementById("tab"+i).style.borderWidth=$("#"+temp_id).css('borderWidth');
		                    document.getElementById("tab"+i).style.borderStyle=$("#"+temp_id).css('borderStyle');
		                    document.getElementById("tab"+i).style.borderColor=$("#"+temp_id).css('borderColor');
						    document.getElementById("tab"+i).style.borderRadius=$("#"+temp_id).css('borderRadius');
				         }
					   }
					}
				}
			}
			
			
			$('#tools').slideDown();
	        $('#tools_style').hide();
	        $('#save_cancel').hide();
		    $('#button_link_div').hide();			
			
			console.log(document.getElementById("editor").innerHTML);
			editor_height_pre=parseInt($("#editor").css('height'));
			
			var data={};
			data['editor']=document.getElementById("editor").innerHTML;
			
			//------ To set the URL as a string if the project name has SPACE
			//var str=
			//str=str.substring(str.indexOf("(")+1,str.indexOf(")"));
			
		    data["backgroundimage"]=$("#editor").css("background-image");
		    data['backgroundcolor']=$("#editor").css("background-color");
			data['backgroundsize']=$("#editor").css("background-size");
			data['height']=$("#editor").css("height");
			data['tab_count']=tab_count;
			data['temp_count']=temp_count;
			data['list_max_indent']=list_max_indent;
			data=JSON.stringify(data);
			
			data=encodeURIComponent(data);
			
            var xmlhttp=new XMLHttpRequest();	
            xmlhttp.open("POST","create_project.php",false);
            xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // This is needed for any POST request made via Ajax
            xmlhttp.send('editor_data='+data);
			console.log(xmlhttp.responseText);	
		}
		else
		{
	        para.style.borderLeftWidth='1px';
		    para.style.borderRightWidth='1px';
		    para.style.borderTopWidth='1px';
		    para.style.borderBottomWidth='1px';
			
	        if(tag=="text")
		    {
		    	para.style.overflow="hidden";
		    	para.style.resize="none";
		    	para.style.backgroundSize="100% 100%";
	        }
		    if(tag=="button")
		    { 
		    	para.style.backgroundSize="100% 100%";
		    }
	        if(tag=="division")
		    {
		    	para.style.backgroundSize="100% 100%";
		    }
		    if(tag=="list")
		    {		   
		       para.tabIndex='';
		       para.style.border="1px solid black";
		       para.style.overflow="hidden";
		       para.style.backgroundSize="100% 100%";
		    }
		    if(tag=="audio")
		    {		
		        para.controls='controls';
		        para.style.boxShadow="0px 0px 0px 0px black";
		        para.style.backgroundSize="100% 100%";
	        }
		    if(tag=="video")
		    {		
		    	para.controls='controls';
		    	para.style.backgroundSize="100% 100%";
	        }
			para.style.backgroundImage="";
			para.style.backgroundColor='transparent';
			para.style.color="black";
			para.style.fontSize="16px";
		    para.style.boxShadow="0px 0px 0px 0px black";
		    para.style.textShadow="0px 0px 0px 0px black";
			para.style.borderRadius="0px";
			
			initialize_mover();
		}
		reload_tools();
		
	    $("#mover1").draggable({cancel:'',containment: "#editor",axis: ""});
	    $("#mover2").draggable({cancel:'',containment: "#editor",axis: ""});
	    $("#mover3").draggable({cancel:'',containment: "#editor",axis: ""});
	    $("#mover4").draggable({cancel:'',containment: "#editor",axis: ""});
	    $("#mover5").draggable({cancel:'',containment: "#editor"});
	}
	
	
	
	
	//----------- Code for re-editing the submitted elements
	function re_edit()
	{	
			reload_tools();
	
		    if(tag=="PRE")
			{	
			    var att=document.getElementById(temp_id).attributes;
				
				var text_content=document.getElementById(temp_id).innerHTML;
				
                para = document.createElement("textarea");
				tag='text';
                var node = document.createTextNode(text_content);
                para.appendChild(node);
                document.getElementById(temp_id).parentNode.appendChild(para);
				
				document.getElementById(temp_id).parentNode.removeChild(document.getElementById(temp_id));

				for(var i=0;i<att.length;i++)
				{
				    switch(att[i].name)
					{
				        case 'id' : para.id=att[i].value;
						            break;
									
						case 'style' : var str=att[i].value;
									   var arr_line=[];
									   arr_line=str.split(';');
									   for(var i=0;i<arr_line.length;i++)
									   {
									       if(arr_line[i]!='')
										   {
										      var arr_key_val=arr_line[i].split(':');
                                              switch(arr_key_val[0].trim())
                                              {
                                                 case 'position' : para.style.position=arr_key_val[1]; break;
												 case 'border' : para.style.border=arr_key_val[1]; break;
												 case 'border-radius' : para.style.borderRadius=arr_key_val[1]; break;
												 case 'border-width' : para.style.borderWidth=arr_key_val[1]; break;
												 case 'border-style' : para.style.borderStyle=arr_key_val[1]; break;
												 case 'border-color' : para.style.borderColor=arr_key_val[1]; break;												 
												 case 'color' : para.style.color=arr_key_val[1]; break;
												 case 'font-family' : para.style.fontFamily=arr_key_val[1]; break;
												 case 'font-size' : para.style.fontSize=arr_key_val[1]; break;
												 case 'background-image' : var temp_arr=arr_line[i].split('url'); para.style.backgroundImage="url"+temp_arr[1]; break;
												 case 'left' : para.style.left=parseFloat(arr_key_val[1]); break;
												 case 'top' : para.style.top=parseFloat(arr_key_val[1]); break;
												 case 'width' : para.style.width=arr_key_val[1]; break;
												 case 'height' : para.style.height=arr_key_val[1]; break;
												 case 'max-width' : para.style.maxWidth=arr_key_val[1]; break;
												 case 'background-color' : para.style.backgroundColor=arr_key_val[1]; break;
												 case 'background-repeat' : para.style.backgroundRepeat=arr_key_val[1]; break;
												 case 'box-shadow' : para.style.boxShadow=arr_key_val[1]; break;
												 case 'text-shadow' : para.style.textShadow=arr_key_val[1]; break;						
												 default : break;
                                              }	
										   }
									   }
						               break;
									
						default   : break;
					}
				}
				para.style.backgroundSize="100% 100%";
				para.style.resize="none";
				if((para.style.borderWidth.split(" ")).length==4)
				{
				    para.style.width=(parseFloat(para.style.width)+parseFloat($("#"+temp_id).css('borderLeftWidth'))+parseFloat($("#"+temp_id).css('borderRightWidth')))+'px';
				    para.style.height=(parseFloat(para.style.height)+parseFloat($("#"+temp_id).css('borderTopWidth'))+parseFloat($("#"+temp_id).css('borderBottomWidth')))+2+'px'; 
				}
				
			    if(parseInt(document.getElementById(temp_id).style.border)!=0)
			    {
				     para.style.width=parseFloat(para.style.width)+(2*parseInt($("#"+temp_id).css('border')))+'px';
					 para.style.height=parseFloat(para.style.height)+(2*parseInt($("#"+temp_id).css('border')))+text_indent_top+'px';
					 
				     para.style.top=parseFloat($("#"+temp_id).css('top'))+parseFloat($("#"+temp_id).css('font-size'))+'px';
				}
				else
				{ 
                     document.getElementById(temp_id).style.top=parseFloat($("#"+temp_id).css('top'))+parseFloat($("#"+temp_id).css('font-size'))-padding_top+'px';                     
                     document.getElementById(temp_id).style.left=parseFloat($("#"+temp_id).css('left'))-padding_left+'px';
					 
					 document.getElementById(temp_id).style.border="1px solid gray";
				}
			}
			
			     if(tag=='list')
			     {
				       document.getElementById(temp_id).style.fontSize="16px";
					   document.getElementById(temp_id).style.fontFamily="Times New Roman";
					   
				       $("#list_style_table").show();
					   $("#blinker").show();
					   $("#dec_indent").animate({opacity:'0.5'});
					   
					   var no_list_str=document.getElementById(temp_id).childNodes[0].id;
					   no_list=no_list_str.substring(no_list_str.length-2,no_list_str.length-1);
					   inc_dec_list[0]=0;
					   for(var i=0;i<list_max_indent.length;i++)
					   {
					      if(("temp"+list_max_indent[i][0])==temp_id)
					         inc_dec_list[1]=list_max_indent[i][1];
					   }
                       t_count=0;
					   
					   para.tabIndex="";
					   temp_l_id=document.getElementById(temp_id).childNodes[0].id;
	                   
                       individual_list_para=document.createElement("li");
                       document.getElementById(temp_l_id).appendChild(individual_list_para);
                       
                       list_string='';
					   
					   if(document.getElementById(temp_id).parentNode.id=='editor')
					   {
                           document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).style.borderLeftWidth)+'px';
                           document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+parseFloat(document.getElementById(temp_id).style.borderTopWidth)+'px';
					       
		                   document.getElementById('list_style_table').style.left=parseInt(document.getElementById(temp_id).style.left)+((document.getElementById("list_style_table").clientWidth-parseFloat(document.getElementById(temp_id).style.width))/2*(-1))+'px';
		                   document.getElementById('list_style_table').style.top=parseInt(document.getElementById(temp_id).style.top)+20+parseInt(document.getElementById(temp_id).style.height)+'px';
					   
		                   if(parseInt(document.getElementById("blinker").style.top)>=(parseInt(document.getElementById(temp_id).style.height)+$("#"+temp_id).position().top-parseInt(document.getElementById("blinker").style.height)))
		                   {
		                      document.getElementById(temp_id).style.height=parseInt(document.getElementById(temp_id).style.height)+100+'px';
                           
		                      document.getElementById('list_style_table').style.top=parseInt(document.getElementById('list_style_table').style.top)+100+'px';
		                   }
					   }
					   else
					   {
					       document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+parseFloat(document.getElementById(temp_id).style.borderLeftWidth)+'px';
					       document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)+parseFloat(document.getElementById(temp_id).style.borderTopWidth)+'px';
						   
		                   document.getElementById('list_style_table').style.left=parseInt(document.getElementById(temp_id).style.left)+((document.getElementById("list_style_table").clientWidth-parseFloat(document.getElementById(temp_id).style.width))/2*(-1))+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+'px';
		                   document.getElementById('list_style_table').style.top=parseInt(document.getElementById(temp_id).style.top)+20+parseInt(document.getElementById(temp_id).style.height)+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)+'px';
					   
		                   if(parseInt(document.getElementById("blinker").style.top)>=(parseInt(document.getElementById(temp_id).style.height)+$("#"+temp_id).position().top-parseInt(document.getElementById("blinker").style.height)+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)))
		                   {
		                      document.getElementById(temp_id).style.height=parseInt(document.getElementById(temp_id).style.height)+100+'px';
                           
		                      document.getElementById('list_style_table').style.top=parseInt(document.getElementById('list_style_table').style.top)+100+'px';
		                   }
					   }
					  
					 
			            if(parseInt(document.getElementById(temp_id).style.border)==0)
			            {
			                document.getElementById(temp_id).style.left=parseInt(document.getElementById(temp_id).style.left)-1+'px';
			                document.getElementById(temp_id).style.top=parseInt(document.getElementById(temp_id).style.top)-1+'px';
			                document.getElementById(temp_id).style.border="1px solid gray";
						}
				 }
			     else if(tag=='A'||tag=='BUTTON')
			           {
					       if(tag=='BUTTON')
						   {
			                   if(parseInt(document.getElementById(temp_id).style.border)==0)
			                   {
			                      document.getElementById(temp_id).style.left=parseInt(document.getElementById(temp_id).style.left)-1+'px';
			                      document.getElementById(temp_id).style.top=parseInt(document.getElementById(temp_id).style.top)-1+'px';
			                      document.getElementById(temp_id).style.border="1px solid gray";
							   }
						       
			                   initialize_mover();	
			                   $('#mover1').show();
	                           $('#mover2').show();
	                           $('#mover3').show();
	                           $('#mover4').show();
	                           $('#mover5').show();
	                           $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	                           $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	                           $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	                           $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		                       $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		                       											  $("#editor").position().top,
		                       											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		                       											  $("#editor").position().top+parseInt($("#editor").css('height'))
		                       											  ],axis:""});
						   }
						   else
						   {
						       if(para.childNodes[0].tagName=='IMG')
							   {
			                        if(parseInt(document.getElementById(temp_id).style.border)==0)
			                        {
			                           document.getElementById(temp_id).style.left=parseInt(document.getElementById(temp_id).style.left)-1+'px';
			                           document.getElementById(temp_id).style.top=parseInt(document.getElementById(temp_id).style.top)-1+'px';
			                           document.getElementById(temp_id).style.border="1px solid gray";
							        }
						            
			                        initialize_mover();	
			                        $('#mover1').show();
	                                $('#mover2').show();
	                                $('#mover3').show();
	                                $('#mover4').show();
	                                $('#mover5').show();
	                                $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	                                $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	                                $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	                                $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		                            $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		                            											  $("#editor").position().top,
		                            											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		                            											  $("#editor").position().top+parseInt($("#editor").css('height'))
		                            											  ],axis:""});
							   }
							   else
							   {
			                       $("#"+temp_id).css({"cursor":"move"});
			                       $("#"+temp_id).draggable({cancel:'',containment: "#editor"});
							   }
						   }
						   
						   $('#save_cancel').show();
			           }
					   else
			           {
			                if(parseInt(document.getElementById(temp_id).style.border)==0)
			                {
			                   document.getElementById(temp_id).style.left=parseInt(document.getElementById(temp_id).style.left)-1+'px';
			                   document.getElementById(temp_id).style.top=parseInt(document.getElementById(temp_id).style.top)-1+'px';
			                   document.getElementById(temp_id).style.border="1px solid gray";
							}
						 
			                initialize_mover();	
			                $('#mover1').show();
	                        $('#mover2').show();
	                        $('#mover3').show();
	                        $('#mover4').show();
	                        $('#mover5').show();
							if(tag=="AUDIO")
							{
	                            $("#mover1").draggable({cancel:'',containment: "#editor",axis: "x"});	
	                            $("#mover2").draggable({cancel:'',containment: "#editor",axis: "x"});
	                            $("#mover3").draggable({cancel:'',containment: "#editor",axis: "x"});
	                            $("#mover4").draggable({cancel:'',containment: "#editor",axis: "x"});
		                        $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		                        											  $("#editor").position().top,
		                        											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		                        											  $("#editor").position().top+parseInt($("#editor").css('height'))
		                        											  ],axis:""});
			   				}
							else
							{
	                            $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	                            $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	                            $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	                            $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		                        $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		                        											  $("#editor").position().top,
		                        											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		                        											  $("#editor").position().top+parseInt($("#editor").css('height'))
		                        											  ],axis:""});
							}
				  	      
				  	        $('#save_cancel').show();
			           }
					   
	    if(tag=="AUDIO" || tag=="VIDEO" || tag=="IMG" || tag=='DIV' || (tag=='A' && para.childNodes[0].tagName=='IMG'))
	    {
	           $('#div_image').show();
	           $('#div_color').show();
	           $('#text_color').hide();
	           $('#text_styling').hide();
	           $('#text_shadowing').hide();
	           $('#bordering').show();
	           $('#box_shadowing').show();
	    }
	    else
	    {
	           $('#div_image').show();
	           $('#div_color').show();
	           $('#text_color').show();
	           $('#text_styling').show();
	           $('#text_shadowing').show();
	           $('#bordering').show();
	           $('#box_shadowing').show();
	    }
	}
	
	
	
	
	
	//----------- Code for reloading the 'tools_div' style elements
	function reload_tools()
	{
		document.getElementById("myFile").value='';
		document.getElementById("myFile1").value='';
		document.getElementById("myFile2").value='';
		document.getElementById("myFile3").value='';
		document.getElementById("button_img").value='';
		
        document.getElementById("fbar").value='';
		document.getElementById("text_size").style.left="0px";
		
		document.getElementById("border_size").style.left="0px";
		document.getElementById("border_radius_size").style.left="0px";
		document.getElementById("border").value='All borders';
	    document.getElementById("border_style").value='solid';
		document.getElementById("border_radius").value='All Edges';
		
		document.getElementById("outer").checked=true;
		document.getElementById("blur_shadow_size").style.left="0px";
		document.getElementById("spread_shadow_size").style.left="0px";
		document.getElementById("h_shadow_size").style.left="51px";
		document.getElementById("v_shadow_size").style.left="51px";
		
		document.getElementById("text_blur_shadow_size").style.left="0px";
		document.getElementById("text_h_shadow_size").style.left="51px";
		document.getElementById("text_v_shadow_size").style.left="51px";
		//document.getElementById("background_style").value='initial';                 --NA
		
		
	    h_shadow_size_pre=parseInt(document.getElementById("h_shadow_size").style.left);
	    v_shadow_size_pre=parseInt(document.getElementById("v_shadow_size").style.left);
	    text_h_shadow_size_pre=parseInt(document.getElementById("text_h_shadow_size").style.left);
	    text_v_shadow_size_pre=parseInt(document.getElementById("text_v_shadow_size").style.left);
	    h_shadow_w=0;
	    v_shadow_w=0;
	    blur_shadow_size_pre=0;
	    blur_w=0;
	    spread_shadow_pre=0;
	    spread_w=0;
	    blur_shadow_color='black';
	    text_h_shadow_w=0;
	    text_v_shadow_w=0;
	    text_blur_shadow_size_pre=0;
	    text_blur_w=0;
	    border_radius=0;
	    border_pre=5;
	    text_blur_shadow_color='black';	
		border_temp='All borders';
		border_style_temp='solid';
		border_edge='All Edges';
		shadow_str='';
		shadow_style='';
		
		inc_dec_list=[];
		t_count=0;
		no_list=list_max_indent.length;
	}
	
	
	
	
	
	//------------- Code for the scroller in 'tools_div' division
	var ratio=0.0;
	
	var sht=0;
	var cht=0;
    var cht_rep=0.0;
    var sht_rep=0;
	var scroller_top_initial;
	function scroll_size()
	{
		sht=document.getElementById("tools_style").scrollHeight;
		cht=document.getElementById("tools_style").clientHeight;
		ratio=sht/cht;
		sht_rep=parseFloat($("#scroller").css('height'));
		cht_rep=sht_rep/ratio;
		document.getElementById("scrollBar").style.height=cht_rep;
		ratio=sht/sht_rep;
	}
    function scroller_drag()
    {
        var scroller_top=parseFloat($("#scrollBar").css('top'))-scroller_top_initial;
        var scroller_height=parseFloat($("#scroller").css('height'));
     
        var r1=scroller_top/scroller_height;
     
        var client_height=parseFloat(document.getElementById("tools_style").scrollHeight);
        var sc=r1*client_height;
        $("#tools_style").scrollTop(sc);
    }
    function scroller()
    {
        var evt=window.event;
        var delta=evt.wheelDelta ;        //it returns '-120' if scrolled down and '120' if scrolled up
		var t;
		var scroll_t;
		
        //var sht=document.getElementById("tools_style").scrollHeight;
        //var cht=document.getElementById("tools_style").clientHeight;
	
        if(delta==-120)
        {
        t=$("#tools_style").scrollTop()+40;
        $("#tools_style").scrollTop(t);
		scroll_t=$("#tools_style").scrollTop();
		var t1=scroll_t/sht;

        var x1=t1*sht_rep;
		document.getElementById("scrollBar").style.top=(scroller_top_initial+x1)+"px";
        }
        else
        {
        t=$("#tools_style").scrollTop()-40;
        $("#tools_style").scrollTop(t);
		scroll_t=$("#tools_style").scrollTop();
		var t1=scroll_t/sht;

        var x1=t1*sht_rep;
		document.getElementById("scrollBar").style.top=(scroller_top_initial+x1)+"px";
		}
		evt.preventDefault();
    }
	
	
	
	
	
	
	//------------- Code for the scroller1 in 'tools' division	
	var ratio1=0.0;
	
	var sht1=0;
	var cht1=0;
    var cht_rep1=0.0;
    var sht_rep1=0;
	var scroller_top_initial1;
	function scroll_size1()
	{
		sht1=document.getElementById("tools").scrollHeight;
		cht1=document.getElementById("tools").clientHeight;
		ratio1=sht1/cht1;
		sht_rep1=parseFloat($("#scroller1").css('height'));
		cht_rep1=sht_rep1/ratio1;
		document.getElementById("scrollBar1").style.height=cht_rep1;
		ratio1=sht1/sht_rep1;
	}
    function scroller_drag1()
    {
        var scroller_top=parseFloat($("#scrollBar1").css('top'))-scroller_top_initial1;
        var scroller_height=parseFloat($("#scroller1").css('height'));
     
        var r1=scroller_top/scroller_height;
     
        var client_height=parseFloat(document.getElementById("tools").scrollHeight);
        var sc=r1*client_height;
        $("#tools").scrollTop(sc);
    }	
    function scroller1()
    {
        var evt=window.event;
        var delta=evt.wheelDelta ;        //it returns '-120' if scrolled down and '120' if scrolled up
		var t;
		var scroll_t;
	
        if(delta==-120)
        {
        t=$("#tools").scrollTop()+40;
        $("#tools").scrollTop(t);
		scroll_t=$("#tools").scrollTop();
		var t1=scroll_t/sht1;

        var x1=t1*sht_rep1;
		document.getElementById("scrollBar1").style.top=(scroller_top_initial1+x1)+"px";
        }
        else
        {
        t=$("#tools").scrollTop()-40;
        $("#tools").scrollTop(t);
		scroll_t=$("#tools").scrollTop();
		var t1=scroll_t/sht1;

        var x1=t1*sht_rep1;
		document.getElementById("scrollBar1").style.top=(scroller_top_initial1+x1)+"px";
		}
		evt.preventDefault();
    }	
	
	
	
	
	
	//------------- Text style
    function changefont() 
    {
        var x = document.getElementById("fbar").value;
        document.getElementById(temp_id).style.fontFamily=x;
    }
	var text_pre;
    function textsize(this1)
    {
	    if(parseFloat(this1.style.left)>text_pre)
	    {
	        var w=parseFloat($("#"+temp_id).css('fontSize'))+(parseFloat(this1.style.left)-text_pre);
	        para.style.fontSize=w+"px";
	    	text_pre=parseFloat(this1.style.left);
	    }
	    else
	    {
	        var w=parseFloat($("#"+temp_id).css('fontSize'))-(text_pre-parseFloat(this1.style.left));
	        para.style.fontSize=w+"px";
	    	text_pre=parseFloat(this1.style.left);
	    }
    }		
	
	
	
	
	
	//------------ Border style
    var border_temp='All borders';
	var border_style_temp='solid';
    function border(this1)
    {
        border_temp=this1.value;
	   	
		document.getElementById("border_size").style.left="0px";
		document.getElementById("border_radius_size").style.left="0px";
	    document.getElementById("border_style").value='solid';
		document.getElementById("border_radius").value='All Edges';
    }
    function changeborderstyle(this1)
    {
	   border_style_temp=this1.value;
       if(border_temp=="All borders")
              document.getElementById(temp_id).style.borderStyle=border_style_temp;
       if(border_temp=="Top border")
              document.getElementById(temp_id).style.borderTopStyle=border_style_temp;
       if(border_temp=="Bottom border")
              document.getElementById(temp_id).style.borderBottomStyle=border_style_temp;
       if(border_temp=="Left border")
              document.getElementById(temp_id).style.borderLeftStyle=border_style_temp;
       if(border_temp=="Right border")
              document.getElementById(temp_id).style.borderRightStyle=border_style_temp;
	   
	    if(document.getElementById(temp_id).style.borderWidth=="")
	    {
	        document.getElementById(temp_id).style.borderWidth="5px";
	        document.getElementById("border_size").style.left="5px";
	    }
    }
	var border_pre=5;
    function changebordersize(this1)
    {
	    if(parseFloat(this1.style.left)>border_pre)
	    {
            if(border_temp=="All borders")
            {
	            var w=parseFloat($("#"+temp_id).css('borderWidth'))+(parseFloat(this1.style.left)-border_pre);
	            para.style.borderWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);	    
		    }
            if(border_temp=="Top border")
            {
	            var w=parseFloat($("#"+temp_id).css('borderTopWidth'))+(parseFloat(this1.style.left)-border_pre);
	            para.style.borderTopWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);
			}
            if(border_temp=="Bottom border")
            {
	            var w=parseFloat($("#"+temp_id).css('borderBottomWidth'))+(parseFloat(this1.style.left)-border_pre);
	            para.style.borderBottomWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);
			}
            if(border_temp=="Left border")
            {
	            var w=parseFloat($("#"+temp_id).css('borderLeftWidth'))+(parseFloat(this1.style.left)-border_pre);
	            para.style.borderLeftWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);
			}
            if(border_temp=="Right border")
            {
	            var w=parseFloat($("#"+temp_id).css('borderRightWidth'))+(parseFloat(this1.style.left)-border_pre);
	            para.style.borderRightWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);
			}
	    }
	    else
	    {
            if(border_temp=="All borders")
            {
	            var w=parseFloat($("#"+temp_id).css('borderWidth'))-(border_pre-parseFloat(this1.style.left));
	            para.style.borderWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);    
		    }
            if(border_temp=="Top border")
            {
	            var w=parseFloat($("#"+temp_id).css('borderTopWidth'))-(border_pre-parseFloat(this1.style.left));
	            para.style.borderTopWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);  
			}
            if(border_temp=="Bottom border")
            {
	            var w=parseFloat($("#"+temp_id).css('borderBottomWidth'))-(border_pre-parseFloat(this1.style.left));
	            para.style.borderBottomWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);  
			}
            if(border_temp=="Left border")
            {
	            var w=parseFloat($("#"+temp_id).css('borderLeftWidth'))-(border_pre-parseFloat(this1.style.left));
	            para.style.borderLeftWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);  
			}
            if(border_temp=="Right border")
            {
	            var w=parseFloat($("#"+temp_id).css('borderRightWidth'))-(border_pre-parseFloat(this1.style.left));
	            para.style.borderRightWidth=w+"px";
	    	    border_pre=parseFloat(this1.style.left);  
			}
	    }
		if(tag!='text' && tag!='BUTTON') initialize_mover();
    }
	var border_edge='All Edges';
	var border_radius=0;
	function changeborderradius(this1)
	{
	    border_edge=this1.value;
	}
	function changeborderradiussize(this1)
	{
	    if(parseFloat(this1.style.left)>border_radius)
	    {
            if(border_edge=="All Edges")
            {
	            var w=parseFloat($("#"+temp_id).css('borderRadius'))+(parseFloat(this1.style.left)-border_radius);
	            para.style.borderRadius=w+"px";
	    	    border_radius=parseFloat(this1.style.left);	    
		    }
            if(border_edge=="Top Left Edge")
            {
	            var w=parseFloat($("#"+temp_id).css('borderTopLeftRadius'))+(parseFloat(this1.style.left)-border_radius);
	            para.style.borderTopLeftRadius=w+"px";
	    	    border_radius=parseFloat(this1.style.left);
			}
            if(border_edge=="Top Right Edge")
            {
	            var w=parseFloat($("#"+temp_id).css('borderTopRightRadius'))+(parseFloat(this1.style.left)-border_radius);
	            para.style.borderTopRightRadius=w+"px";
	    	    border_radius=parseFloat(this1.style.left);
			}
		}
		else
		{
            if(border_edge=="All Edges")
            {
	            var w=parseFloat($("#"+temp_id).css('borderRadius'))-(border_radius-parseFloat(this1.style.left));
	            para.style.borderRadius=w+"px";
	    	    border_radius=parseFloat(this1.style.left);	    
		    }
            if(border_edge=="Top Left Edge")
            {
	            var w=parseFloat($("#"+temp_id).css('borderTopLeftRadius'))-(border_radius-parseFloat(this1.style.left));
	            para.style.borderTopLeftRadius=w+"px";
	    	    border_radius=parseFloat(this1.style.left);
			}
            if(border_edge=="Top Right Edge")
            {
	            var w=parseFloat($("#"+temp_id).css('borderTopRightRadius'))-(border_radius-parseFloat(this1.style.left));
	            para.style.borderTopRightRadius=w+"px";
	    	    border_radius=parseFloat(this1.style.left);
			}
		}
	}
	
	
	
	
	
  //---------- List creation code starts HERE
  var individual_list_para;
  var list_string='';
  var div_show_cond=true;

  var temp_l_id;
  var no_list=0;                             //total no. of individual lists
  var t_count=0;
  var inc_dec_list=[];
  
  var char_width=[];
  
  var backspace_cond=2;
  var list_key;
  
  var last_character_width=[];
  var last_character_pointer=-1;
  function div_show()
  { 
       if(div_show_cond)
       {
  	      document.getElementById("blinker").style.visibility = "hidden";
          div_show_cond=false;
       }
       else
       {
  	      document.getElementById("blinker").style.visibility = "visible";
          div_show_cond=true;
       }
  }
  setInterval("div_show()",500);
  function initialize_list()
  {
     var list_para=document.createElement('ol');
     list_para.id='list'+no_list+(inc_dec_list[t_count]);
     temp_l_id='list'+no_list+(inc_dec_list[t_count]);
     document.getElementById(temp_id).appendChild(list_para);
	 
     individual_list_para=document.createElement("li");
     document.getElementById(temp_l_id).appendChild(individual_list_para);
    
     list_string='';
	 
     document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+'px';
     document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+'px';
  }
  function increase_decrease_list(v)
  {
      var max=0;
	  var s1ors2;
      if(v==1)
	  {
	     $("#dec_indent").animate({opacity:'1'});

	     document.getElementById(temp_l_id).removeChild(individual_list_para);
	  
         t_count=t_count+1;
		 for(var i=0;i<inc_dec_list.length;i++)
		 {
		    if(max<inc_dec_list[i])
			    max=inc_dec_list[i];
		 }
		 inc_dec_list[t_count]=max+1;
		 
		 //------ store the max value
		 list_max_indent[(no_list-1)][1]=max+1;
		 
         var list_para=document.createElement("ol");
         var t="list"+no_list+(inc_dec_list[t_count]);
         document.getElementById("list"+no_list+(inc_dec_list[t_count-1])).appendChild(list_para);
		 
         list_para.id=t;
         temp_l_id=t;
		 
         individual_list_para=document.createElement("li");
         document.getElementById(temp_l_id).appendChild(individual_list_para);
  		 
					   if(document.getElementById(temp_id).parentNode.id=='editor')
					   {
                           document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).style.borderLeftWidth)+'px';
                           document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+parseFloat(document.getElementById(temp_id).style.borderTopWidth)+'px';
					   
			               if(parseInt(document.getElementById("blinker").style.left)>(parseInt(document.getElementById(temp_id).style.width)+parseInt(document.getElementById(temp_id).style.left)+parseInt(document.getElementById("blinker").style.width)))
		                   {
		                       document.getElementById(temp_id).style.width=parseInt(document.getElementById(temp_id).style.width)+100+'px';
			               	   document.getElementById('list_style_table').style.left=parseInt(document.getElementById(temp_id).style.left)+((document.getElementById("list_style_table").clientWidth-parseFloat(document.getElementById(temp_id).style.width))/2*(-1))+'px';
		                   }
					   }
					   else
					   {
					       document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+parseFloat(document.getElementById(temp_id).style.borderLeftWidth)+'px';
					       document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)+parseFloat(document.getElementById(temp_id).style.borderTopWidth)+'px';

		                   if(parseInt(document.getElementById("blinker").style.left)>(parseInt(document.getElementById(temp_id).style.width)+parseInt(document.getElementById(temp_id).style.left)+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)))
		                   {
		                       document.getElementById(temp_id).style.width=parseInt(document.getElementById(temp_id).style.width)+100+'px';
			               	   document.getElementById('list_style_table').style.left=parseInt(document.getElementById(temp_id).style.left)+((document.getElementById("list_style_table").clientWidth-parseFloat(document.getElementById(temp_id).style.width))/2*(-1))+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+'px';
		                   }
					   }
		 
  		 list_string='';
	  }
      else
	  {

	     document.getElementById(temp_l_id).removeChild(individual_list_para);
		 
         t_count=t_count-1;
		 
		 temp_l_id=document.getElementById("list"+no_list+inc_dec_list[t_count]).id;
		 
         individual_list_para=document.createElement("li");
         document.getElementById(temp_l_id).appendChild(individual_list_para);
		 
					if(document.getElementById(temp_id).parentNode.id=='editor')
					{
                        document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).style.borderLeftWidth)+'px';
                        document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+parseFloat(document.getElementById(temp_id).style.borderTopWidth)+'px';
					}
					else
					{
					    document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+parseFloat(document.getElementById(temp_id).style.borderLeftWidth)+'px';
					    document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)+parseFloat(document.getElementById(temp_id).style.borderTopWidth)+'px';
					}
					   
  		 list_string='';
			  
		 if(t_count==0)
		 {
               $("#dec_indent").animate({opacity:'0.5'});
		 }
	  }
	  last_character_pointer=-1;
   }
  function change_list_style(this1)
  {
     var tag_name=document.getElementById("list"+no_list+inc_dec_list[t_count]).tagName;
	 var list_type='';
	 if(tag_name=='UL')
	 {
	    if(this1.value=='circle' || this1.value=='disc' || this1.value=='square' || this1.value=='none')
		{
		    var t=document.getElementById(temp_l_id);
            t.type=this1.value;
			return;
		}
		else
	        list_type='ol';
	 }
	 else
	 {
	    if(this1.value!='circle' && this1.value!='disc' && this1.value!='square' && this1.value!='none')
		{
		    var t=document.getElementById(temp_l_id);
            t.type=this1.value;
			return;
		}
		else
		    list_type='ul';
	 }
	      if(t_count==0)
		  {
	           var list_para=document.createElement(list_type);	
			   var last_node=individual_list_para.innerHTML;
			   document.getElementById(temp_l_id).removeChild(individual_list_para);			   
			   list_para.innerHTML=document.getElementById(temp_l_id).innerHTML;
			   
			   document.getElementById(temp_id).removeChild(document.getElementById(temp_l_id));
			   
			   list_para.id=temp_l_id;
			   document.getElementById(temp_id).appendChild(list_para);
			   
	           individual_list_para=document.createElement("li");
               var text=document.createTextNode(last_node);
               individual_list_para.appendChild(text);
			   document.getElementById(temp_l_id).appendChild(individual_list_para);
			   
		  }
		  else
		  {
	           var list_para=document.createElement(list_type);	
			   var last_node=individual_list_para.innerHTML;
			   document.getElementById(temp_l_id).removeChild(individual_list_para);			   
			   list_para.innerHTML=document.getElementById(temp_l_id).innerHTML;
			   
			   document.getElementById("list"+no_list+(inc_dec_list[t_count-1])).removeChild(document.getElementById(temp_l_id));
			   
			   list_para.id=temp_l_id;
			   document.getElementById("list"+no_list+(inc_dec_list[t_count-1])).appendChild(list_para);
			   
	           individual_list_para=document.createElement("li");
               var text=document.createTextNode(last_node);
               individual_list_para.appendChild(text);
			   document.getElementById(temp_l_id).appendChild(individual_list_para);
			   
		  }
		  
          var t=document.getElementById(temp_l_id);
          t.type=this1.value;
  }
  function list_key_pressed() 
  {
     if(list_key==9) return;
	 
     if(list_key==13)  //ENTER
     {
         individual_list_para=document.createElement("li");
         document.getElementById(temp_l_id).appendChild(individual_list_para);
  	  
  	     list_string='';
		 
		 last_character_pointer=-1;
		 
		 if(document.getElementById(temp_id).parentNode.id=='editor')
		 {
            document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).style.borderLeftWidth)+'px';
            document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+parseFloat(document.getElementById(temp_id).style.borderTopWidth)+'px';
		 
		    if(parseInt(document.getElementById("blinker").style.top)>=(parseInt(document.getElementById(temp_id).style.height)+$("#"+temp_id).position().top-parseInt(document.getElementById("blinker").style.height)))
		    {
		       document.getElementById(temp_id).style.height=parseInt(document.getElementById(temp_id).style.height)+100+'px';
            
		       document.getElementById('list_style_table').style.top=parseInt(document.getElementById('list_style_table').style.top)+100+'px';
		    }
		 }
		 else
		 {
		    document.getElementById("blinker").style.left=$("#"+temp_id).position().left+$(individual_list_para).position().left+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+parseFloat(document.getElementById(temp_id).style.borderLeftWidth)+'px';
		    document.getElementById("blinker").style.top=$("#"+temp_id).position().top+$(individual_list_para).position().top+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)+parseFloat(document.getElementById(temp_id).style.borderTopWidth)+'px';
						
		    if(parseInt(document.getElementById("blinker").style.top)>=(parseInt(document.getElementById(temp_id).style.height)+$("#"+temp_id).position().top-parseInt(document.getElementById("blinker").style.height)+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)))
		    {
		       document.getElementById(temp_id).style.height=parseInt(document.getElementById(temp_id).style.height)+100+'px';
            
		       document.getElementById('list_style_table').style.top=parseInt(document.getElementById('list_style_table').style.top)+100+'px';
		    }
		 }
     }
  	 if(list_key==8)  //BACKSPACE
  	 {	 
  	      //console.log("length 0f string----"+list_string+"--"+list_string.length);
  		  list_string=list_string.substr(0,list_string.length-1);
		  if(parseInt(document.getElementById("blinker").style.left)>$(individual_list_para).position().left)
		  {
		       document.getElementById("blinker").style.left=$("#blinker").position().left-last_character_width[last_character_pointer]+'px';
		       last_character_pointer=last_character_pointer-1;
		  }
          //console.log("length 0f string----"+list_string+"--"+list_string.length);
  	 }
     document.getElementById(temp_l_id).removeChild(individual_list_para);
     individual_list_para=document.createElement("li");
     document.getElementById(temp_l_id).appendChild(individual_list_para);
  	 
  	 if(list_key!=8) 
	 {
	    list_string=list_string+String.fromCharCode(list_key);
		last_character_pointer=last_character_pointer+1;
	    last_character_width[last_character_pointer]=char_width[list_key];
		document.getElementById("blinker").style.left=$("#blinker").position().left+last_character_width[last_character_pointer]+'px';
		
		if(document.getElementById(temp_id).parentNode.id=='editor')
		{
		    if(parseInt(document.getElementById("blinker").style.left)>(parseInt(document.getElementById(temp_id).style.width)+parseInt(document.getElementById(temp_id).style.left)+parseInt(document.getElementById("blinker").style.width)))
		    {
		        document.getElementById(temp_id).style.width=parseInt(document.getElementById(temp_id).style.width)+100+'px';
				document.getElementById('list_style_table').style.left=parseInt(document.getElementById(temp_id).style.left)+((document.getElementById("list_style_table").clientWidth-parseFloat(document.getElementById(temp_id).style.width))/2*(-1))+'px';
		    }
		}
		else
		{
		    if(parseInt(document.getElementById("blinker").style.left)>(parseInt(document.getElementById(temp_id).style.width)+parseInt(document.getElementById(temp_id).style.left)+parseInt(document.getElementById("blinker").style.width)+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)))
		    {
		        document.getElementById(temp_id).style.width=parseInt(document.getElementById(temp_id).style.width)+100+'px';
				document.getElementById('list_style_table').style.left=parseInt(document.getElementById(temp_id).style.left)+((document.getElementById("list_style_table").clientWidth-parseFloat(document.getElementById(temp_id).style.width))/2*(-1))+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+'px';
		    }
		}
	 }
  	 
     var text=document.createTextNode(list_string);
     individual_list_para.appendChild(text);
	 
     return 1;	 
  }
  function caller_eg()
  {
      if(backspace_cond==0)
      {    
          list_key_pressed();
      }
  }

	
	
	
	
	
	//----------------- Box-shadow style
	var h_shadow_size_pre;
	var h_shadow_w=0;
	var v_shadow_size_pre;
	var v_shadow_w=0;
	var blur_shadow_size_pre=0;
	var blur_w=0;
	var spread_shadow_pre=0;
	var spread_w=0;
	var blur_shadow_color='black';	
	var shadow_str='';                                // For multiple shadow coloring
    function changeshadow(this1)
    {
        if(this1.id=='h_shadow_size')
		{
	        if(parseFloat(this1.style.left)>h_shadow_size_pre)
	        {
	            h_shadow_w=h_shadow_w+(parseFloat(this1.style.left)-h_shadow_size_pre);
			    document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
	    	    h_shadow_size_pre=parseFloat(this1.style.left);
	        }
	        else
	        {
	            h_shadow_w=h_shadow_w-(h_shadow_size_pre-parseFloat(this1.style.left));
			    document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
	    	    h_shadow_size_pre=parseFloat(this1.style.left);
	        }
		}
        if(this1.id=='v_shadow_size')
		{
	        if(parseFloat(this1.style.left)>v_shadow_size_pre)
	        {
	            v_shadow_w=v_shadow_w+(parseFloat(this1.style.left)-v_shadow_size_pre);
			    document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
	    	    v_shadow_size_pre=parseFloat(this1.style.left);
	        }
	        else
	        {
	            v_shadow_w=v_shadow_w-(v_shadow_size_pre-parseFloat(this1.style.left));
			    document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
	    	    v_shadow_size_pre=parseFloat(this1.style.left);
	        }
		}
		if(this1.id=='blur_shadow_size')
		{
	        if(parseFloat(this1.style.left)>blur_shadow_size_pre)
	        {
	            blur_w=blur_w+(parseFloat(this1.style.left)-blur_shadow_size_pre);
			    document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
	    	    blur_shadow_size_pre=parseFloat(this1.style.left);
	        }
	        else
	        {
	            blur_w=blur_w-(blur_shadow_size_pre-parseFloat(this1.style.left));
			    document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
	    	    blur_shadow_size_pre=parseFloat(this1.style.left);
	        }
		}
		if(this1.id=='spread_shadow_size')
		{
	        if(parseFloat(this1.style.left)>spread_shadow_pre)
	        {
	            spread_w=spread_w+(parseFloat(this1.style.left)-spread_shadow_pre);
			    document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
	    	    spread_shadow_pre=parseFloat(this1.style.left);
	        }
	        else
	        {
	            spread_w=spread_w-(spread_shadow_pre-parseFloat(this1.style.left));
			    document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
	    	    spread_shadow_pre=parseFloat(this1.style.left);
	        }
		}
    }
    var shadow_style='';
    function changeshadowstyle(this1)
    {
       shadow_style=this1.value;    
       document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;
    }
	
	
	
	
	
	//----------------- text-shadow style
	var text_h_shadow_size_pre;
	var text_h_shadow_w=0;
	var text_v_shadow_size_pre;
	var text_v_shadow_w=0;
	var text_blur_shadow_size_pre=0;
	var text_blur_w=0;
	var text_blur_shadow_color='black';	
	var text_shadow_str='';                          // For multiple shadow coloring
    function changetextshadow(this1)
    {
        if(this1.id=='text_h_shadow_size')
		{
	        if(parseFloat(this1.style.left)>text_h_shadow_size_pre)
	        {
	            text_h_shadow_w=text_h_shadow_w+(parseFloat(this1.style.left)-text_h_shadow_size_pre);
			    document.getElementById(temp_id).style.textShadow=text_h_shadow_w+'px '+text_v_shadow_w+'px '+text_blur_w+'px '+text_blur_shadow_color;
	    	    text_h_shadow_size_pre=parseFloat(this1.style.left);
	        }
	        else
	        {
	            text_h_shadow_w=text_h_shadow_w-(text_h_shadow_size_pre-parseFloat(this1.style.left));
			    document.getElementById(temp_id).style.textShadow=text_h_shadow_w+'px '+text_v_shadow_w+'px '+text_blur_w+'px '+text_blur_shadow_color;
	    	    text_h_shadow_size_pre=parseFloat(this1.style.left);
	        }
		}
        if(this1.id=='text_v_shadow_size')
		{
	        if(parseFloat(this1.style.left)>text_v_shadow_size_pre)
	        {
	            text_v_shadow_w=text_v_shadow_w+(parseFloat(this1.style.left)-text_v_shadow_size_pre);
			    document.getElementById(temp_id).style.textShadow=text_h_shadow_w+'px '+text_v_shadow_w+'px '+text_blur_w+'px '+text_blur_shadow_color;
	    	    text_v_shadow_size_pre=parseFloat(this1.style.left);
	        }
	        else
	        {
	            text_v_shadow_w=text_v_shadow_w-(text_v_shadow_size_pre-parseFloat(this1.style.left));
			    document.getElementById(temp_id).style.textShadow=text_h_shadow_w+'px '+text_v_shadow_w+'px '+text_blur_w+'px '+text_blur_shadow_color;
	    	    text_v_shadow_size_pre=parseFloat(this1.style.left);
	        }
		}
		if(this1.id=='text_blur_shadow_size')
		{
	        if(parseFloat(this1.style.left)>text_blur_shadow_size_pre)
	        {
	            text_blur_w=text_blur_w+(parseFloat(this1.style.left)-text_blur_shadow_size_pre);
			    document.getElementById(temp_id).style.textShadow=text_h_shadow_w+'px '+text_v_shadow_w+'px '+text_blur_w+'px '+text_blur_shadow_color;
	    	    text_blur_shadow_size_pre=parseFloat(this1.style.left);
	        }
	        else
	        {
	            text_blur_w=text_blur_w-(text_blur_shadow_size_pre-parseFloat(this1.style.left));
			    document.getElementById(temp_id).style.textShadow=text_h_shadow_w+'px '+text_v_shadow_w+'px '+text_blur_w+'px '+text_blur_shadow_color;
	    	    text_blur_shadow_size_pre=parseFloat(this1.style.left);
	        }
		}
    }
	
	
	
	
	
	
	//-------------- Code for the movers 'div' for moving & resizing a element
    var mover_radius;
	var text_div_border_left=0.0;
	var text_div_border_right=0.0;
	var text_div_border_top=0.0;
	var text_div_border_bottom=0.0;
	var mover_border;
    function initialize_mover()
	{
      var div_width=parseFloat($("#"+temp_id).css('width'));
      var div_height=parseFloat($("#"+temp_id).css('height'));
	  if(document.getElementById(temp_id).parentNode.id=='editor')
	  {
         var div_left=parseFloat($("#"+temp_id).css('left'));
         var div_top=parseFloat($("#"+temp_id).css('top'));
	  }
	  else
	  {
	     var div_left=parseFloat($("#"+temp_id).css('left'))+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth);
		 var div_top=parseFloat($("#"+temp_id).css('top'))+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth);
	  }
	  
	  if(tag!='text' && tag!='BUTTON')
	  {
	      text_div_border_left=parseFloat($("#"+temp_id).css('borderLeftWidth'));
		  text_div_border_right=parseFloat($("#"+temp_id).css('borderRightWidth'));
		  text_div_border_top=parseFloat($("#"+temp_id).css('borderTopWidth'));
		  text_div_border_bottom=parseFloat($("#"+temp_id).css('borderBottomWidth'));
	  }
	  else
	  {
	      text_div_border_left=0;
		  text_div_border_right=0;
		  text_div_border_top=0;
		  text_div_border_bottom=0;
	  }
      mover_radius=parseFloat($("#mover1").css('border-radius'));
	  mover_border=parseFloat($("#mover1").css('border'));
	  
      document.getElementById("mover1").style.left=(div_left-mover_radius)+'px';
      document.getElementById("mover2").style.left=(div_left+div_width+text_div_border_left+text_div_border_right-(2*mover_border)-mover_radius)+'px';         //border of all the div and text-area = (4*text_div_border)
      document.getElementById("mover3").style.left=(div_left+div_width+text_div_border_left+text_div_border_right-(2*mover_border)-mover_radius)+'px';
      document.getElementById("mover4").style.left=(div_left-mover_radius)+'px';
	  document.getElementById("mover5").style.left=(div_left-mover_radius+(div_width/2))+(text_div_border_left/2)+(text_div_border_right/2)-mover_border+'px';
      
      document.getElementById("mover1").style.top=div_top-mover_radius+'px';	
      document.getElementById("mover2").style.top=div_top-mover_radius+'px';
      document.getElementById("mover3").style.top=div_top+div_height+text_div_border_top+text_div_border_bottom-(2*mover_border)-mover_radius+'px';
      document.getElementById("mover4").style.top=div_top+div_height+text_div_border_top+text_div_border_bottom-(2*mover_border)-mover_radius+'px';
	  document.getElementById("mover5").style.top=div_top-mover_radius+'px';	 	
	}
    function text_move(this1)
    {
	   var d_left=0.0;
	   var d_top=0.0;
       if(this1.id=='mover1')
       {
            d_left=parseFloat($("#mover1").css('left'));
		    d_top=parseFloat($("#mover1").css('top'));
		    
		    document.getElementById("mover4").style.left=d_left+'px';
		    document.getElementById("mover2").style.top=d_top+'px';
			document.getElementById("mover5").style.left=d_left+((parseFloat($("#mover2").css('left'))-d_left)/2)+'px';
			document.getElementById("mover5").style.top=d_top+'px';
			
	        if(document.getElementById(temp_id).parentNode.id=='editor')
	        {
                document.getElementById(temp_id).style.left=d_left+mover_radius+'px';
                document.getElementById(temp_id).style.top=d_top+mover_radius+'px';	
	        }
	        else
	        {
                document.getElementById(temp_id).style.left=d_left+mover_radius-parseFloat(document.getElementById(temp_id).parentNode.style.left)-parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+'px';
                document.getElementById(temp_id).style.top=d_top+mover_radius-parseFloat(document.getElementById(temp_id).parentNode.style.top)-parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)+'px';
	        }

			if(tag=='text' || tag=='BUTTON')
			{
			    document.getElementById(temp_id).style.width=(parseFloat($("#mover2").css('left'))-d_left+text_div_border_left+text_div_border_right+(2*mover_border))+'px';
			    document.getElementById(temp_id).style.height=(parseFloat($("#mover4").css('top'))-d_top+text_div_border_top+text_div_border_bottom+(2*mover_border))+'px';
			}
			else
			{
			    document.getElementById(temp_id).style.width=(parseFloat($("#mover2").css('left'))-d_left-text_div_border_left-text_div_border_right+(2*mover_border))+'px';
			    document.getElementById(temp_id).style.height=(parseFloat($("#mover4").css('top'))-d_top-text_div_border_top-text_div_border_bottom+(2*mover_border))+'px';
			}
       }
       if(this1.id=='mover2')
       { 	   
            d_left=parseFloat($("#mover2").css('left'));
		    d_top=parseFloat($("#mover2").css('top'));
			
		    document.getElementById("mover3").style.left=d_left+'px';
		    document.getElementById("mover1").style.top=d_top+'px';
			document.getElementById("mover5").style.left=parseFloat($("#mover1").css('left'))+((d_left-parseFloat($("#mover1").css('left')))/2)+'px';
			document.getElementById("mover5").style.top=d_top+'px';
			
	        if(document.getElementById(temp_id).parentNode.id=='editor')
	        {
                document.getElementById(temp_id).style.top=d_top+mover_radius+'px';
	        }
	        else
	        {
                document.getElementById(temp_id).style.top=d_top+mover_radius-parseFloat(document.getElementById(temp_id).parentNode.style.top)-parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)+'px';
	        }
			
			if(tag=='text' || tag=='BUTTON')
			{
                document.getElementById(temp_id).style.width=(d_left-parseFloat($("#mover1").css('left'))+text_div_border_left+text_div_border_right+(2*mover_border))+'px';
                document.getElementById(temp_id).style.height=(parseFloat($("#mover3").css('top'))-d_top+text_div_border_top+text_div_border_bottom+(2*mover_border))+'px';			
			}
			else
			{
			    document.getElementById(temp_id).style.width=(d_left-parseFloat($("#mover1").css('left'))-text_div_border_left-text_div_border_right+(2*mover_border))+'px';
			    document.getElementById(temp_id).style.height=(parseFloat($("#mover3").css('top'))-d_top-text_div_border_top-text_div_border_bottom+(2*mover_border))+'px';
            }
       }
       if(this1.id=='mover3')
       {
            d_left=parseFloat($("#mover3").css('left'));
		    d_top=parseFloat($("#mover3").css('top'));
		    
		    document.getElementById("mover2").style.left=d_left+'px';
		    document.getElementById("mover4").style.top=d_top+'px';
			document.getElementById("mover5").style.left=parseFloat($("#mover1").css('left'))+((parseFloat($("#mover2").css('left'))-parseFloat($("#mover1").css('left')))/2)+'px';
			
			if(tag=="text" || tag=='BUTTON')
			{
               document.getElementById(temp_id).style.width=(d_left-parseFloat($("#mover4").css('left'))+text_div_border_left+text_div_border_right+(2*mover_border))+'px';
               document.getElementById(temp_id).style.height=(d_top-parseFloat($("#mover2").css('top'))+text_div_border_top+text_div_border_bottom+(2*mover_border))+'px';			
			}
			else
			{
			   document.getElementById(temp_id).style.width=(d_left-parseFloat($("#mover4").css('left'))-text_div_border_left-text_div_border_right+(2*mover_border))+'px';
			   document.getElementById(temp_id).style.height=(d_top-parseFloat($("#mover2").css('top'))-text_div_border_top-text_div_border_bottom+(2*mover_border))+'px';
			}
	   }
       if(this1.id=='mover4')
       {
            d_left=parseFloat($("#mover4").css('left'));
		    d_top=parseFloat($("#mover4").css('top'));
			
		    document.getElementById("mover1").style.left=d_left+'px';
		    document.getElementById("mover3").style.top=d_top+'px';
			document.getElementById("mover5").style.left=parseFloat($("#mover1").css('left'))+((parseFloat($("#mover2").css('left'))-parseFloat($("#mover1").css('left')))/2)+'px';
			
	        if(document.getElementById(temp_id).parentNode.id=='editor')
	        {
                document.getElementById(temp_id).style.left=d_left+(mover_radius)+'px';	
	        }
	        else
	        {
                document.getElementById(temp_id).style.left=d_left+mover_radius-parseFloat(document.getElementById(temp_id).parentNode.style.left)-parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+'px';
	        }
			
			if(tag=="text" || tag=='BUTTON')
			{
               document.getElementById(temp_id).style.width=(parseFloat($("#mover3").css('left'))-d_left+text_div_border_left+text_div_border_right+(2*mover_border))+'px';
               document.getElementById(temp_id).style.height=(d_top-parseFloat($("#mover1").css('top'))+text_div_border_top+text_div_border_bottom+(2*mover_border))+'px';			
			}
			else
			{
			   document.getElementById(temp_id).style.width=(parseFloat($("#mover3").css('left'))-d_left-text_div_border_left-text_div_border_right+(2*mover_border))+'px';
			   document.getElementById(temp_id).style.height=(d_top-parseFloat($("#mover1").css('top'))-text_div_border_top-text_div_border_bottom+(2*mover_border))+'px';
			}
       }
       if(this1.id=='mover5')
       {
	        if(tag!='text' && tag!='BUTTON')
	        {
	            text_div_border_left=parseFloat($("#"+temp_id).css('borderLeftWidth'));
		        text_div_border_right=parseFloat($("#"+temp_id).css('borderRightWidth'));
		        text_div_border_top=parseFloat($("#"+temp_id).css('borderTopWidth'));
		        text_div_border_bottom=parseFloat($("#"+temp_id).css('borderBottomWidth'));
	        }
	        else
	        {
	            text_div_border_left=0;
		        text_div_border_right=0;
		        text_div_border_top=0;
		        text_div_border_bottom=0;
	        }
			
			
            d_left=parseFloat($("#mover5").css('left'));
		    d_top=parseFloat($("#mover5").css('top'));

			
	        if(document.getElementById(temp_id).parentNode.id=='editor')
	        {
			    document.getElementById(temp_id).style.left=d_left+mover_radius-(parseFloat($("#"+temp_id).css('width'))/2)-(text_div_border_left/2)-(text_div_border_right/2)+'px';
			    document.getElementById(temp_id).style.top=d_top+mover_radius+'px';
			}
			else
			{
			    document.getElementById(temp_id).style.left=d_left+mover_radius-(parseFloat($("#"+temp_id).css('width'))/2)-(text_div_border_left/2)-(text_div_border_right/2)-parseFloat(document.getElementById(temp_id).parentNode.style.left)-parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth)+'px';
			    document.getElementById(temp_id).style.top=d_top+mover_radius-parseFloat(document.getElementById(temp_id).parentNode.style.top)-parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth)+'px';
			}
			
			
            var div_width=parseFloat($("#"+temp_id).css('width'));
            var div_height=parseFloat($("#"+temp_id).css('height'));
	        if(document.getElementById(temp_id).parentNode.id=='editor')
	        {
               var div_left=parseFloat($("#"+temp_id).css('left'));
               var div_top=parseFloat($("#"+temp_id).css('top'));
	        }
	        else
	        {		
	           var div_left=parseFloat($("#"+temp_id).css('left'))+parseFloat(document.getElementById(temp_id).parentNode.style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.borderLeftWidth);
	           var div_top=parseFloat($("#"+temp_id).css('top'))+parseFloat(document.getElementById(temp_id).parentNode.style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.borderTopWidth);
	        }
            mover_radius=parseFloat($("#mover1").css('border-radius'));
	        mover_border=parseFloat($("#mover1").css('border'));

            document.getElementById("mover1").style.left=(div_left-mover_radius)+'px';
            document.getElementById("mover2").style.left=(div_left+div_width+text_div_border_left+text_div_border_right-(2*mover_border)-mover_radius)+'px';         //border of all the div and text-area = (4*text_div_border)
            document.getElementById("mover3").style.left=(div_left+div_width+text_div_border_left+text_div_border_right-(2*mover_border)-mover_radius)+'px';
            document.getElementById("mover4").style.left=(div_left-mover_radius)+'px';
	        document.getElementById("mover5").style.left=(div_left-mover_radius+(div_width/2))+(text_div_border_left/2)+(text_div_border_right/2)-mover_border+'px';
            
            document.getElementById("mover1").style.top=div_top-mover_radius+'px';	
            document.getElementById("mover2").style.top=div_top-mover_radius+'px';
            document.getElementById("mover3").style.top=div_top+div_height+text_div_border_top+text_div_border_bottom-(2*mover_border)-mover_radius+'px';
            document.getElementById("mover4").style.top=div_top+div_height+text_div_border_top+text_div_border_bottom-(2*mover_border)-mover_radius+'px';
	        document.getElementById("mover5").style.top=div_top-mover_radius+'px';	 	
	   }
	   
	   
	   //---- Increase/Decrease height of editor wrt the movers position
	   if(($("#editor").position().top+parseInt($("#editor").css('height')))<=(parseFloat(document.getElementById("mover4").style.top)+parseFloat(document.getElementById("mover4").style.width)+(parseFloat(document.getElementById("mover4").style.border))))
	   {
	       document.getElementById("editor").style.height=(parseFloat(document.getElementById("mover4").style.top)+(parseFloat(document.getElementById("mover4").style.width))+(parseFloat(document.getElementById("mover4").style.border)))-$("#editor").position().top+'px';
	   }
	   else if(((parseFloat(document.getElementById("mover4").style.top)+parseFloat(document.getElementById("mover4").style.width)+(parseFloat(document.getElementById("mover4").style.border)))<($("#editor").position().top+parseFloat($("#editor").css('height')))) && (document.body.scrollHeight>978) && (parseFloat($("#editor").css('height'))>705))
	        {
			    document.getElementById("editor").style.height=(parseFloat(document.getElementById("mover4").style.top)+(parseFloat(document.getElementById("mover4").style.width))+(parseFloat(document.getElementById("mover4").style.border)))-$("#editor").position().top+'px';
			    if((parseFloat($("#editor").css('height'))+273)<document.body.scrollHeight)
				{
				    document.getElementById("editor").style.height=document.body.scrollHeight-273+'px';
				}
				if(parseFloat($("#editor").css('height'))<705)
				{
				    document.getElementById("editor").style.height='705px';
				}
                //console.log(document.body.scrollHeight+'--'+(parseFloat($("#editor").css('height'))+273));
			}
	   
	   
	   //---- Reconfigure mover5 containment
	   $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
	   											      $("#editor").position().top,
	   											      $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
	   											      $("#editor").position().top+parseInt($("#editor").css('height'))
	   											     ],axis:""});
    }

	
	
	
	
	//-------------- Code for custom Context-menu
	var right_clk_temp_id;
	var right_clk_tag;
    function mouse_right_click(event)
    {
        var mouse_x= event.pageX;                          //co-ordinates wrt to whole page
        var mouse_y= event.pageY;
        //var mouse_x= event.clientX;                      //co-ordinates wrt to client ie:relative position
        //var mouse_y= event.clientY;

     
		right_clk_temp_id=event.target.id;
		if(event.target.tagName=='LI' || event.target.tagName=='OL' || event.target.tagName=='UL')
		{
		    right_clk_temp_id=event.target.parentNode.id;            //VIP as the <li> have id='' so get the id of their parents ie: <ul> OR <ol>
		    right_clk_tag='list';	
		}
		else if(event.target.tagName=='DIV' && event.target.id.replace(/[0-9]/g,'')=='temp' && event.target.childNodes.length!=0)
		     {
		         right_clk_tag='list';	
		     }
		     else if(right_clk_temp_id=='')
			      {
			          right_clk_temp_id=event.target.parentNode.id;
					  right_clk_tag=document.getElementById(right_clk_temp_id).tagName;
				  }
				  else
		              right_clk_tag=event.target.tagName;
			
			
        console.log(right_clk_temp_id+"---"+right_clk_tag)
		
        document.getElementById("context_menu").style.left=mouse_x+'px';
        document.getElementById("context_menu").style.top=mouse_y+'px';
        $('#context_menu').show();
    }
    function highlight_context_menu(this1,val)
    {
         if(val==0)
         {
           this1.style.backgroundColor="skyblue";
         }
         else
         {
           this1.style.backgroundColor="";
         }
    }
	
	
	
	

    //---------------- Code for button and link tab	
//****************************************************************************** Link
function change_a_property(this1,type)
{
  if(type=='text')
  {
     para.innerHTML="";
     var t=document.createTextNode(this1.value);
     para.appendChild(t);
  }
  if(type=='href')
  {
     var link_str=this1.value;
	 
     para.href="http://"+link_str;
     document.getElementById("a_href").value=link_str;
  }
  if(type=='target')
  {
     para.target=this1.value;
  }
}
function create_link()
{
			$('#mover1').hide();
	        $('#mover2').hide();
	        $('#mover3').hide();
	        $('#mover4').hide();
	        $('#mover5').hide();
			
   document.getElementById("editor").removeChild(para);
   
   $('#text_color').show();
   $('#text_styling').show();
   $('#text_shadowing').show();
   
	    scroll_size();		
        document.getElementById("scrollBar").style.top=$("#scroller").position().top+'px';			
		scroller_top_initial=parseFloat($("#scroller").css('top'));
	    $("#tools_style").scrollTop(0);
   
   tag='A';
   para=document.createElement("a");
   var t=document.createTextNode("Link...");
   para.appendChild(t);
   para.id=temp_id;
   para.href="http://www.google.com";
   document.getElementById("editor").appendChild(para);
   
			para.style.left=editor_left+500+'px';
			para.style.top=editor_top+100+'px';
			para.style.position="absolute";
			para.style.boxShadow="0px 0px 0px 0px black";
			para.style.border="0px solid black"
			para.style.textShadow="0px 0px 0px 0px black";
			para.style.backgroundSize="100% 100%";
			para.style.fontSize="16px";
			para.style.fontFamily="Arial";
			
			$("#"+temp_id).css({"cursor":"move"});
			
			$("#"+temp_id).draggable({cancel:'',containment: "#editor"});
   
   document.getElementById("a_text").value="Link...";
   document.getElementById("a_href").value="www.google.com";
   document.getElementById("a_target").value="_self";
}
//****************************************************************************** Text button
function change_text_button_property(this1,type)
{
  if(type=='text')
  {
     para.innerHTML="";
     var t=document.createTextNode(this1.value);
     para.appendChild(t);
  }
  if(type=='href')
  {
     var link_str=this1.value;
     link_str="http://"+link_str;
	 
     para.addEventListener("click", function(){ window.location.href=link_str;});
	 
     document.getElementById("button_href").value=link_str;
  }
}
function create_text_button()
{
   document.getElementById("editor").removeChild(para);
   
   $('#text_color').show();
   $('#text_styling').show();
   $('#text_shadowing').show();
   
	    scroll_size();		
        document.getElementById("scrollBar").style.top=$("#scroller").position().top+'px';			
		scroller_top_initial=parseFloat($("#scroller").css('top'));
	    $("#tools_style").scrollTop(0);
   
   tag='BUTTON';
   para=document.createElement("button");
   var t=document.createTextNode("button");
   para.appendChild(t);
   para.id=temp_id;
   document.getElementById("editor").appendChild(para);
   para.addEventListener("click", function(){ window.location.href='http://www.google.com';});
   
			para.style.left=editor_left+500+'px';
			para.style.top=editor_top+100+'px';
			para.style.position="absolute";
			para.style.boxShadow="0px 0px 0px 0px black";
			para.style.border="1px solid black"
			para.style.textShadow="0px 0px 0px 0px black";
			para.style.backgroundSize="100% 100%";
			para.style.width="100px";
			para.style.height="30px";
			para.style.fontSize="16px";
			para.style.fontFamily="Arial";
			para.style.cursor="pointer";
			
			initialize_mover();
			$('#mover1').show();
	        $('#mover2').show();
	        $('#mover3').show();
	        $('#mover4').show();
	        $('#mover5').show();
	        $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		    $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		    											  $("#editor").position().top,
		    											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		    											  $("#editor").position().top+parseInt($("#editor").css('height'))
		    											  ],axis:""});
   
   document.getElementById("button_text").value="button";
   document.getElementById("button_href").value="www.google.com";
}
//****************************************************************************** Image button
function change_img_button_property(this1,type)
{
  if(type=='text')
  {
		  if(this1.files[0].size>5000000)
		  {
		     alert('Images Size Exceeded...');
			 document.getElementById("button_img").value='';
		  }
		  else
		  {
		      var uploaded=false;
	          var formData = new FormData($('#uploadForm_button')[0]); 
	          var xmlhttp=new XMLHttpRequest();
			  
              xmlhttp.onreadystatechange=function()
              {
			     if(xmlhttp.responseText=='0' && !uploaded)
			 	{
                     $('#progress_out_button').hide();
			 	    document.getElementById('progress_in_button').style.width='0%';
			 		
                     para.innerHTML="";
                     
                     var para1=document.createElement("img");
	                 var img_str=this1.value;
	                 img_str="Projects/"+user_id+"/"+project_names+"/contents/"+img_str.substring(img_str.lastIndexOf("\\")+1,img_str.length);
                     para1.src=img_str;
                     para1.style.height="100%";
                     para1.style.width="100%";
                     para.appendChild(para1);
					 
					 uploaded=true;
			 	}
			  }
			  
			  $('#progress_out_button').show();
			  
              xmlhttp.upload.addEventListener('progress', function(e)
		      {
		          var progress=(e.loaded/e.total)*100;
			      document.getElementById('progress_in_button').style.width=progress+'%';
              }, false);
			  
              xmlhttp.open("POST","upload_images_button.php");                 // asynchronous->true
              xmlhttp.send(formData);
		  }
  }
  if(type=='href')
  {
     var link_str=this1.value; 
     para.href="http://"+link_str;
     document.getElementById("button_img_href").value=link_str;
  }
  if(type=='target')
  {
     para.target=this1.value;
  }
}
function create_img_button()
{	
   document.getElementById("editor").removeChild(para);
   
   $('#text_color').hide();
   $('#text_styling').hide();
   $('#text_shadowing').hide();

	    scroll_size();	
        document.getElementById("scrollBar").style.top=$("#scroller").position().top+'px';		
		scroller_top_initial=parseFloat($("#scroller").css('top'));
	    $("#tools_style").scrollTop(0);
   
   tag='A';
   para=document.createElement("a");
   var para1=document.createElement("img");
   para1.src="1.gif";
   para1.style.height="100%";
   para1.style.width="100%";
   para.appendChild(para1);
   para.id=temp_id;
   para.href="http://www.google.com";
   document.getElementById("editor").appendChild(para);
   
			para.style.left=editor_left+500+'px';
			para.style.top=editor_top+100+'px';
			para.style.position="absolute";
			para.style.boxShadow="0px 0px 0px 0px black";
			para.style.border="1px solid black"
			para.style.textShadow="0px 0px 0px 0px black";
			para.style.backgroundSize="100% 100%";
            para.style.height="30px";
            para.style.width="30px";
			
			initialize_mover();
			$('#mover1').show();
	        $('#mover2').show();
	        $('#mover3').show();
	        $('#mover4').show();
	        $('#mover5').show();
	        $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	        $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		    $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		    											  $("#editor").position().top,
		    											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		    											  $("#editor").position().top+parseInt($("#editor").css('height'))
		    											  ],axis:""});
   
   document.getElementById("button_img").value="";
   document.getElementById("button_img_href").value="www.google.com";
   document.getElementById("button_target").value="_self";
}
	

	
	
	
    //----------------- Code for login division
var screen_w;
var screen_h;
function login_validate()
{

    var l_data_entered=true;
	var log_username=document.getElementById("l_username");
	var log_password=document.getElementById("l_password");
    if(log_username.value=="")
	{
	    log_username.style.border="1px solid red";
		l_data_entered=false;
	}
	else
	{
	    log_username.style.border="1px solid white";
	}
    if(log_password.value=="")
	{
	    log_password.style.border="1px solid red";
		l_data_entered=false;
	}
	else
	{
	    log_password.style.border="1px solid white";
	}

	if(l_data_entered)
	{	
		  //----------- Code for username authentication
		  var log_json_str={};
		  log_json_str["email_id"]=log_username.value;
		  log_json_str['password']=log_password.value;
		  log_json_str=JSON.stringify(log_json_str);
		  
		  var xmlhttp=new XMLHttpRequest();
          xmlhttp.open("GET","login_user.php?json_data="+log_json_str,false);                 // asynchronous->true
          xmlhttp.send();
		  availablilty=xmlhttp.responseText;
		  
		  if(availablilty==1)
		  {
		       log_password.style.border="1px solid red";
	           document.getElementById("r_error").innerHTML="please provide correct password..."
		       return;
		  }
		  else if(availablilty==2)
		       {
			        log_username.style.border="1px solid red";
	                document.getElementById("r_error").innerHTML="provided username is not registered..."
		            return;
			   }
			   else
			   {
			        user_id=log_username.value;
				    
	                $("#Register_login_div").hide();
                    $("#project_name").hide();
			        $("#home").show();
					
		            $("#html_edit").hide();
			        $("#editor").hide();
				    $("#hide_tools_div").hide();
		            $("#Register_login_div_bg").hide();
			        $("#project_name").hide();
					
					$('#change_project').show();
					$('#s_h').show();
					
					document.getElementById('logo_log_in').innerHTML='Log out';
					
			        document.getElementById("l_username").value="";
	   		        document.getElementById("l_password").value="";
	                document.getElementById("name").value="";
	                document.getElementById("r_username").value="";
	                document.getElementById("r_password").value="";
	                document.getElementById("c_password").value="";
                    $("#login_form").show();
	                $("#Register_form").hide();
	                $("#login").css('opacity','1');	
					$("#register").css('opacity','0.2');
					
					project_name_call();
			   }
	}
	else
	{
	    document.getElementById("r_error").innerHTML="Please enter the info in red columns..."
		return;
	}
	document.getElementById("r_error").innerHTML='';
}
function register_validate()
{
    var r_data_entered=true;
    var reg_name=document.getElementById("name");
	var reg_username=document.getElementById("r_username");
	var reg_password=document.getElementById("r_password");
	var reg_c_password=document.getElementById("c_password");
    if(reg_name.value=="")
	{
	    reg_name.style.border="1px solid red";
		r_data_entered=false;
	}
	else
	{
	    reg_name.style.border="1px solid white";
	}
    if(reg_username.value=="" || reg_username.value.search(" ")!=-1)
	{
	    reg_username.style.border="1px solid red";
		r_data_entered=false;
	}
	else
	{
	    reg_username.style.border="1px solid white";
	}
    if(reg_password.value=="" || reg_password.value.search(" ")!=-1)
	{
	    reg_password.style.border="1px solid red";
		r_data_entered=false;
	}
	else
	{
	    reg_password.style.border="1px solid white";
	}
    if(reg_c_password.value=="" || reg_c_password.value.search(" ")!=-1)
	{
	    reg_c_password.style.border="1px solid red";
		r_data_entered=false;
	}
	else
	{
	    reg_c_password.style.border="1px solid white";
	}
	
	if(r_data_entered)
	{
	    //----------- Code for password matching
	        if(reg_password.value!=reg_c_password.value)
	    	{
	    	    reg_password.style.border="1px solid red";
	    		reg_c_password.style.border="1px solid red";
				document.getElementById("r_error").innerHTML="Please check the passwords entered..."
				return;
	    	}
			else
			{
	    	    reg_password.style.border="1px solid white";
	    		reg_c_password.style.border="1px solid white";
			}
		
		  //----------- Code for username availability
		  var reg_json_str={};
		  reg_json_str['name']=reg_name.value;
		  reg_json_str["email_id"]=reg_username.value;
		  reg_json_str['password']=reg_password.value;
		  reg_json_str=JSON.stringify(reg_json_str);
		  
		  var xmlhttp=new XMLHttpRequest();
          xmlhttp.open("GET","register_user.php?json_data="+reg_json_str,false);                 // asynchronous->true
          xmlhttp.send();
		  availablilty=xmlhttp.responseText;
		  
		  if(availablilty==1)
		  {
		       reg_username.style.border="1px solid red";
	           document.getElementById("r_error").innerHTML="The email id is already registered..."
		       return;
		  }
		  else
		  {
			        user_id=reg_username.value;
		  
			        document.getElementById('logo_log_in').innerHTML='Log out';
			   
	                $("#Register_login_div").hide();
                    $("#project_name").hide();
			        $("#home").show();
					
		            $("#html_edit").hide();
			        $("#editor").hide();
				    $("#hide_tools_div").hide();
		            $("#Register_login_div_bg").hide();
			        $("#project_name").hide();
					
					$('#change_project').show();
					$('#s_h').show();

			   
			   document.getElementById("l_username").value="";
	   		   document.getElementById("l_password").value="";
	           document.getElementById("name").value="";
	           document.getElementById("r_username").value="";
	           document.getElementById("r_password").value="";
	           document.getElementById("c_password").value="";
               $("#login_form").show();
	           $("#Register_form").hide();
	           $("#login").css('opacity','1');	
			   $("#register").css('opacity','0.2');
		  }
	}
	else
	{
	    document.getElementById("r_error").innerHTML="Please enter the info in red columns...spaces aren't allowed"
		return;
	}
	document.getElementById("r_error").innerHTML='';
}




function check_session_open_close()
{
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.open("GET","check_session.php",false);                 // asynchronous->true
    xmlhttp.send();
	user_file=xmlhttp.responseText;
	user_file=JSON.parse(user_file);
	
    if(user_file['email_id']!=null)
	{
	    user_id=user_file['email_id'];
	    document.getElementById('logo_log_in').innerHTML='Log out';
		$('#change_project').show();
		$('#s_h').show();
        if(user_file['projectname']==null)
		{	
            $('#home').show();
		}
		else
		{
            project_names=user_file['projectname'];	
		    if(user_file['project']=='No file')
			{
			    //reconfigure editor
				document.getElementById("editor").innerHTML='';
				
	            document.getElementById("editor").style.width='1349px';
	            document.getElementById("editor").style.height='705px';
	            document.getElementById("editor").style.overflow='hidden';
	            document.getElementById("editor").style.float='left';
	            document.getElementById("editor").style.backgroundColor='white';
	            document.getElementById("editor").style.backgroundImage="url('')";
	            document.getElementById("editor").style.backgroundSize= '100% 100%';
	            document.getElementById("editor").style.marginLeft= '-8px';
				
				list_max_indent=[];
				no_list=0;
				tab_count=0;
			}
			else
			{	
			    document.getElementById("editor").innerHTML=user_file['project']['editor'];
				
				url=user_file['project']["backgroundimage"];
				var str=url.slice(url.lastIndexOf('/')+1,url.length-1);
				str="Projects/"+user_id+"/"+project_names+"/backgrounds/"+str;
		        document.getElementById("editor").style.backgroundImage="url('"+str+"')";
			
				var obj=document.getElementById("editor").children;  			
                for(var i=0;i<obj.length;i++)
                {
				   if(obj[i].children.length!=0 && obj[i].tagName=='DIV')
				   {
				        for(var j=0;j<obj[i].children.length;j++)
						{
				            if(obj[i].children[j].tagName=='A' && obj[i].children[j].childNodes[0].tagName=='IMG')
				            {
							    url=obj[i].children[j].childNodes[0].src;
							    var str=url.slice(url.lastIndexOf('/')+1,url.length);
								str="Projects/"+user_id+"/"+project_names+"/contents/"+str;
								obj[i].children[j].childNodes[0].src=str;	
				            }
				            else if(obj[i].children[j].tagName=='AUDIO' || obj[i].children[j].tagName=='VIDEO' || obj[i].children[j].tagName=='IMG')
				                 {
							        url=obj[i].children[j].src;
							        var str=url.slice(url.lastIndexOf('/')+1,url.length);
								    str="Projects/"+user_id+"/"+project_names+"/contents/"+str;
								    obj[i].children[j].src=str;											
				                 }
				            if(obj[i].children[j].style.backgroundImage!='')
				            {
				                url=obj[i].children[j].style.backgroundImage;
							    var str=url.slice(url.lastIndexOf('/')+1,url.length-1);
								str="Projects/"+user_id+"/"+project_names+"/backgrounds/"+str;
				                obj[i].children[j].style.backgroundImage="url('"+str+"')";
				            }
						}
				   }
				   else
				   {
				        if(obj[i].tagName=='A' && obj[i].childNodes[0].tagName=='IMG')
				        {
							url=obj[i].childNodes[0].src;
							var str=url.slice(url.lastIndexOf('/')+1,url.length);
							str="Projects/"+user_id+"/"+project_names+"/contents/"+str;
							obj[i].childNodes[0].src=str;		
				        }
				        else if(obj[i].tagName=='AUDIO' || obj[i].tagName=='VIDEO' || obj[i].tagName=='IMG')
				             {
							    url=obj[i].src;
							    var str=url.slice(url.lastIndexOf('/')+1,url.length);
								str="Projects/"+user_id+"/"+project_names+"/contents/"+str;
								obj[i].src=str;								
				             }
				   }
				   if(obj[i].style.backgroundImage!='')
				   {
				        url=obj[i].style.backgroundImage;
						var str=url.slice(url.lastIndexOf('/')+1,url.length-1);
						str="Projects/"+user_id+"/"+project_names+"/backgrounds/"+str;
				        obj[i].style.backgroundImage="url('"+str+"')";
				   }
                }

				
		        document.getElementById("editor").style.backgroundColor=user_file['project']['backgroundcolor'];
			    document.getElementById("editor").style.backgroundSize=user_file['project']['backgroundsize'];
			    document.getElementById("editor").style.height=user_file['project']['height'];
				
				tab_count=user_file['project']['tab_count'];
			    temp_count=user_file['project']['temp_count'];
			    list_max_indent=user_file['project']['list_max_indent'];
				no_list=list_max_indent.length;
			    $("#editor").hide();
				if(tab_count!=0)
				{
				    for(var i=1;i<=tab_count;i++)
				    {
	                    if(document.getElementById("panel"+i)!=null)
	                    {
 			              $("#panel"+i).droppable({cancel:'',drop:function(event)
			                  {
					              drop_id=event.target.id;
					              if(temp_id.replace(/[0-9]/g,'')!='panel' && temp_id.replace(/[0-9]/g,'')!='tab' && drop_id.replace(/[0-9]/g,'')!='mover')
                                  {	
                                      if(document.getElementById(drop_id).style.visibility=="visible")
                                      {													
                                          if(document.getElementById(temp_id).parentNode.id=="editor")
                                          {	
                                           if(document.getElementById(drop_id).childNodes.length!=0)
                                           {										   
                                                if(document.getElementById(drop_id).childNodes[0].innerHTML.replace(/[0-9]/g,'')=="panel")																		
					                               document.getElementById(drop_id).innerHTML=''; 
										   }
					          	           document.getElementById(temp_id).style.left=parseFloat(document.getElementById(temp_id).style.left)-parseFloat(document.getElementById(drop_id).style.left)+'px';
					          	           document.getElementById(temp_id).style.top=parseFloat(document.getElementById(temp_id).style.top)-parseFloat(document.getElementById(drop_id).style.top)+'px';
					          	           document.getElementById(drop_id).appendChild(document.getElementById(temp_id));
					          		  	   element=document.getElementById(drop_id);
					          		  	   initialize_mover();
					          		    }
					          		    else 
					          		    {
					          	           document.getElementById(temp_id).style.left=document.getElementById(temp_id).style.left;
					          	           document.getElementById(temp_id).style.top=document.getElementById(temp_id).style.top;																	    
					          		    }
					                  }
					          	}
					          },
							  out:function(event)
						      {											
			              	     document.getElementById(temp_id).style.left=parseFloat(document.getElementById(temp_id).style.left)+parseFloat(document.getElementById(temp_id).parentNode.style.left)+'px';
			              	     document.getElementById(temp_id).style.top=parseFloat(document.getElementById(temp_id).style.top)+parseFloat(document.getElementById(temp_id).parentNode.style.top)+'px';
			              	     document.getElementById("editor").appendChild(document.getElementById(temp_id));
			              	     element=document.getElementById("editor");
			              	     initialize_mover();	
                              }
					      });
			              $("#tab"+i).droppable({cancel:'',drop:function(event)
			                  {
						  	    drop_id=event.target.id;
                                if(temp_id.replace(/[0-9]/g,'')!='tab' && temp_id.replace(/[0-9]/g,'')!='panel' && drop_id.replace(/[0-9]/g,'')!='mover')
                                {																 
                                    if(document.getElementById(temp_id).parentNode.id=="editor")
                                    {																													
						  	           document.getElementById(drop_id).innerHTML=''; 
						  		       document.getElementById(temp_id).style.left=parseFloat(document.getElementById(temp_id).style.left)-parseFloat(document.getElementById(drop_id).style.left)+'px';
						  		       document.getElementById(temp_id).style.top=parseFloat(document.getElementById(temp_id).style.top)-parseFloat(document.getElementById(drop_id).style.top)+'px';
						  		       document.getElementById(drop_id).appendChild(document.getElementById(temp_id));
						  		       initialize_mover();
						  			}
						  			else 
						  			{
						  		       document.getElementById(temp_id).style.left=document.getElementById(temp_id).style.left;
						  		       document.getElementById(temp_id).style.top=document.getElementById(temp_id).style.top;																	    
						  			}
						  		}
						  	}
			              }); 
					    }
				    }
				}
				var obj=document.getElementById("editor").children;
                for(var i=0;i<obj.length;i++)
                {
				    if(obj[i].children.length!=0 && obj[i].tagName=='DIV')
				    {
				        for(var j=0;j<obj[i].children.length;j++)
						{
				            if(obj[i].children[j].tagName=='AUDIO')
				            {
							    obj[i].children[j].addEventListener('contextmenu',function(event){ mouse_right_click(event); return false});
							}
						}
				    }
				    else if(obj[i].tagName=='AUDIO')
					    {
					        obj[i].addEventListener('contextmenu',function(event){ mouse_right_click(event); return false});
					    }
				}
				if(no_list!=0)
				{
				    for(var i=0;i<no_list;i++)
					{
                        $("#temp"+list_max_indent[i][0]).keydown(function(){
						   if(window.event.which==8)
			                    window.event.preventDefault();
                           backspace_cond=0;
	                       list_key=window.event.which;
	                       setTimeout("caller_eg()",50);
                        });
                        $("#temp"+list_max_indent[i][0]).keypress(function(){
                           list_key=window.event.which;
                           backspace_cond=list_key_pressed();
                        });
                        $("#inc_indent").mouseover(function(){
                           $("#inc_indent").css('cursor','pointer');
                        });
                        $("#dec_indent").mouseover(function(){
                           if(t_count>0) 
	                            $("#dec_indent").css('cursor','pointer');
	                       else 
	                            $("#dec_indent").css('cursor','default');
                        });
		                $("#dec_indent").animate({opacity:'0.5'});
		                
		                $('#list_done').click(function(){
		                     para.style.fontSize="16px";
		                     para.style.fontFamily="Arial";
						     
		                     $("#list_style_table").hide();
	                         $("#blinker").hide();
			                 
			                 initialize_mover();
			                 $('#mover1').show();
	                         $('#mover2').show();
	                         $('#mover3').show();
	                         $('#mover4').show();
	                         $('#mover5').show();
	                         $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	                         $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	                         $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	                         $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		                     $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		                     											   $("#editor").position().top,
		                     											   $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		                     											   $("#editor").position().top+parseInt($("#editor").css('height'))
		                     											   ],axis:""});
			                 
	                         $('#save_cancel').show();
		                });
					}
				}
		    }
			editor_height_pre=parseInt($("#editor").css('height'));
		}
	}
}





    //----------------- to get the project name
	function project_name_call()
	{
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.open("GET","get_pg_name.php",false);                 // asynchronous->true
        xmlhttp.send();
	    var j_data=xmlhttp.responseText;
		j_data=JSON.parse(j_data);
        
		document.getElementById("list_project_name").innerHTML='';
		document.getElementById("download_project").innerHTML='';
		var bold=document.createElement('b');
		var text=document.createTextNode('--Your Projects list--');
		bold.appendChild(text);
		bold.style.position='relative';
		bold.style.left='65px';
		bold.style.top='5px';
		document.getElementById("list_project_name").appendChild(bold);
		
		var user_file=j_data['localfile'];
		user_file=user_file.split("\n");
		var list_pro=document.createElement("ol");
		for(var i=0;i<user_file.length;i++)
		{
		    if(user_file[i]!='')
			{
			    var list=document.createElement('li');
			    var text=document.createTextNode(user_file[i]);
			    list.appendChild(text);
				list.style.position="relative";
                list.style.marginTop='5px';
			    list_pro.appendChild(list);
			}
		}
		document.getElementById("list_project_name").appendChild(list_pro);

		var hr=document.createElement('hr');
		document.getElementById("list_project_name").appendChild(hr);
		var bold=document.createElement('b');
		var text=document.createTextNode('--Shared Projects--');
		bold.appendChild(text);
		bold.style.position='relative';
		bold.style.left='70px';
		document.getElementById("list_project_name").appendChild(bold);
		
		var user_file=j_data['globalfile'];
		user_file=user_file.split("\n");
		var list_pro=document.createElement("ul");
		for(var i=0;i<user_file.length;i++)
		{
		    if(user_file[i]!='')
			{
			    var list=document.createElement('li');
			    var text=document.createTextNode(user_file[i]);
			    list.appendChild(text);
				list.style.position="relative";
                list.style.marginTop='5px';
			    list_pro.appendChild(list);
			}
		}
		document.getElementById("list_project_name").appendChild(list_pro);
		
		var user_file=j_data['download'];
		if(user_file!='')
		{
		    user_file=user_file.split("\n");
		    var list_dwnld=document.createElement("ol");
		    for(var i=0;i<user_file.length;i++)
		    {
		        if(user_file[i]!='')
		    	{
		    	    list=document.createElement('li');
		            var a_para = document.createElement("a");       
                    var node = document.createTextNode(user_file[i]);
                    a_para.appendChild(node);
		    	    a_para.href="http://woyo.in/Projects/"+user_id+"/"+user_file[i]+".zip";
		    	    list.appendChild(a_para);
		    		list.style.position="relative";
                    list.style.marginTop='5px';
		    	    list_dwnld.appendChild(list);
		    	}
		    }
		    document.getElementById("download_project").appendChild(list_dwnld);
		}

		
		
	    $("#list_project_name li").mouseover(function(){
	          $(this).css('cursor','pointer');
	          $(this).css('text-shadow','0px 0px 1px black');
	    });
	    $("#list_project_name li").mouseleave(function(){
             $(this).css('text-shadow','0px 0px 0px black');
        });
	    $("#list_project_name li").click(function(){
		  	  var pg_name=this.innerHTML;
		      var xmlhttp=new XMLHttpRequest();
              xmlhttp.open("GET","create_pg_name.php?name="+pg_name,false);                 // asynchronous->true
              xmlhttp.send();			  
		         
		  	  check_session_open_close();
			  
			  project_name_call();
		  	
		      $("#html_edit").show();
			  $("#tools").show();
			  scroll_size1();			
		      scroller_top_initial1=parseFloat($("#scroller1").css('top'));
	          $("#tools").scrollTop(0);
				
		  	  $("#editor").show();
		  	  $("#hide_tools_div").show();
			  $("#hide_tools_div").css({left:'226px'});
		      $("#Register_login_div_bg").hide();
		  	  $("#project_name").hide();
		  	  $('#home').hide();
			  
		                var xmlhttp=new XMLHttpRequest();
                        xmlhttp.open("GET","check_viewed.php",false);                 // asynchronous->true
                        xmlhttp.send();
				        if(xmlhttp.responseText==0)
						{
					        $("#triangle_r").show();
	                        $("#triangle_l").show();
	                        $("#right_info").show();
							
							$("#triangle_r").fadeOut(10000);
							$("#triangle_l").fadeOut(10000);
							$("#right_info").fadeOut(10000);
						}
	    });
	}
	




    //---------------- Homepage img slider
var show_img=2;
function scroll_home()
{
    if(show_img<7)
	{
	    if(show_img==1)
		{
		    $("#m6").hide();
	        $("#m7").animate({
	            height:'125px',
                width:'200px',
                opacity:'0.5',
                left:'50px',
                top:'187px'
            });
	        $("#m"+show_img).animate({
	            height:'360px',
                width:'570px',
                opacity:'1',
                left:'265px',
                top:'45px'
            });
	        $("#m"+(show_img+1)).show();
	        $("#m"+(show_img+1)).animate({
	            height:'125px',
                width:'200px',
                opacity:'0.5',	
                left:'850px',
                top:'187px'
            });
		}
		else
		{
	        if(show_img!=2)  
		        $("#m"+(show_img-2)).hide();
			else
			    $("#m7").hide();
		    
            $("#m"+(show_img-1)).animate({
	            height:'125px',
                width:'200px',
                opacity:'0.5',
                left:'50px',
                top:'187px'
            });
	        $("#m"+show_img).animate({
	            height:'360px',
                width:'570px',
                opacity:'1',
                left:'265px',
                top:'45px'
            });
	        $("#m"+(show_img+1)).show();
	        $("#m"+(show_img+1)).animate({
	            height:'125px',
                width:'200px',
                opacity:'0.5',	
                left:'850px',
                top:'187px'
            });
		}
	    show_img=show_img+1;
	}
	else
	{
	   $("#m"+(show_img-2)).hide();
       $("#m"+(show_img-1)).animate({
	       height:'125px',
           width:'200px',
           opacity:'0.5',
           left:'50px',
           top:'187px'
       });
	   $("#m"+show_img).animate({
	       height:'360px',
           width:'570px',
           opacity:'1',
           left:'265px',
           top:'45px'
       });
	   $("#m1").show();
	   $("#m1").animate({
	       height:'125px',
           width:'200px',
           opacity:'0.5',	
           left:'850px',
           top:'187px'
       });
	   show_img=1;
	}
		 
}
setInterval(scroll_home,3000);






    $(document).ready(function(){
	  check_session_open_close();
	  project_name_call();
	  scroll_size1();
	  create_scrollimage();
  
	  editor_height_pre=parseInt($("#editor").css('height'));
	  scroller_top_initial1=parseFloat($("#scrollBar1").css('top'));
	  $("#Register_login_div" ).siblings().animate({opacity:"1"});
	  $("#Register_login_div_bg" ).animate({opacity:"0.6"});
	  $("#login").css('opacity','1');	  

	  
	  //--------- Resolution fix
	  
      
	  
	  document.getElementById("outer").checked=true;
      $("#shadow_style_p input").change(function(){
          changeshadowstyle(this);
      });
	  h_shadow_size_pre=parseInt(document.getElementById("h_shadow_size").style.left);
	  v_shadow_size_pre=parseInt(document.getElementById("v_shadow_size").style.left);
	  
	  text_h_shadow_size_pre=parseInt(document.getElementById("text_h_shadow_size").style.left);
	  text_v_shadow_size_pre=parseInt(document.getElementById("text_v_shadow_size").style.left);
	  
	  
	  
	  $('#tools img').click(function(){                              	  //VIP to set the key press event after the button list is clicked
	    if(tag=="list")
		{
          $("#"+temp_id).keydown(function(){
		     if(window.event.which==8)
			     window.event.preventDefault();
             backspace_cond=0;
	         list_key=window.event.which;
	         setTimeout("caller_eg()",50);
          });
          $("#"+temp_id).keypress(function(){
		     list_key=window.event.which;
             backspace_cond=list_key_pressed();
          });
          $("#inc_indent").mouseover(function(){
             $("#inc_indent").css('cursor','pointer');
          });
          $("#dec_indent").mouseover(function(){
             if(t_count>0) 
	              $("#dec_indent").css('cursor','pointer');
	         else 
	              $("#dec_indent").css('cursor','default');
          });
		  $("#dec_indent").animate({opacity:'0.5'});
		  
		  $('#list_done').click(function(){
		       $("#list_style_table").hide();
	           $("#blinker").hide();
			   
			   initialize_mover();
			   $('#mover1').show();
	           $('#mover2').show();
	           $('#mover3').show();
	           $('#mover4').show();
	           $('#mover5').show();
	           $("#mover1").draggable({cancel:'',containment: "#editor",axis:""});
	           $("#mover2").draggable({cancel:'',containment: "#editor",axis:""});
	           $("#mover3").draggable({cancel:'',containment: "#editor",axis:""});
	           $("#mover4").draggable({cancel:'',containment: "#editor",axis:""});
		       $("#mover5").draggable({cancel:'',containment:[$("#editor").position().left+parseInt($("#editor").css('margin-left'))+(parseFloat(document.getElementById("mover5").style.left)-parseFloat(document.getElementById("mover1").style.left)),
		       											  $("#editor").position().top,
		       											  $("#editor").position().left+parseInt($("#editor").css('margin-left'))+parseInt($("#editor").css('width'))-(parseFloat(document.getElementById("mover2").style.left)-parseFloat(document.getElementById("mover5").style.left)+(parseFloat(document.getElementById("mover2").style.width)+(parseFloat(document.getElementById("mover2").style.border)))),
		       											  $("#editor").position().top+parseInt($("#editor").css('height'))
		       											  ],axis:""});
			   
	           $('#save_cancel').show();
		  });
		}
	  });
	  
	  
	  
	  //-------- Button animation
	  $('#pg_name_done').mouseover(function(){ 
	       $(this).css("cursor","pointer");
	       $(this).css('box-shadow','0px 0px 9px lightskyblue inset,0px 0px 2px black');
	  });
	  $("#pg_name_done").mouseleave(function(){
           $(this).css('box-shadow','0px 0px 0px black');
      });
	  $('#tools img').mouseover(function(){ 
	       $(this).css('box-shadow','0px 0px 9px lightskyblue inset,0px 0px 9px lightskyblue');
	  });
	  $("#tools img").mouseleave(function(){
           $(this).css('box-shadow','0px 0px 0px black');
      });
	  $('#row img').mouseover(function(){ 
	       $(this).css('box-shadow','0px 0px 12px teal inset,0px 0px 12px teal');
	  });
	  $("#row img").mouseleave(function(){
           $(this).css('box-shadow','0px 0px 0px black');
      });
	  $("#upload_img button").mouseover(function(){
	       $(this).css('text-shadow','0px 0px 1px black');
	  });
	  $("#upload_img button").mouseleave(function(){
           $(this).css('text-shadow','0px 0px 0px black');
      });
	  $("#upload_img1 button").mouseover(function(){
	       $(this).css('text-shadow','0px 0px 1px black');
	  });
	  $("#upload_img1 button").mouseleave(function(){
           $(this).css('text-shadow','0px 0px 0px black');
      });
	  $("#upload_img2 button").mouseover(function(){
	       $(this).css('text-shadow','0px 0px 1px black');
	  });
	  $("#upload_img2 button").mouseleave(function(){
           $(this).css('text-shadow','0px 0px 0px black');
      });
	  $("#upload_img3 button").mouseover(function(){
	       $(this).css('text-shadow','0px 0px 1px black');
	  });
	  $("#upload_img3 button").mouseleave(function(){
           $(this).css('text-shadow','0px 0px 0px black');
      });
	  $("#list_style_table button").mouseover(function(){
	       $(this).css('text-shadow','0px 0px 1px black');
	  });
	  $("#list_style_table button").mouseleave(function(){
           $(this).css('text-shadow','0px 0px 0px black');
      });
	  $("#div_image div").mouseover(function(){
	       $(this).css('text-shadow','0px 0px 1px black');
	  });
	  $("#div_image div").mouseleave(function(){
           $(this).css('text-shadow','0px 0px 0px black');
      });
	
	
	
      <!-------------------This array stores width of each character at their resp. charCode() and height is 18 
      char_width[32]=4;
      for(var i=48;i<=57;i++)
           char_width[i]=8;
      char_width[96]=5;
	  char_width[126]=9;
	  char_width[46]=4;
	  char_width[47]=4;
      char_width[42]=8;
	  char_width[43]=9;
	  char_width[45]=5;
	  char_width[95]=8;
	  char_width[61]=9;
	  char_width[33]=5;
	  char_width[64]=15;
	  char_width[35]=8;
	  char_width[36]=8;
	  char_width[37]=13;
	  char_width[94]=8;
	  char_width[38]=12;
	  char_width[40]=5;
	  char_width[41]=5;
	  char_width[123]=8;
	  char_width[125]=8;
	  char_width[91]=5;
	  char_width[93]=5;
	  char_width[124]=3;
	  char_width[92]=4;
	  char_width[59]=4;
	  char_width[58]=4;
	  char_width[39]=3;
	  char_width[34]=7;
	  char_width[44]=4;
	  char_width[60]=9;
	  char_width[62]=9;
	  char_width[32]=7;
	  
      char_width[97]=7.125;
      char_width[98]=8;
      char_width[99]=7.125;
      char_width[100]=8;
      char_width[101]=7.125;
      char_width[102]=5.35;
      char_width[103]=8;
      char_width[104]=8;
      char_width[105]=4.44;
      char_width[106]=4.44;
      char_width[107]=8;
      char_width[108]=4.44;
      char_width[109]=12.5;
      char_width[110]=8;
      char_width[111]=8;
      char_width[112]=8;
      char_width[113]=8;
      char_width[114]=5.35;
      char_width[115]=6.225;
      char_width[116]=4.44;
      char_width[117]=8;
      char_width[118]=8;
      char_width[119]=11.67;
      char_width[120]=8;
      char_width[121]=8;
      char_width[122]=7.125;
	  
      char_width[65]=11.6;
      char_width[66]=10.78;
      char_width[67]=10.78;
      char_width[68]=11.6;
      char_width[69]=9.8;
      char_width[70]=8.9;
      char_width[71]=11.6;
      char_width[72]=11.6;
      char_width[73]=5.325;
      char_width[74]=6.225;
      char_width[75]=11.6;
      char_width[76]=9.8;
      char_width[77]=14.25;
      char_width[78]=11.6;
      char_width[79]=11.6;
      char_width[80]=8.925;
      char_width[81]=11.6;
      char_width[82]=10.7;
      char_width[83]=8.9;
      char_width[84]=9.8;
      char_width[85]=11.6;
      char_width[86]=11.6;
      char_width[87]=15.12;
      char_width[88]=11.6;
      char_width[89]=11.6;
      char_width[90]=9.8;
	  

     
	  $("#tools img").mouseover(function(){
	    $("#tools img").css({"cursor":"pointer"});
      });
      $("#scale div").mouseover(function(){
	    $("#scale div").css({"cursor":"pointer"});
	    $("#scale div").draggable({cancel:'',containment: 'parent',axis: "x"});
      });
      $("#div_image div").mouseover(function(){
	    $("#div_image div").css({"cursor":"pointer"});
      });
	  
	  
      $("#upload_img_move3").mouseover(function(){
	    $("#upload_img_move3").css({"cursor":"move"});
	    $("#upload_img3").draggable({cancel:''});
      });
      $("#upload_img_move3").mouseleave(function(){
	    $("#upload_img3").draggable({cancel:'div',containment: "#editor"});
      });
      $("#video").click(function(){
	     $("#upload_img3").show();
		 $("#upload_img3 button").click(function(){
		        document.getElementById("myFile3").value='';
                var item = document.getElementById(temp_id);
                item.parentNode.removeChild(item);
				temp_count=temp_count-1;
			    $('#mover1').hide();
	            $('#mover2').hide();
	            $('#mover3').hide();
	            $('#mover4').hide();
	            $('#mover5').hide();

				$('#tools').slideDown();
	            $('#tools_style').hide();
	            $('#save_cancel').hide();
		 });
		 $("#editor").click(function(){
		     $("#upload_img3").hide();
		 });	
		 $("#logo").click(function(){
		     $("#upload_img3").hide();
		 });
      });
	  $("#myFile3").change(function(){
		  if(this.files[0].size>100000000)
		  {
		     alert('Video Size Exceeded...');
			 document.getElementById("myFile3").value='';
		  }
		  else
		  {
		     var uploaded=false;
	         var formData = new FormData($('#uploadForm3')[0]); 
	         var xmlhttp=new XMLHttpRequest();	
			 
             xmlhttp.onreadystatechange=function()
             {
			    if(xmlhttp.responseText=='0' && !uploaded)
				{
                    $('#progress_out3').hide();
				    document.getElementById('progress_in3').style.width='0%';
			        createtags(video_handle);
					uploaded=true;
				}
             }
             
			 $('#progress_out3').show();
			 
             xmlhttp.upload.addEventListener('progress', function(e)
		     {
		         var progress=(e.loaded/e.total)*100;
			     document.getElementById('progress_in3').style.width=progress+'%';
             }, false);
		     
             xmlhttp.open("POST","upload_video.php");                 // asynchronous->true
             xmlhttp.send(formData);
		  }
	  });
	  
	  
      $("#upload_img_move2").mouseover(function(){
	    $("#upload_img_move2").css({"cursor":"move"});
	    $("#upload_img2").draggable({cancel:''});
      });
      $("#upload_img_move2").mouseleave(function(){
	    $("#upload_img2").draggable({cancel:'div',containment: "#editor"});
      });
      $("#audio").click(function(){
	     $("#upload_img2").show();
		 $("#upload_img2 button").click(function(){
		        document.getElementById("myFile2").value='';
                var item = document.getElementById(temp_id);
                item.parentNode.removeChild(item);
				temp_count=temp_count-1;
			    $('#mover1').hide();
	            $('#mover2').hide();
	            $('#mover3').hide();
	            $('#mover4').hide();
	            $('#mover5').hide();
				
				$('#tools').slideDown();
	            $('#tools_style').hide();
	            $('#save_cancel').hide();
		 });
		 $("#editor").click(function(){
		     $("#upload_img2").hide();
		 });	
		 $("#logo").click(function(){
		      $("#upload_img2").hide();
		 });
      });
	  $("#myFile2").change(function(){
		  if(this.files[0].size>25000000)
		  {
		     alert('Audio Size Exceeded...');
			 document.getElementById("myFile2").value='';
		  }
		  else
		  {
		     var uploaded=false;
	         var formData = new FormData($('#uploadForm2')[0]);             //---- VIMP to give name=XXXX to <input=file name=myFile2>
	         var xmlhttp=new XMLHttpRequest();
			 
             xmlhttp.onreadystatechange=function()
             {
			    if(xmlhttp.responseText=='0' && !uploaded)
				{
                    $('#progress_out2').hide();
				    document.getElementById('progress_in2').style.width='0%';
			        createtags(audio_handle);
					uploaded=true;
				}
             }
			 
			 $('#progress_out2').show();
			 
             xmlhttp.upload.addEventListener('progress', function(e)
		     {
		         var progress=(e.loaded/e.total)*100;
			     document.getElementById('progress_in2').style.width=progress+'%';    
             }, false);
			 
             xmlhttp.open("POST","upload_audio.php");                 // asynchronous->true
             xmlhttp.send(formData);
		  }
	  });
	  
	  
      $("#upload_img_move1").mouseover(function(){
	    $("#upload_img_move1").css({"cursor":"move"});
	    $("#upload_img1").draggable({cancel:''});
      });
      $("#upload_img_move1").mouseleave(function(){
	    $("#upload_img1").draggable({cancel:'div',containment: "#editor"});
      });
      $("#image").click(function(){
	     $("#upload_img1").show();
		 $("#upload_img1 button").click(function(){
				
		        document.getElementById("myFile1").value='';
                var item = document.getElementById(temp_id);
                item.parentNode.removeChild(item);
				temp_count=temp_count-1;
			    $('#mover1').hide();
	            $('#mover2').hide();
	            $('#mover3').hide();
	            $('#mover4').hide();
	            $('#mover5').hide();
			
				$('#tools').slideDown();
	            $('#tools_style').hide();
	            $('#save_cancel').hide();
		 });
		 $("#editor").click(function(){
		     $("#upload_img1").hide();
		 });	
		 $("#logo").click(function(){
		      $("#upload_img1").hide();
		 });
      });
	  $("#myFile1").change(function(){
	      
		  if(this.files[0].size>5000000)
		  {
		     alert('Images Size Exceeded...');
			 document.getElementById("myFile1").value='';
		  }
		  else
		  {
		      var uploaded=false;
		      var xmlhttp=new XMLHttpRequest();	  
	          var formData = new FormData($('#uploadForm1')[0]);
			  
              xmlhttp.onreadystatechange=function()
              {
			    if(xmlhttp.responseText=='0' && !uploaded)
			 	{
                    $('#progress_out1').hide();
			 	    document.getElementById('progress_in1').style.width='0%';
					createtags(image_handle);
					uploaded=true;
			 	}
              }
			 
			  $('#progress_out1').show();
			  
              xmlhttp.upload.addEventListener('progress', function(e)
		      {
		          var progress=(e.loaded/e.total)*100;
			      document.getElementById('progress_in1').style.width=progress+'%';   
              }, false);
			  
              xmlhttp.open("POST","upload_images.php");                 // asynchronous->true
              xmlhttp.send(formData);
		  }
	  });
	  
	  
      $("#upload_img_move").mouseover(function(){
	    $("#upload_img_move").css({"cursor":"move"});
	    $("#upload_img").draggable({cancel:''});
      });
      $("#upload_img_move").mouseleave(function(){
	    $("#upload_img").draggable({cancel:'div',containment: "#editor"});
      });
      $("#background:nth-child(1)").click(function(){
	     $("#upload_img").show();
		 $("#upload_img button").click(function(){
			document.getElementById(temp_id).style.backgroundImage="url('')";
			document.getElementById("myFile").value='';
		 });
		 $("#editor").click(function(){
		      $("#upload_img").hide();
		 });
		 $("#logo").click(function(){
		      $("#upload_img").hide();
		 });
      });
	  $("#myFile").change(function(){
		  if(this.files[0].size>5000000)
		  {
		     alert('Image Size Exceeded...');
			 document.getElementById("myFile").value='';
		  }
		  else
		  {
		     var uploaded=false;
		     var xmlhttp=new XMLHttpRequest();	  
	         var formData = new FormData($('#uploadForm')[0]);
			 
             xmlhttp.onreadystatechange=function()
             {
			    if(xmlhttp.responseText=='0' && !uploaded)
				{
                    $('#progress_out').hide();
				    document.getElementById('progress_in').style.width='0%';
			        changebackground();
					uploaded=true;
				}
			 }
             
			 $('#progress_out').show();
			 
             xmlhttp.upload.addEventListener('progress', function(e)
		     {
		         var progress=(e.loaded/e.total)*100;
			     document.getElementById('progress_in').style.width=progress+'%';
             }, false);
			 
             xmlhttp.open("POST","upload_images_bg.php");                 // asynchronous->true
             xmlhttp.send(formData);
             
          }	
      });
	  
	  
      $("#background:nth-child(2)").click(function(){
	     $("#select_img").toggle( "slide" );
		 $("#select_img img").click(function(){
		     changebackground_select(this);
		 });
      });
	  $("#editor").click(function(){
	        if($("#select_img").is(":visible"))
		        $("#select_img").toggle( "slide" );
	  });
	  
	  
      $("#row img").mouseover(function(){
	    $("#row img").css({"cursor":"pointer"});
      });
	  
	  
      $("#tools_style").mouseover(function(){
	    if(document.getElementById("tools_style").scrollHeight!=document.getElementById("tools_style").clientHeight)
	            $("#scrollBar").show();
        $("#scrollBar").draggable({axis: "y",containment:'#scroller'});
	  });
	  $("#scrollBar").on('drag',function(){
	     $("#scrollBar").show();
	  });
	  $("#scrollBar").on('dragend',function(){
	     $("#scrollBar").hide();
	  });
      $("#tools_style").mouseout(function(){
	    $("#scrollBar").hide();
      });
	  
	  
      $("#tools").mouseover(function(){
	    $("#scrollBar1").show();
        $("#scrollBar1").draggable({axis: "y",containment:'#scroller1'});
	  });
	  $("#scrollBar1").on('drag',function(){
	     $("#scrollBar1").show();
	  });
	  $("#scrollBar1").on('dragend',function(){
	     $("#scrollBar1").hide();
	  });
      $("#tools").mouseout(function(){
	    $("#scrollBar1").hide();
      });
	  
	  
      $("#div_color div").mouseover(function(){
          $(this).css("border","1px solid black");
          $("#div_color div").mouseleave(function(){
               $(this).css("border","1px solid white");
          });
          $("#div_color div").click(function(){
		       document.getElementById(temp_id).style.backgroundImage="url('')";
               document.getElementById(temp_id).style.backgroundColor=this.style.backgroundColor;
          });
      });
	  
	  
      $("#text_color div").mouseover(function(){
          $(this).css("border","1px solid black");
          $("#text_color div").mouseleave(function(){
               $(this).css("border","1px solid white");
          });
          $("#text_color div").click(function(){
               document.getElementById(temp_id).style.color=this.style.backgroundColor;
          });
      });


      $("#border_color div").mouseover(function(){
          $(this).css("border","1px solid black");
          $("#border_color div").mouseleave(function(){
               $(this).css("border","1px solid white");
          });
          $("#border_color div").click(function(){
               if(border_temp=="All borders")
                      document.getElementById(temp_id).style.borderColor=this.style.backgroundColor;
               if(border_temp=="Top border")
                      document.getElementById(temp_id).style.borderTopColor=this.style.backgroundColor;
               if(border_temp=="Bottom border")
                      document.getElementById(temp_id).style.borderBottomColor=this.style.backgroundColor;
               if(border_temp=="Left border")
                      document.getElementById(temp_id).style.borderLeftColor=this.style.backgroundColor;
               if(border_temp=="Right border")
                      document.getElementById(temp_id).style.borderRightColor=this.style.backgroundColor;
          });
      });
	  
	  
      $("#shadow_color div").mouseover(function(){
          $(this).css("border","1px solid black");
          $("#shadow_color div").mouseleave(function(){
               $(this).css("border","1px solid white");
          });
          $("#shadow_color div").click(function(){
		       blur_shadow_color=this.style.backgroundColor;
               document.getElementById(temp_id).style.boxShadow=h_shadow_w+'px '+v_shadow_w+'px '+blur_w+'px '+spread_w+'px '+blur_shadow_color+' '+shadow_style;;
          });
      });
	  
	  
      $("#text_shadow_color div").mouseover(function(){
          $(this).css("border","1px solid black");
          $("#text_shadow_color div").mouseleave(function(){
               $(this).css("border","1px solid white");
          });
          $("#text_shadow_color div").click(function(){
		       text_blur_shadow_color=this.style.backgroundColor;
               document.getElementById(temp_id).style.textShadow=text_h_shadow_w+'px '+text_v_shadow_w+'px '+text_blur_w+'px '+text_blur_shadow_color;
          });
      });
	  
	  
	   $("#mover1").mouseover(function(){
	      $("#mover1").css('cursor','nw-resize');
	   });
	   $("#mover2").mouseover(function(){
	      $("#mover2").css('cursor','ne-resize');
	   });
	   $("#mover3").mouseover(function(){
	      $("#mover3").css('cursor','se-resize');
	   });
	   $("#mover4").mouseover(function(){
	      $("#mover4").css('cursor','sw-resize');
	   });
	   $("#mover5").mouseover(function(){
	      $("#mover5").css('cursor','move');
	   });
	   
	  
	  
       $('#editor').mousedown(function(){
            if(event.button!=2)
               $('#context_menu').hide();
            else
               mouse_right_click(event);
       });
       $('#context_menu p').mouseover(function(){
            $(this).css("cursor",'context-menu');
            highlight_context_menu(this,0);
       });
       $('#context_menu p').mouseout(function(){
            highlight_context_menu(this,1);
       });
       $('#context_menu p').on('click',function(){
	        temp_id=right_clk_temp_id;
	        tag=right_clk_tag;
			if(this.id=='element_edit')
			{
			    if(temp_id.replace(/[0-9]/g,'')=='temp' || temp_id.replace(/[0-9]/g,'')=='tab' || temp_id.replace(/[0-9]/g,'')=='panel')
				{
				    para=document.getElementById(temp_id);
				    re_edit();
				    $('#tools').slideUp();
	                $('#tools_style').show();
				}
				else
				{
				    while(temp_id.replace(/[0-9]/g,'')!='temp' || temp_id.replace(/[0-9]/g,'')=='tab' || temp_id.replace(/[0-9]/g,'')=='panel')
					{
				        temp_id=document.getElementById(temp_id).parentElement.id;
					}
				    para=document.getElementById(temp_id);
					re_edit();
					$('#tools').slideUp();
	                $('#tools_style').show();
				}
				
	            if(!($("#html_edit").is(":visible")))
			    { 
		           $("#hide_tools_div").stop().animate({left:'226px'});
                   $("#html_edit").toggle("slide");
			    }
				
	            scroll_size();			
				document.getElementById("scrollBar").style.top=$("#scroller").position().top+'px';	
		        scroller_top_initial=parseFloat($("#scroller").css('top'));
	            $("#tools_style").scrollTop(0);
			}
			if(this.id=='element_delete')
			{
			    if(temp_id.replace(/[0-9]/g,'')=='temp' || temp_id.replace(/[0-9]/g,'')=='tab' || temp_id.replace(/[0-9]/g,'')=='panel')
				{
				    var item = document.getElementById(temp_id);
                    item.parentNode.removeChild(item);
					if(temp_id.replace(/[0-9]/g,'')=='tab' || temp_id.replace(/[0-9]/g,'')=='panel')
					{
					    //tab_count=tab_count-1;
						if(temp_id.replace(/[0-9]/g,'')=='tab')
						{					    
						    var item = document.getElementById("panel"+(temp_id.replace(/[a-z]/g,'')));
                            item.parentNode.removeChild(item);
						}
						else
						{
						    var item = document.getElementById("tab"+(temp_id.replace(/[a-z]/g,'')));
                            item.parentNode.removeChild(item);
						}
					}
					$('#tools').slideDown();
	                $('#tools_style').hide();
	                $('#save_cancel').hide();
					$('#button_link_div').hide();
					
					$('#mover1').hide();
	                $('#mover2').hide();
	                $('#mover3').hide();
	                $('#mover4').hide();
	                $('#mover5').hide();
				}
				else
				{
				    while(temp_id.replace(/[0-9]/g,'')!='temp' || temp_id.replace(/[0-9]/g,'')=='tab' || temp_id.replace(/[0-9]/g,'')=='panel')
					{
				        temp_id=document.getElementById(temp_id).parentElement.id;
					}
				    var item = document.getElementById(temp_id);
                    item.parentNode.removeChild(item);
					if(temp_id.replace(/[0-9]/g,'')=='tab' || temp_id.replace(/[0-9]/g,'')=='panel')
					{
					    tab_count=tab_count-1;
						if(temp_id.replace(/[0-9]/g,'')=='tab')
						{					    
						    var item = document.getElementById("panel"+(temp_id.replace(/[a-z]/g,'')));
                            item.parentNode.removeChild(item);
						}
						else
						{
						    var item = document.getElementById("tab"+(temp_id.replace(/[a-z]/g,'')));
                            item.parentNode.removeChild(item);
						}
					}
					$('#tools').slideDown();
	                $('#tools_style').hide();
	                $('#save_cancel').hide();
					$('#button_link_div').hide();
					
					$('#mover1').hide();
	                $('#mover2').hide();
	                $('#mover3').hide();
	                $('#mover4').hide();
	                $('#mover5').hide();
				}
				
		        document.getElementById("myFile").value='';
		        document.getElementById("myFile1").value='';
		        document.getElementById("myFile2").value='';
		        document.getElementById("myFile3").value='';
		        document.getElementById("button_img").value='';
			}
			if(this.id=='code_submit')
			{		
			    json_data_final={};
				var required_data={};                                                 //----- Store the required images ,audio ,videos etc.
				required_data['bg']=[];
				required_data['content']=[];
				var bg=0;cont=0;
				required_data['bg'][bg++]='.';
				required_data['bg'][bg++]='..';
				required_data['content'][cont++]='.';
				required_data['content'][cont++]='..';
				
				if(document.getElementById("editor").style.backgroundImage!='')
				{
				    url=document.getElementById("editor").style.backgroundImage;
				    var str='http://localhost/'+url.slice(url.lastIndexOf(project_names)+(project_names.length),url.length-1);
				    document.getElementById("editor").style.backgroundImage="url('"+str+"')";
					
					str=str.slice(str.lastIndexOf("/")+1,str.length);
					if(str!='homepage.php')
					    required_data['bg'][bg++]=str;
				}
				
				var obj=document.getElementById("editor").children;  
		        json_data_final["backgroundimage"]=$("#editor").css("background-image");
		        json_data_final['backgroundcolor']=$("#editor").css("background-color");
				json_data_final['backgroundsize']=$("#editor").css("background-size");
				json_data_final['height']=$("#editor").css("height");
				json_data_final['tab_count']=tab_count;
				
				var html=''; 
                var url='';				
                for(var i=0;i<obj.length;i++)
                {
				   var temp_obj=obj[i].outerHTML;                                     //----- temporary storage of the editors individual children outerHTML
				   
				   if(obj[i].children.length!=0 && obj[i].tagName=='DIV')
				   {
				        for(var j=0;j<obj[i].children.length;j++)
						{
				            if(obj[i].children[j].tagName=='A' && obj[i].children[j].childNodes[0].tagName=='IMG')
				            {
				                   url=obj[i].children[j].childNodes[0].src;
				                   var str=url.slice(url.lastIndexOf(project_names)+(project_names.length)+1,url.length);
				                   obj[i].children[j].childNodes[0].src=str;	
								   
								   str=str.slice(str.lastIndexOf("/")+1,str.length);
								   required_data['content'][cont++]=str;
				            }
				            else if(obj[i].children[j].tagName=='AUDIO' || obj[i].children[j].tagName=='VIDEO' || obj[i].children[j].tagName=='IMG')
				                 {
				                        url=obj[i].children[j].src;
				                        var str=url.slice(url.lastIndexOf(project_names)+(project_names.length)+1,url.length);
				                        obj[i].children[j].src=str;

										str=str.slice(str.lastIndexOf("/")+1,str.length);
                                        required_data['content'][cont++]=str;										
				                 }
				            if(obj[i].children[j].style.backgroundImage!='')
				            {
				                url=obj[i].children[j].style.backgroundImage;
				                var str='http://localhost/'+url.slice(url.lastIndexOf(project_names)+(project_names.length),url.length-1);
				                obj[i].children[j].style.backgroundImage="url('"+str+"')";
								
								str=str.slice(str.lastIndexOf("/")+1,str.length);
								if(str!='homepage.php')
								    required_data['bg'][bg++]=str;
				            }
							
				            obj[i].children[j].style.left=(parseFloat($("#"+obj[i].children[j].id).css('left'))/parseFloat(document.getElementById(obj[i].id).style.width))*100+'%';
				            obj[i].children[j].style.top=(parseFloat($("#"+obj[i].children[j].id).css('top'))/parseFloat(document.getElementById(obj[i].id).style.height))*100+'%';
				            obj[i].children[j].style.width=(parseFloat($("#"+obj[i].children[j].id).css('width'))/parseFloat(document.getElementById(obj[i].id).style.width))*100+'%';
				            obj[i].children[j].style.height=(parseFloat($("#"+obj[i].children[j].id).css('height'))/parseFloat(document.getElementById(obj[i].id).style.height))*100+'%';
							if((obj[i].children[j].tagName=='A' && obj[i].children[j].childNodes[0].tagName!='IMG') || obj[i].children[j].tagName=='BUTTON' || obj[i].children[j].tagName=='OL' || obj[i].children[j].tagName=='UL' || obj[i].children[j].tagName=='PRE')
								obj[i].children[j].style.fontSize=(parseFloat($("#"+obj[i].children[j].id).css('font-size'))/16.0)*100+'%';
								
								//console.log(obj[i].children[j].tagName+'--'+$("#"+obj[i].children[j].id).css('font-size'));
								//console.log(obj[i].children[j].style.fontSizeAdjust);
						}
				   }
				   else
				   {
				        if(obj[i].tagName=='A' && obj[i].childNodes[0].tagName=='IMG')
				        {
				               url=obj[i].childNodes[0].src;
				               var str=url.slice(url.lastIndexOf(project_names)+(project_names.length)+1,url.length);
				               obj[i].childNodes[0].src=str;	
							   
							   str=str.slice(str.lastIndexOf("/")+1,str.length);
							   required_data['content'][cont++]=str;
				        }
				        else if(obj[i].tagName=='AUDIO' || obj[i].tagName=='VIDEO' || obj[i].tagName=='IMG')
				             {
				                    url=obj[i].src;
				                    var str=url.slice(url.lastIndexOf(project_names)+(project_names.length)+1,url.length);
				                    obj[i].src=str;		

									str=str.slice(str.lastIndexOf("/")+1,str.length);
                                    required_data['content'][cont++]=str;									
				             }
				   }
				   if(obj[i].style.backgroundImage!='')
				   {
				       url=obj[i].style.backgroundImage;
				       var str='http://localhost/'+url.slice(url.lastIndexOf(project_names)+(project_names.length),url.length-1);
				       obj[i].style.backgroundImage="url('"+str+"')";
					   
					   str=str.slice(str.lastIndexOf("/")+1,str.length);
					   if(str!='homepage.php')
					       required_data['bg'][bg++]=str;
				   }
				   var temp_top;
				   temp_top=obj[i].style.top;
                   obj[i].style.top=parseFloat(temp_top)-$("#editor").position().top-parseFloat($("#editor").css('margin-top'))+'px';
				   
				   
				   
				   //-------- Resolution fix for websites
				   obj[i].style.left=($("#"+obj[i].id).position().left/parseFloat($("#editor").css('width')))*100+'%';
				   obj[i].style.top=($("#"+obj[i].id).position().top/parseFloat($("#editor").css('height')))*100+'%';
				   obj[i].style.width=(parseFloat($("#"+obj[i].id).css('width'))/parseFloat($("#editor").css('width')))*100+'%';
				   obj[i].style.height=(parseFloat($("#"+obj[i].id).css('height'))/parseFloat($("#editor").css('height')))*100+'%';
				   if((obj[i].tagName=='A' && obj[i].childNodes[0].tagName!='IMG') || obj[i].tagName=='BUTTON' || obj[i].tagName=='PRE')
				        obj[i].style.fontSize=(parseFloat($("#"+obj[i].id).css('font-size'))/16.0)*100+'%';
						
				   //console.log(obj[i].tagName+'--'+$("#"+obj[i].id).css('font-size'));
				   
                   html=html+obj[i].outerHTML;

                   obj[i].outerHTML=temp_obj;
                }
				json_data_final['data']=html;
		        json_data_final=JSON.stringify(json_data_final);
				
				required_data=JSON.stringify(required_data);
			    var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","remove_content_bg.php?data="+required_data,false);                 // asynchronous->true
                xmlhttp.send();
				
				
				document.getElementById('editor').innerHTML='';
			    document.getElementById("editor").style.backgroundImage="url('')";
				
				
                $("#html_edit").hide();
			    $("#editor").hide();
			    $("#hide_tools_div").hide();
			    $("#home").hide();
			    $("#Register_login_div_bg").show();
				$('#share').show();
			}
            $('#context_menu').hide();
       });
	   $('body').on('click',function(){
	       $('#context_menu').hide();
	   });
	   
	   
	   
	   $('#share button').click(function(){	
	       if(this.id=='dont_share')
		   {
			    json_data_final=encodeURIComponent(json_data_final);
			    
                var xmlhttp=new XMLHttpRequest();	
                xmlhttp.open("POST","create_html.php",false);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // This is needed for any POST request made via Ajax
                xmlhttp.send('json_data='+json_data_final);
		   }
		   else
		   {
			    json_data_final=encodeURIComponent(json_data_final);
			    
                var xmlhttp=new XMLHttpRequest();	
                xmlhttp.open("POST","create_html.php",false);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); // This is needed for any POST request made via Ajax
                xmlhttp.send('json_data='+json_data_final);
				
			    var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","share_files.php",true);                 // asynchronous->true
                xmlhttp.send();
		   }
		   
		   project_name_call();
		   
           $("#html_edit").hide();
		   $("#editor").hide();
		   $("#hide_tools_div").hide();
		   $("#home").show();
		   $("#Register_login_div_bg").hide();
		   $('#share').hide();
		   
	   });
	  $("#share button").mouseover(function(){
	       $(this).css({"cursor":"pointer"});
	       $(this).css('box-shadow','0px 0px 1px black');
	  });
	  $("#share button").mouseleave(function(){
           $(this).css('box-shadow','0px 0px 0px black');
      });
	   
	   
	   
	   
	   //--------------------- Code for Button & Link tabs
       $("#button_tab").hide();
	   $("#button_button").hide();
	   $("#button_image").hide();
       $("#button_tab_button").css('opacity','0.4');
       $("#link_tab_button").click(function(){
          $("#link_tab").show();
          $("#button_tab").hide();
          $("#link_tab_button").css('opacity','1');
          $("#button_tab_button").css('opacity','0.4');
	      
	       if($("#button_image").is(":visible"))
		   {
	            $("#button_image").slideUp();
		   }
	       if($("#button_button").is(":visible"))
		   {
	            $("#button_button").slideUp();
		   }
		   create_link();
       });
       $("#button_tab_button").click(function(){
          $("#link_tab").hide();
          $("#button_tab").show();
          $("#link_tab_button").css('opacity','0.4');
          $("#button_tab_button").css('opacity','1');
       });
	   $("#button_tab p").click(function(){
	       if(this.innerHTML=='Text Button')
	   	{
	   		$("#button_image").hide();
			
	       if($("#button_button").is(":visible"))
		   {
		        $("#button_button").slideUp();
		   }
		   else
		   {
		        $("#button_button").slideDown();	
	   		    create_text_button();
           }           
	   	}
	   	else
	   	{
	   	    $("#button_button").hide();
	   		
	       if($("#button_image").is(":visible"))
		   {
		        $("#button_image").slideUp();
		   }
		   else
		   {
		        $("#button_image").slideDown();
	   		    create_img_button();
           } 
	   	}
	   });
	   $("#button_tab p").mouseover(function(){
	        $(this).css('text-shadow','0px 0px 1px black');
	   });
	   $("#button_tab p").mouseleave(function(){
	        $(this).css('text-shadow','0px');
	   });
	   
	   
	   
	   
	   $("#logo span").mouseover(function(){
	        $(this).css('cursor','pointer');
	        $(this).css('text-shadow','0px 0px 5px skyblue');
	   });
	   $("#logo span").mouseleave(function(){
            $(this).css('text-shadow','0px 0px 0px cornflowerblue');
       });
	   $("#logo span").click(function(){
	       if(this.innerHTML=='Log in')
	       {
	           $("#Register_login_div").show();
			   $("#home").hide();
			   $("#Register_login_div_bg").show();
			   
               screen_w = screen.width;
               screen_h = screen.height;
               document.getElementById("Register_login_div").style.left=(screen_w-document.getElementById("Register_login_div").clientWidth)/2+'px';
	           document.getElementById("Register_login_div").style.top=(screen_h-document.getElementById("Register_login_div").clientHeight)/2+'px';
	       }
		   if(this.innerHTML=='Home')
		   {
		        $("#home").show();
                $("#html_edit").hide();
				$("#editor").hide();
				$("#hide_tools_div").hide();
		   }
		   if(this.innerHTML=='Build your website')
		   {
		        $("#home").hide();
				
		        var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","check_session.php",false);                 // asynchronous->true
                xmlhttp.send();
				var user_txt=xmlhttp.responseText;
				
		        user_txt=JSON.parse(user_txt);
				if(user_txt['email_id']==null)
				{
	                $("#Register_login_div").show();
			        
					$("#Register_login_div_bg").show();
                    screen_w = screen.width;
                    screen_h = screen.height;
                    document.getElementById("Register_login_div").style.left=(screen_w-document.getElementById("Register_login_div").clientWidth)/2+'px';
	                document.getElementById("Register_login_div").style.top=(screen_h-document.getElementById("Register_login_div").clientHeight)/2+'px';
				}
				else
				{
				    if(user_txt['projectname']!=null)
					{

                        $("#html_edit").show();
						$("#tools").show();
					    scroll_size1();			
		                scroller_top_initial1=parseFloat($("#scroller1").css('top'));
	                    $("#tools").scrollTop(0);
						
					    $("#editor").show();
					    $("#hide_tools_div").show();
						$("#hide_tools_div").css({left:'226px'});
						
		                var xmlhttp=new XMLHttpRequest();
                        xmlhttp.open("GET","check_viewed.php",false);                 // asynchronous->true
                        xmlhttp.send();
				        if(xmlhttp.responseText==0)
						{
					        $("#triangle_r").show();
	                        $("#triangle_l").show();
	                        $("#right_info").show();
							
							$("#triangle_r").fadeOut(10000);
							$("#triangle_l").fadeOut(10000);
							$("#right_info").fadeOut(10000);
						}
					}
					else
					{
                        $("#html_edit").hide();
					    $("#editor").hide();
					    $("#hide_tools_div").hide();
						$("#home").hide();
			            $("#Register_login_div_bg").show();
			            $("#project_name").show();
					}
				}
		   }
		   if(this.innerHTML=='Log out')
		   {
		        $("#home").show();
				$("#html_edit").hide();
				$("#editor").hide();
				$("#hide_tools_div").hide();
			    $('#change_project').hide();
				$('#s_h').hide();
				
				document.getElementById("download_project").innerHTML='';
				
		        var xmlhttp=new XMLHttpRequest();
                xmlhttp.open("GET","logout_session.php",false);                 // asynchronous->true
                xmlhttp.send();
				
				document.getElementById('logo_log_in').innerHTML='Log in';
		   }
	   });
	   $("#Register_login_div_tab div").mouseover(function(){
	       $(this).css('cursor','pointer');
	   });
	   $("#login_form button").mouseover(function(){
	       $(this).css('cursor','pointer');
	   });
	   $("#login_form button").click(function(){
	       login_validate();
	   });
	   $("#Register_form button").mouseover(function(){
	       $(this).css('cursor','pointer');
	   });
	   $("#Register_form button").click(function(){
	       register_validate();
	   });
	   $("#Register_login_div_tab div").click(function(){
	       $(this).css('opacity','1');
	    if(this.id=="register")
	   	{
            $("#login").css('opacity','0.2');
	   		$("#login_form").hide();
	   		$("#Register_form").show();
	   		document.getElementById("r_error").innerHTML='';
	           document.getElementById("name").style.border="1px solid white";
	           document.getElementById("r_username").style.border="1px solid white";
	           document.getElementById("r_password").style.border="1px solid white";
	           document.getElementById("c_password").style.border="1px solid white";
	   		
	           document.getElementById("name").value="";
	           document.getElementById("r_username").value="";
	           document.getElementById("r_password").value="";
	           document.getElementById("c_password").value="";
	   	}
	   	else
	   	{
	   	    $("#register").css('opacity','0.2');
	   		$("#login_form").show();
	   		$("#Register_form").hide();
	   		document.getElementById("r_error").innerHTML='';
	   		document.getElementById("l_username").style.border="1px solid white";
	   		document.getElementById("l_password").style.border="1px solid white";
	   		
	   		document.getElementById("l_username").value="";
	   		document.getElementById("l_password").value="";
	   	}
	   });
	   $("#Register_login_div_bg").click(function(){
	        if(!$("#share").is(":visible"))
			{
	            $("#Register_login_div").hide();
			    $("#Register_login_div_bg").hide();
			    $("#project_name").hide();
			    $("#home").show();
			    		
			    document.getElementById("l_username").value="";
	   		    document.getElementById("l_password").value="";
	            document.getElementById("name").value="";
	            document.getElementById("r_username").value="";
	            document.getElementById("r_password").value="";
	            document.getElementById("c_password").value="";
                $("#login_form").show();
	            $("#Register_form").hide();
	            $("#login").css('opacity','1');	
			    $("#register").css('opacity','0.2');
			}
	   });
	   
	   
       
	   
	   
	   $("#hide_tools_div").click(function(){
	         if($("#html_edit").is(":visible"))
			    $(this).stop().animate({left:'0px'});
		     else 
		        $(this).stop().animate({left:'226px'});

			 $("#html_edit").toggle("slide");
	   });
        $('#hide_tools_div').hover(
           function() {
              $(this).css('cursor','pointer');
			  $("#hide_tools_div p").animate({opacity:'1'});
	      	  $(this).animate(
	      	  {
	      	  	width: '80px'
	      	  },
	      	  'easeInSine'
	      	  ); // end animate
	       }, 
	       function() {
		      $("#hide_tools_div p").animate({opacity:'0'});
	      	  $(this).animate(
	      	  {
	      	  	width: '15px'
	      	  },
	      	  'easeOutBounce'
	      	  ); // end animate
	       }
        );
		
		
	   
	   
	   
	    $("#pg_name_done").click(function(){
		    if(document.getElementById("input_pg_name").value!='')
			{
			    var pg_name=document.getElementById("input_pg_name").value;
				if((pg_name.indexOf("_"))==-1 && (pg_name.indexOf(" "))==-1)
				{
		            var xmlhttp=new XMLHttpRequest();
                    xmlhttp.open("GET","create_pg_name.php?name="+pg_name,false);                 // asynchronous->true
                    xmlhttp.send();			
		            
				    check_session_open_close();
				    
				    project_name_call();
				    
		            document.getElementById("input_pg_name").value='';
				    
		            $("#html_edit").show();
				    $("#tools").show();
				    scroll_size1();			
		            scroller_top_initial1=parseFloat($("#scroller1").css('top'));
	                $("#tools").scrollTop(0);
				
			        $("#editor").show();
				    $("#hide_tools_div").show();
					$("#hide_tools_div").css({left:'226px'});
		            $("#Register_login_div_bg").hide();
			        $("#project_name").hide();
				    $('#home').hide();
					document.getElementById("input_pg_name").style.border="1px solid black";
					
		                var xmlhttp=new XMLHttpRequest();
                        xmlhttp.open("GET","check_viewed.php",false);                 // asynchronous->true
                        xmlhttp.send();
				        if(xmlhttp.responseText==0)
						{
					        $("#triangle_r").show();
	                        $("#triangle_l").show();
	                        $("#right_info").show();
							
							$("#triangle_r").fadeOut(10000);
							$("#triangle_l").fadeOut(10000);
							$("#right_info").fadeOut(10000);
						}
				}
				else
				    alert("Projects name can't contain UNDERSCROLLS OR SPACES...")
            }
            else
            {
                document.getElementById("input_pg_name").style.border="1px solid red";
            }				 
		});
		
		
		
		
	    //$("#change_project").mouseover(function(){
	    //     $(this).css('cursor','pointer');
	    //     $(this).css('box-shadow','0px 0px 2px white');
	    //});
	    //$("#change_project").mouseleave(function(){
        //     $(this).css('box-shadow','0px 0px 0px black');
        //});
		$('#change_project').click(function(){
            $("#html_edit").hide();
			$("#editor").hide();
			$("#hide_tools_div").hide();
			$("#home").hide();
			$("#Register_login_div_bg").show();
			$("#project_name").show();
		});
		
		
		
	});
	
		


</script>

	

</body>
</html>