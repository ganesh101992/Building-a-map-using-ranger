//*********************************** Add the script tag at the end of the <body> tag
 
var panel_no=0;
document.body.onclick=function(){
      var str=window.event.target.id;
      var pre_str=window.event.target.parentNode.id;
                 
      if(str.replace(/[0-9]/g, '')=="tab")
      {
         panel_no=str.replace(/[a-z]/g, '');
         hidding_created_panels();
      }
      if(pre_str.replace(/[0-9]/g, '')=="tab")
      {
         panel_no=pre_str.replace(/[a-z]/g, '');
         hidding_created_panels();
      }
}
 
function hidding_created_panels()
{
  if($("#tools_style").is(":visible"))
  {
    if(temp_id.replace(/[0-9]/g, '')!="panel" && document.getElementById(temp_id).parentNode.id.replace(/[0-9]/g, '')!="panel")
    {
      for(var i=1;i<=tab_count;i++)
      { 
	    if(document.getElementById("panel"+i)!=null)
	    {
           if(i!=panel_no)
	       {
               document.getElementById("panel"+i).style.visibility="hidden";
	       }
           else
	       {
               document.getElementById("panel"+i).style.visibility="visible";
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
          if(i!=panel_no)
	      {
              document.getElementById("panel"+i).style.visibility="hidden";
	      }
          else
	      {
              document.getElementById("panel"+i).style.visibility="visible";
	      }
	   }
    }
  }
}