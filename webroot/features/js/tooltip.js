var _____WB$wombat$assign$function_____ = function(name) {return (self._wb_wombat && self._wb_wombat.local_init && self._wb_wombat.local_init(name)) || self[name]; };
if (!self.__WB_pmw) { self.__WB_pmw = function(obj) { this.__WB_source = obj; return this; } }
{
  let window = _____WB$wombat$assign$function_____("window");
  let self = _____WB$wombat$assign$function_____("self");
  let document = _____WB$wombat$assign$function_____("document");
  let location = _____WB$wombat$assign$function_____("location");
  let top = _____WB$wombat$assign$function_____("top");
  let parent = _____WB$wombat$assign$function_____("parent");
  let frames = _____WB$wombat$assign$function_____("frames");
  let opener = _____WB$wombat$assign$function_____("opener");

function simple_tooltip(target_items, name){
 jQuery(target_items).each(function(i){
		jQuery("body").append("<div class='"+name+"' id='"+name+i+"'><p>"+jQuery(this).attr('title')+"</p></div>");
		var my_tooltip = jQuery("#"+name+i);
		
		jQuery(this).removeAttr("title").mouseover(function(){
				my_tooltip.css({opacity:0.9, display:"none"}).fadeIn(400);
		}).mousemove(function(kmouse){
				my_tooltip.css({left:kmouse.pageX+15, top:kmouse.pageY+15});
		}).mouseout(function(){
				my_tooltip.fadeOut(400);				  
		});
	});
}

jQuery(document).ready(function(){
	 simple_tooltip("a._tooltip","tooltip");
	 simple_tooltip("a._tooltip2","tooltip2");
	 simple_tooltip("a._tooltip3","tooltip3");
});


}
/*
     FILE ARCHIVED ON 05:03:05 May 12, 2020 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 23:35:47 Feb 21, 2022.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/
/*
playback timings (ms):
  captures_list: 105.461
  exclusion.robots: 0.081
  exclusion.robots.policy: 0.074
  RedisCDXSource: 0.696
  esindex: 0.009
  LoadShardBlock: 83.576 (3)
  PetaboxLoader3.datanode: 85.105 (5)
  CDXLines.iter: 17.197 (3)
  load_resource: 403.664 (2)
  PetaboxLoader3.resolve: 312.005 (2)
*/