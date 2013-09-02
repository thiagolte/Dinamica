/* SET LOCALIZED VARIABLES */
var elements_title = objectL10n.elements_title;
var list_title = objectL10n.list_title;
var dropcap_title = objectL10n.dropcap_title;
var pullquote_left_title = objectL10n.pullquote_left_title ;
var pullquote_right_title  = objectL10n.pullquote_right_title ;
var tabs_title  = objectL10n.tabs_title;
var toggle_title  = objectL10n.toggle_title;
var image_title  = objectL10n.image_title ;
var gmap_title  = objectL10n.gmap_title ;
var youtube_title  = objectL10n.youtube_title ;
var vimeo_title  = objectL10n.vimeo_title ;
var button_title  = objectL10n.button_title ;
var bulletlist_title  = objectL10n.bulletlist_title ;
var starlist_title  = objectL10n.starlist_title ;
var arrowlist_title  = objectL10n.arrowlist_title ;
var itemlist_title  = objectL10n.itemlist_title ;
var checklist_title  = objectL10n.checklist_title ;
var squarelist_title  = objectL10n.squarelist_title; 
var deletelist_title  = objectL10n.deletelist_title;
var flaglist_title  = objectL10n.flaglist_title;
var gearlist_title  = objectL10n.gearlist_title; 
var greenarrow_title  = objectL10n.greenarrow_title;
var infobox_title  = objectL10n.infobox_title ;
var successbox_title  = objectL10n.successbox_title ;
var warningbox_title  = objectL10n.warningbox_title ;
var errorbox_title  = objectL10n.errorbox_title;
var onefourth_title = objectL10n.onefourth_title;
var onefourth_last_title = objectL10n.onefourth_last_title;
var onethird_title = objectL10n.onethird_title;
var onethird_last_title = objectL10n.onethird_last_title;
var onehalf_title = objectL10n.onehalf_title;
var onehalf_last_title = objectL10n.onehalf_last_title;
var twothird_title = objectL10n.twothird_title;
var threefourth_title = objectL10n.threefourth_title;
var twothird_last_title = objectL10n.twothird_last_title;
var threefourth_last_title = objectL10n.threefourth_last_title;
var onefifth_title = objectL10n.onefifth_title;
var onefourth_inner_title = objectL10n.onefourth_inner_title;
var columns_title = objectL10n.columns_title;
var content_title = objectL10n.content_title;
var pricing_title = objectL10n.pricing_title;
var accordion_title = objectL10n.accordion_title;
var staff_title =  objectL10n.staff_title;

// Creates a new plugin class and a custom listbox
(function() {
	tinymce.create('tinymce.plugins.shortcodes', {
    createControl : function(n, cm) {
      
      if(n=='columns'){
				
            var clb = cm.createListBox('columns', {
                 //title : columns_title,
                 title : columns_title,
                 onselect : function(v) { //Option value as parameter
			 
				         tinyMCE.execCommand('mceInsertContent',false,v); 
				                                       
                 }
            });

            // Add column values to the list box
            clb.add(onehalf_title, '[col_12][/col_12]');
            clb.add(onehalf_last_title, '[col_12_last][/col_12_last]');
            clb.add(onethird_title, '[col_13][/col_13]');
            clb.add(onethird_last_title, '[col_13_last][/col_13_last]');
            clb.add(onefourth_title, '[col_14][/col_14]');
            clb.add(onefourth_last_title, '[col_14_last][/col_14_last]');
            clb.add(twothird_title, '[col_23][/col_23]');
            clb.add(threefourth_title, '[col_34][/col_34]');
            clb.add(twothird_last_title, '[col_23_last][/col_23_last]');
            clb.add(threefourth_last_title, '[col_34_last][/col_34_last]');
            // Return the new list box instance
            return clb;
         }
             
			if(n=='elements'){
				
                var mlb = cm.createListBox('elements', {
                     //title : elements_title,
                     title : elements_title,
                     onselect : function(v) { //Option value as parameter
					 
						         tinyMCE.execCommand('mceInsertContent',false,v);
						                                       
                     }
                });
 
                // Add column values to the list box
                mlb.add(dropcap_title, '[dropcap][/dropcap]');
                mlb.add(pullquote_left_title, '[pullquote_left][/pullquote_left]');
                mlb.add(pullquote_right_title, '[pullquote_right][/pullquote_right]');
                mlb.add(image_title, '[image source="" align=""]');
                mlb.add(button_title, '[button link="#" size="" color=""][/button]');
                mlb.add(infobox_title, '[info][/info]');
                mlb.add(successbox_title, '[success][/success]');
                mlb.add(warningbox_title, '[warning][/warning]');
                mlb.add(errorbox_title, '[error][/error]'); 
                // Return the new list box instance
                return mlb;
             }

			 if(n=='list'){
				
                var mlb = cm.createListBox('list', {
                     //title : elements_title,
                     title : list_title,
                     onselect : function(v) { //Option value as parameter
					 
						         tinyMCE.execCommand('mceInsertContent',false,v);
						                                       
                     }
                });
 
                // Add column values to the list box
                mlb.add(bulletlist_title, '[bulletlist][/bulletlist]');
                mlb.add(starlist_title, '[starlist][/starlist]');
                mlb.add(checklist_title, '[checklist][/checklist]');
                mlb.add(arrowlist_title, '[arrowlist][/arrowlist]');
                mlb.add(squarelist_title, '[squarelist][/squarelist]'); 
                mlb.add(deletelist_title, '[deletelist][/deletelist]');
                mlb.add(gearlist_title, '[gearlist][/gearlist]'); 
                mlb.add(greenarrow_title, '[green_arrowlist][/green_arrowlist]');

                // Return the new list box instance
                return mlb;
             }

      if(n=='content'){
		
            var mlb = cm.createListBox('content', {
                 //title : elements_title,
                 title : content_title,
                 onselect : function(v) { //Option value as parameter
			 
				         tinyMCE.execCommand('mceInsertContent',false,v);
				                                       
                 }
            });

            // Add column values to the list box
            mlb.add(pricing_title, '[pricing column=3]'+"\r\n"+'[item title="Standard" price="$10" per="month" button_url="#" button_text="Order"]'+"\r\n"+'[/pricing]');
            mlb.add(gmap_title, '[gmap width="" height="" latitude="" longitude="" zoom="" html="" popup=""]');
            mlb.add(youtube_title, '[youtube_video id= width="" height=""]');
            mlb.add(vimeo_title, '[vimeo_video id= width="" height=""]'); 
            mlb.add(tabs_title, '[tabs]'+"\r\n"+'[tab title="your title here"]your content here[/tab]'+"\r\n"+'[/tabs]');
            mlb.add(toggle_title, '[toggle title="your title here"]your content here[/toggle]');
            mlb.add(accordion_title, '[accordions][accordion title="title 1"]contents[/accordion] ');
            mlb.add(staff_title, '[stafflist num=4 orderby="date" title=""]');
            // Return the new list box instance
            return mlb;
         }
       
      return null;
		}
	});
 
	// Register plugin
	tinymce.PluginManager.add('shortcodes', tinymce.plugins.shortcodes);
	
})();
